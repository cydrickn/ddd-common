<?php

declare(strict_types = 1);

namespace Cydrickn\DDD\Common\ReadModel;

use Cydrickn\DDD\Common\Domain\Event\DomainEventInterface;
use Cydrickn\DDD\Common\Serializer\Serializable;

/**
 *
 * @author Cydrick Nonog <cydrick.dev@gmail.com>
 */
interface ReadModelInterface extends Serializable
{
    public function getId(): string;

    public function apply(DomainEventInterface $event): void;
}
