<?php

declare(strict_types = 1);

namespace Cydrickn\DDD\Common\ReadModel;

use Cydrickn\DDD\Common\Domain\Event\DomainEventInterface;
use Cydrickn\DDD\Common\EventStore\EventMessage;

/**
 * Description of AbstractReadModelEventSubscriber
 *
 * @author Cydrick Nonog <cydrick.dev@gmail.com>
 */
abstract class AbstractReadModelEventHandler implements ReadModelEventHandlerInterface
{
    public function __invoke(EventMessage $event): void
    {
        if (!$this->supports($event)) {
            return;
        }

        $method = $this->getHandleMethod($event->payload());
        if (!method_exists($this, $method)) {
            return;
        }
        $this->$method($event);
    }

    private function getHandleMethod(DomainEventInterface $event): string
    {
        $classParts = explode('\\', get_class($event));

        return 'handle'.end($classParts);
    }
}
