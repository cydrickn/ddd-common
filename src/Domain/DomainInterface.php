<?php

declare(strict_types = 1);

namespace Cydrickn\DDD\Common\Domain;

use Cydrickn\DDD\Common\Domain\ValueObject\DomainIdInterface;

/**
 *
 * @author Cydrick Nonog <cydrick.dev@gmail.com>
 */
interface DomainInterface
{
    public function id(): ?DomainIdInterface;
}
