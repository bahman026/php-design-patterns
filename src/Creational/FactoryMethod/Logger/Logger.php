<?php

namespace Src\Creational\FactoryMethod\Logger;

// this is product

interface Logger
{
    public function log(LogMessage $message): void;
}
