<?php

declare(strict_types=1);

/*
 * This file is part of SolidInvoice project.
 *
 * (c) Pierre du Plessis <open-source@solidworx.co>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace SolidInvoice\InstallBundle\Listener;

use Doctrine\Persistence\ManagerRegistry;
use SolidInvoice\CoreBundle\Entity\Version;
use SolidInvoice\CoreBundle\Repository\VersionRepository;
use SolidInvoice\CoreBundle\SolidInvoiceCoreBundle;
use SolidInvoice\InstallBundle\Installer\Database\Migration;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\HttpKernel\Event\RequestEvent;
use Symfony\Component\HttpKernel\HttpKernelInterface;
use Symfony\Component\HttpKernel\KernelEvents;

/**
 * Listener class to intercept requests and upgrade the database if necessary.
 */
class UpgradeListener implements EventSubscriberInterface
{
    private ?string $installed;

    private ManagerRegistry $registry;

    private Migration $migration;

    /**
     * @return array<string, list<int|string>>
     */
    public static function getSubscribedEvents(): array
    {
        return [
            KernelEvents::REQUEST => ['onKernelRequest', 10],
        ];
    }

    public function __construct(?string $installed, ManagerRegistry $registry, Migration $migration)
    {
        $this->installed = $installed;
        $this->registry = $registry;
        $this->migration = $migration;
    }

    public function onKernelRequest(RequestEvent $event): void
    {
        if (null === $this->installed) {
            return;
        }

        if (HttpKernelInterface::MAIN_REQUEST !== $event->getRequestType()) {
            return;
        }

        /** @var VersionRepository $versionRepository */
        $versionRepository = $this->registry->getRepository(Version::class);

        if (version_compare($versionRepository->getCurrentVersion(), SolidInvoiceCoreBundle::VERSION, '<')) {
            $this->migration->migrate();
        }
    }
}
