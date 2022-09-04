<?php

namespace Interview\Challenge2;

/*
 * Implement interface methods and proxy them to Laravel event dispatcher
 */
class LaravelEventDispatcher implements EventDispatcherInterface
{
    public function dispatch(object $event)
    {
        // TODO: Implement dispatch() method.
    }

    public function addListener(string $event, \Closure $listener)
    {
        // TODO: Implement addListener() method.
    }
}