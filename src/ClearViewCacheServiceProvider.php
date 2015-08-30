<?php

namespace Baao\ClearViewCache;

use Illuminate\Support\ServiceProvider;

class ClearViewCacheServiceProvider extends ServiceProvider
{

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->app['command.view.clear'] = $this->app->share(
            function () {
                return new ClearViewCache();
            }
        );

        $this->commands(['command.view.clear']);
    }

    public function provides()
    {
        return ['command.view.clear'];
    }
}