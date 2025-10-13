<?php

namespace YourStoryz\YourStoryz\Commands;

use Illuminate\Console\Command;

class YourStoryzCommand extends Command
{
    public $signature = 'laravel-yourstoryz';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
