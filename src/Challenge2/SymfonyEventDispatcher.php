<?php

namespace Interview\Challenge2;

/*
 * Implement interface methods and proxy them to Symfony event dispatcher
 */

use Symfony\Component\EventDispatcher\EventDispatcher;

class SymfonyEventDispatcher implements EventDispatcherInterface
{
    private ?EventDispatcher $dispatcher = null;

    public function dispatch(object $event)
    {
        $this->loadDispatcher();
        $this->dispatcher->dispatch($event);
    }

    public function addListener(string $event, \Closure $listener)
    {
        $this->loadDispatcher();
        $this->dispatcher->addListener($event, $listener);
    }

    private function loadDispatcher(): void
    {
        if ($this->dispatcher === null)
        {
            $this->dispatcher = new EventDispatcher();
        }
    }
}
