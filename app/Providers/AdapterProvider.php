<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Src\Adapter\Notification\NotifierInterface;
use Src\Adapter\Notification\TelegramAPI;
use Src\Adapter\Notification\TelegramNotifierAdapter;

class AdapterProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->bind(NotifierInterface::class, function ($app) {
            return new TelegramNotifierAdapter(new TelegramAPI(), 'chatId');
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
