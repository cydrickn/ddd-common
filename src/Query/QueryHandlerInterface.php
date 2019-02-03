<?php

declare(strict_types = 1);

namespace Cydrickn\DDD\Common\Query;

/**
 *
 * @author Cydrick Nonog <cydrick.dev@gmail.com>
 */
interface QueryHandlerInterface
{
    public function __invoke($query);
}
