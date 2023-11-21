<?php

namespace Src\FactoryMethod\Logger;

//this is creator class (main)
abstract class MessageLogger
{
    public function log(LogMessage $message): void
    {
        $logger = $this->createLogger();
        $logger->log($message);
    }

    abstract protected function createLogger(): Logger;

}
