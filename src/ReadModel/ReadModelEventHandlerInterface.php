<?php

namespace Cydrickn\DDD\Common\ReadModel;

use Cydrickn\DDD\Common\EventStore\EventMessage;

/**
 *
 * @author Cydrick Nonog <cydrick.dev@gmail.com>
 */
interface ReadModelEventHandlerInterface
{
    public static function supports(EventMessage $event): bool;

    public function __invoke(EventMessage $event): void;
}
