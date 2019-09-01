<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Http\Repositories;
use GuzzleHttp\Client;


class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(Repositories\AuthorRepository::class, function ($app) {
            return new Repositories\AuthorRepository($app->make(Client::class));
        });

        $this->app->singleton(Repositories\PostRepository::class, function ($app) {
            return new Repositories\PostRepository(
                $app->make(Client::class), 
                $app->make(Repositories\AuthorRepository::class));
        });
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
