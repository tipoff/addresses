<?php

namespace Tipoff\Addresses\Commands;

use Illuminate\Console\Command;

class AddressesCommand extends Command
{
    public $signature = 'addresses';

    public $description = 'My command';

    public function handle()
    {
        $this->comment('All done');
    }
}
