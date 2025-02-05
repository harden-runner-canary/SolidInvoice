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

namespace SolidInvoice\CoreBundle\Traits;

use Doctrine\Persistence\ManagerRegistry;

trait DoctrineAwareTrait
{
    /**
     * @var ManagerRegistry
     */
    protected $doctrine;

    /**
     * @required
     */
    public function setDoctrine(ManagerRegistry $doctrine): void
    {
        $this->doctrine = $doctrine;
    }
}
