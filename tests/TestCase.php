<?php

namespace Ambreenjamal\BootstrapUiComponents\Tests;

use Ambreenjamal\BootstrapUiComponents\BootstrapUiComponentsServiceProvider;
use Illuminate\Database\Eloquent\Factories\Factory;
use Orchestra\Testbench\TestCase as Orchestra;

class TestCase extends Orchestra
{
    public function setUp(): void
    {
        parent::setUp();

        Factory::guessFactoryNamesUsing(
            fn (string $modelName) => 'Spatie\\BootstrapUiComponents\\Database\\Factories\\'.class_basename($modelName).'Factory'
        );
    }

    protected function getPackageProviders($app)
    {
        return [
            BootstrapUiComponentsServiceProvider::class,
        ];
    }

    public function getEnvironmentSetUp($app)
    {
        config()->set('database.default', 'testing');

        /*
        include_once __DIR__.'/../database/migrations/create_livewire-bootstrap-ui-components_table.php.stub';
        (new \CreatePackageTable())->up();
        */
    }
}
