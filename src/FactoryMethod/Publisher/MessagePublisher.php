<?php

namespace Src\FactoryMethod\Publisher;

// this is creator interface
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
