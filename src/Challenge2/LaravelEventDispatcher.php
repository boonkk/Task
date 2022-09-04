<?php

namespace Interview\Challenge2;

/*
 * Implement interface methods and proxy them to Laravel event dispatcher
 */
use Illuminate\Events\Dispatcher;

class LaravelEventDispatcher implements EventDispatcherInterface
{
    private ?Dispatcher $dispatcher = null;

    public function dispatch(object $event)
    {
        $this->loadDispatcher();
        $this->dispatcher->dispatch($event);
    }

    public function addListener(string $event, \Closure $listener)
    {
        $this->loadDispatcher();
        $this->dispatcher->listen($event, $listener);
    }

    private function loadDispatcher(): void
    {
        if ($this->dispatcher === null)
        {
            $this->dispatcher = new Dispatcher();
        }
    }
}
