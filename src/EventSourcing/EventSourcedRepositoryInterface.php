<?php

declare(strict_types = 1);

namespace Cydrickn\DDD\Common\EventSourcing;

use Cydrickn\DDD\Common\EventStore\EventMessage;

/**
 *
 * @author Cydrick Nonog <cydrick.dev@gmail.com>
 */
interface EventSourcedRepositoryInterface
{
    public function sourceExists(string $id): bool;

    public function saveSource(EventSourceInterface $eventSourced): void;

    public function saveSourceEvents(\Iterator $events): void;

    public function saveSourceEvent(EventMessage $event): void;

    public function getSource(string $id): EventSourceInterface;
}
