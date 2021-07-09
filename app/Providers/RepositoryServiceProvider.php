<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->app->bind(\App\Repositories\LogRepository::class, \App\Repositories\LogRepositoryEloquent::class);
        $this->app->bind(\App\Repositories\MatchRepository::class, \App\Repositories\MatchRepositoryEloquent::class);
        $this->app->bind(\App\Repositories\PlayerRepository::class, \App\Repositories\PlayerRepositoryEloquent::class);
        $this->app->bind(\App\Repositories\MatchPlayerRepository::class, \App\Repositories\MatchPlayerRepositoryEloquent::class);
        //:end-bindings:
    }
}
