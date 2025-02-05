<?php

/*
 * This file is part of SolidInvoice project.
 *
 * (c) Pierre du Plessis <open-source@solidworx.co>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

return [
    Symfony\Bundle\FrameworkBundle\FrameworkBundle::class => ['all' => true],
    Symfony\Bundle\SecurityBundle\SecurityBundle::class => ['all' => true],
    Symfony\Bundle\TwigBundle\TwigBundle::class => ['all' => true],
    Symfony\Bundle\MonologBundle\MonologBundle::class => ['all' => true],
    Symfony\Bundle\SwiftmailerBundle\SwiftmailerBundle::class => ['all' => true],
    Doctrine\Bundle\DoctrineBundle\DoctrineBundle::class => ['all' => true],
    Sensio\Bundle\FrameworkExtraBundle\SensioFrameworkExtraBundle::class => ['all' => true],
    Symfony\WebpackEncoreBundle\WebpackEncoreBundle::class => ['all' => true],
    Bazinga\Bundle\JsTranslationBundle\BazingaJsTranslationBundle::class => ['all' => true],
    Doctrine\Bundle\MigrationsBundle\DoctrineMigrationsBundle::class => ['all' => true],
    FOS\JsRoutingBundle\FOSJsRoutingBundle::class => ['all' => true],
    Knp\Bundle\MenuBundle\KnpMenuBundle::class => ['all' => true],
    Payum\Bundle\PayumBundle\PayumBundle::class => ['all' => true],
    Stof\DoctrineExtensionsBundle\StofDoctrineExtensionsBundle::class => ['all' => true],
    SolidWorx\FormHandler\FormHandlerBundle::class => ['all' => true],
    ApiPlatform\Core\Bridge\Symfony\Bundle\ApiPlatformBundle::class => ['all' => true],
    SolidInvoice\ApiBundle\SolidInvoiceApiBundle::class => ['all' => true],
    SolidInvoice\ClientBundle\SolidInvoiceClientBundle::class => ['all' => true],
    SolidInvoice\CoreBundle\SolidInvoiceCoreBundle::class => ['all' => true],
    SolidInvoice\CronBundle\SolidInvoiceCronBundle::class => ['all' => true],
    SolidInvoice\DashboardBundle\SolidInvoiceDashboardBundle::class => ['all' => true],
    SolidInvoice\DataGridBundle\SolidInvoiceDataGridBundle::class => ['all' => true],
    SolidInvoice\FormBundle\SolidInvoiceFormBundle::class => ['all' => true],
    SolidInvoice\InstallBundle\SolidInvoiceInstallBundle::class => ['all' => true],
    SolidInvoice\InvoiceBundle\SolidInvoiceInvoiceBundle::class => ['all' => true],
    SolidInvoice\MailerBundle\SolidInvoiceMailerBundle::class => ['all' => true],
    SolidInvoice\MenuBundle\SolidInvoiceMenuBundle::class => ['all' => true],
    SolidInvoice\MoneyBundle\SolidInvoiceMoneyBundle::class => ['all' => true],
    SolidInvoice\NotificationBundle\SolidInvoiceNotificationBundle::class => ['all' => true],
    SolidInvoice\PaymentBundle\SolidInvoicePaymentBundle::class => ['all' => true],
    SolidInvoice\QuoteBundle\SolidInvoiceQuoteBundle::class => ['all' => true],
    SolidInvoice\SettingsBundle\SolidInvoiceSettingsBundle::class => ['all' => true],
    SolidInvoice\TaxBundle\SolidInvoiceTaxBundle::class => ['all' => true],
    SolidInvoice\UserBundle\SolidInvoiceUserBundle::class => ['all' => true],
    Doctrine\Bundle\FixturesBundle\DoctrineFixturesBundle::class => ['dev' => true, 'test' => true],
    Liip\TestFixturesBundle\LiipTestFixturesBundle::class => ['dev' => true, 'test' => true],
    Symfony\Bundle\DebugBundle\DebugBundle::class => ['dev' => true, 'test' => true],
    Symfony\Bundle\MakerBundle\MakerBundle::class => ['dev' => true],
    Symfony\Bundle\WebProfilerBundle\WebProfilerBundle::class => ['dev' => true, 'test' => true],
    Twig\Extra\TwigExtraBundle\TwigExtraBundle::class => ['all' => true],
    Nelmio\Alice\Bridge\Symfony\NelmioAliceBundle::class => ['dev' => true, 'test' => true],
    Fidry\AliceDataFixtures\Bridge\Symfony\FidryAliceDataFixturesBundle::class => ['dev' => true, 'test' => true],
    Hautelook\AliceBundle\HautelookAliceBundle::class => ['dev' => true, 'test' => true],
];
