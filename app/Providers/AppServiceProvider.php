<?php

namespace App\Providers;

use Illuminate\Support\Facades\App;
use Illuminate\Support\ServiceProvider;
use Src\FactoryMethod\LinkedinPublisherFactory;
use Src\FactoryMethod\MessagePublisher;
use Src\Solid\DIP\Authentication;
use Src\Solid\DIP\Connection\ConnectionInterface;
use Src\Solid\DIP\Connection\MongoConnection;
use Src\Solid\DIP\Connection\MySqlConnection;
use Src\Solid\DIP\Connection\RestApiConnection;
use Src\Solid\DIP\MongoUserProvider;
use Src\Solid\DIP\MySqlUserProvider;
use Src\Solid\DIP\RestApiUserProvider;
use Src\Solid\DIP\UserProviderInterface;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
    }
}
