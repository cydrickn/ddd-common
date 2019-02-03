<?php

declare(strict_types = 1);

namespace Cydrickn\DDD\Common\Command;

/**
 *
 * @author Cydrick Nonog <cydrick.dev@gmail.com>
 */
interface CommandBusInterface
{
    public function handle($command): void;
}
