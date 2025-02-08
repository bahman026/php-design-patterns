<?php

namespace Src\Creational\FactoryMethod\Publisher;

// this is creator interface

use Src\Creational\FactoryMethod\Publisher\Interface\PublisherInterface;

abstract class MessagePublisher
{
    public function publish(Message $message): void
    {
        $publisher = $this->createPublisher();
        $publisher->publish($message);
    }

    //    factory method
    abstract protected function createPublisher(): PublisherInterface;
}
