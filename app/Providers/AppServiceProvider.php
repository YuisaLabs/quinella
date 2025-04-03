<?php

namespace App\Providers;

use App\Models\OauthClient;
use App\Services\OauthClientRepository as ServicesOauthClientRepository;
use Illuminate\Support\ServiceProvider;
use Laravel\Passport\ClientRepository;
use Laravel\Passport\Passport;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(
            ClientRepository::class,
            ServicesOauthClientRepository::class
        );
        Passport::useClientModel(OauthClient::class);
        Passport::ignoreRoutes();
        Passport::enablePasswordGrant();
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
