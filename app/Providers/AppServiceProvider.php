<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{

    public function register()
    {
        $this->app->bind(
            'App\Repositories\PostRepositoryInterface',
            'App\Repositories\PostRepository'
        );
    }

    public function boot()
    {
        //
    }
}
