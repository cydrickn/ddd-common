<?php

declare(strict_types = 1);

namespace Cydrickn\DDD\Common\ReadModel;

use Cydrickn\DDD\Common\Domain\Event\DomainEventInterface;

/**
 * Description of AbstractReadModel
 *
 * @author Cydrick Nonog <cydrick.dev@gmail.com>
 */
abstract class AbstractReadModel implements ReadModelInterface
{
    public function apply(DomainEventInterface $event): void
    {
        $method = $this->getApplyMethod($event);
        if (!method_exists($this, $method)) {
            return;
        }
        $this->$method($event);
    }

    private function getApplyMethod(DomainEventInterface $event): string
    {
        $classParts = explode('\\', get_class($event));
        $class = end($classParts);

        return 'apply' . $class;
    }
}
