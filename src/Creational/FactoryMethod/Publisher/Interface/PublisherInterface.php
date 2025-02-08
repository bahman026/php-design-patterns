<?php

namespace Src\Creational\FactoryMethod\Publisher\Interface;

// this is product interface

use Src\Creational\FactoryMethod\Publisher\Message;

interface PublisherInterface
{
    //    product method
    public function publish(Message $message): void;
}
