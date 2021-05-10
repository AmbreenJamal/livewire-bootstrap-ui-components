<?php

namespace Ambreenjamal\BootstrapUiComponents;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Ambreenjamal\BootstrapUiComponents\BootstrapUiComponents
 */
class BootstrapUiComponentsFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'livewire-bootstrap-ui-components';
    }
}
