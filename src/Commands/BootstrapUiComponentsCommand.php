<?php

namespace Ambreenjamal\BootstrapUiComponents\Commands;

use Illuminate\Console\Command;

class BootstrapUiComponentsCommand extends Command
{
    public $signature = 'livewire-bootstrap-ui-components';

    public $description = 'My command';

    public function handle()
    {
        $this->comment('All done');
    }
}
