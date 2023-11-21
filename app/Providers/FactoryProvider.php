<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Src\FactoryMethod\LinkedinPublisherFactory;
use Src\FactoryMethod\MessagePublisher;

class FactoryProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->bind(MessagePublisher::class, LinkedinPublisherFactory::class);

    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
