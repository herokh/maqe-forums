<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use GuzzleHttp\Client;

class HttpServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(Client::class, function ($app) {
            return new Client([
                'base_uri' => \config('services.proxy.base_uri'),
                'headers' => [
                    'content_type' => 'application/json',
                    'accept' => 'application/json'
                ]
            ]);
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
