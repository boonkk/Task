<?php

namespace Interview\Challenge3\App;

use Interview\Misc\IoC;

class StateRequest extends \Interview\Challenge3\Vendor\StateRequest
{
    public function getState(): string
    {
        if (!$this->checkState(parent::getState()))
        {
            throw new \DomainException();
        }
        return parent::getState();
    }
    
    private function checkState(string $state): bool
    {
        $availableStates = IoC::get(AvailableStateRepositoryInterface::class)->all();
        return in_array($state, $availableStates);
    }
}
