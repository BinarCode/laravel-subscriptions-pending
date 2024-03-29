<?php

namespace BinarCode\LaravelSubscription;

use BinarCode\LaravelSubscription\Commands\LaravelSubscriptionCommand;
use Illuminate\Support\ServiceProvider;

class LaravelSubscriptionServiceProvider extends ServiceProvider
{
    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__ . '/../config/laravel-subscriptions.php' => config_path('laravel-subscriptions.php'),
            ], 'config');

            $this->publishes([
                __DIR__ . '/../resources/views' => base_path('resources/views/vendor/laravel-subscriptions'),
            ], 'views');

            $migrationFileName = 'create_laravel_subscriptions_table.php';
            if (! $this->migrationFileExists($migrationFileName)) {
                $this->publishes([
                    __DIR__ . "/../database/migrations/{$migrationFileName}.stub" => database_path('migrations/' . date('Y_m_d_His', time()) . '_' . $migrationFileName),
                ], 'migrations');
            }

            $this->commands([
                LaravelSubscriptionCommand::class,
            ]);
        }

        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'laravel-subscriptions');
    }

    public function register()
    {
        $this->mergeConfigFrom(__DIR__ . '/../config/laravel-subscriptions.php', 'laravel-subscriptions');
    }

    public static function migrationFileExists(string $migrationFileName): bool
    {
        $len = strlen($migrationFileName);
        foreach (glob(database_path("migrations/*.php")) as $filename) {
            if ((substr($filename, -$len) === $migrationFileName)) {
                return true;
            }
        }

        return false;
    }
}
