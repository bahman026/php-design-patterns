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

class AuthConnectionProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {

    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
