<?php

namespace BinarCode\LaravelSubscription\Commands;

use Illuminate\Console\Command;

class LaravelSubscriptionCommand extends Command
{
    public $signature = 'laravel-subscriptions';

    public $description = 'My command';

    public function handle()
    {
        $this->comment('All done');
    }
}
