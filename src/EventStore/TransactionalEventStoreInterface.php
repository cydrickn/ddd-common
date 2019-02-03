<?php

declare(strict_types = 1);

namespace Cydrickn\DDD\Common\EventStore;

/**
 *
 * @author Cydrick Nonog <cydrick.dev@gmail.com>
 */
interface TransactionalEventStoreInterface extends EventStoreInterface
{
    public function beginTransaction(): void;
    public function commit(): void;
    public function rollback(): void;
}
