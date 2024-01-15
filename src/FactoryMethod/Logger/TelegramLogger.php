<?php

namespace Src\FactoryMethod\Logger;

class TelegramLogger implements Logger
{
    private TelegramApi $telegramApi;

    /**
     * @param $telegramApi
     */
    public function __construct(TelegramApi $telegramApi)
    {
        $this->telegramApi = $telegramApi;
    }


    public function log(LogMessage $message): void
    {
        $telegramApi = $this->telegramApi;
        // TODO: Implement log() method.
    }
}
