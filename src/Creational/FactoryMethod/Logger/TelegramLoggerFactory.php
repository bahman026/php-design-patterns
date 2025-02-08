<?php

namespace Src\Creational\FactoryMethod\Logger;

class TelegramLoggerFactory extends MessageLogger
{
    protected function createLogger(): Logger
    {
        return new TelegramLogger(new TelegramApi);
    }
}
