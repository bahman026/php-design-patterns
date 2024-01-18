<?php

namespace App\Providers;

use Illuminate\Database\Connectors\ConnectionFactory;
use Illuminate\Support\ServiceProvider;
use Src\Bridge\PaymentModule\Handlers\ZarinPalHandler;
use Src\Bridge\PaymentModule\Methods\OnlinePayment;
use Src\FactoryMethod\Publisher\LinkedinPublisherFactory;
use Src\FactoryMethod\Publisher\MessagePublisher;

class BridgeProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->bind(OnlinePayment::class, function ($app) {
            $connection = resolve(ConnectionFactory::class);
            return new OnlinePayment($connection->make('mysql'), new ZarinPalHandler());
        });
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
