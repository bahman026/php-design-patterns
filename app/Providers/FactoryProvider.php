<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Src\FactoryMethod\Account\AccountCreator;
use Src\FactoryMethod\Account\GeneralAccountFactory;
use Src\FactoryMethod\Publisher\LinkedinPublisherFactory;
use Src\FactoryMethod\Publisher\MessagePublisher;

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
