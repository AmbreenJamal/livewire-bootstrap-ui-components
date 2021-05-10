<?php

namespace Ambreenjamal\BootstrapUiComponents;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Ambreenjamal\BootstrapUiComponents\Commands\BootstrapUiComponentsCommand;

class BootstrapUiComponentsServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        $package
            ->name('livewire-bootstrap-ui-components')
            ->hasConfigFile()
            ->hasViews()
    }
}
