<?php

namespace BinarCode\LaravelSubscription;

use Illuminate\Support\Facades\Facade;

/**
 * @see \BinarCode\LaravelSubscription\LaravelSubscription
 */
class LaravelSubscriptionFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'laravel-subscriptions';
    }
}
