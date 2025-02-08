<?php

namespace Src\Creational\FactoryMethod\Logger;

class SlackLoggerFactory extends MessageLogger
{
    protected function createLogger(): Logger
    {
        return new SlackLogger;
    }
}
