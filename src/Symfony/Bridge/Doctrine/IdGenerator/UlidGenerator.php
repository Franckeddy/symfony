<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Bridge\Doctrine\IdGenerator;

use Doctrine\ORM\EntityManager;
use Doctrine\ORM\Id\AbstractIdGenerator;
use Symfony\Component\Uid\Ulid;

/**
 * @experimental in 5.2
 */
final class UlidGenerator extends AbstractIdGenerator
{
    public function generate(EntityManager $em, $entity): Ulid
    {
        return new Ulid();
    }
}
