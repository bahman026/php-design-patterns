<?php

namespace App\Providers;

use Illuminate\Support\Facades\App;
use Illuminate\Support\ServiceProvider;
use Src\Solid\DIP\Connection\ConnectionInterface;
use Src\Solid\DIP\Connection\MongoConnection;
use Src\Solid\DIP\Connection\MySqlConnection;
use Src\Solid\DIP\Connection\RestApiConnection;
use Src\Solid\DIP\MongoUserProvider;
use Src\Solid\DIP\MySqlUserProvider;
use Src\Solid\DIP\RestApiUserProvider;
use Src\Solid\DIP\UserProviderInterface;

class DipProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        App::bind(UserProviderInterface::class, function () {
            return new RestApiUserProvider(new RestApiConnection());
        });

        $this->app->when(MongoUserProvider::class)
            ->needs(ConnectionInterface::class)
            ->give(MongoConnection::class);

        $this->app->when(RestApiUserProvider::class)
            ->needs(ConnectionInterface::class)
            ->give(RestApiConnection::class);

        $this->app->when(MySqlUserProvider::class)
            ->needs(ConnectionInterface::class)
            ->give(MySqlConnection::class);
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
