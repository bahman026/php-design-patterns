<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Src\Creational\FactoryMethod\Account\AccountCreator;
use Src\Creational\FactoryMethod\Account\GeneralAccountFactory;
use Src\Creational\FactoryMethod\Publisher\Factory\LinkedinPublisherFactory;
use Src\Creational\FactoryMethod\Publisher\MessagePublisher;

class FactoryProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->bind(MessagePublisher::class, LinkedinPublisherFactory::class);
        $this->app->bind(AccountCreator::class, GeneralAccountFactory::class);
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
