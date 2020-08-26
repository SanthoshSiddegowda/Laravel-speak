<?php

namespace Laravelspeak;

use Illuminate\Support\ServiceProvider;

class SpeakServiceProvider extends ServiceProvider
{
    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = false;

    /**
     * The commands to be registered from the package.
     *
     * @var array
     */
    protected $commands = [
    ];

    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot()
    {
    
    }

    /**
     * Register any package services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('passgenerator', function ($app) {
            return new PassGenerator($app);
        });

        $this->commands($this->commands);
    }

    
}
