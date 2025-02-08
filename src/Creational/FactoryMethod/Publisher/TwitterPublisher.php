<?php

namespace Src\Creational\FactoryMethod\Publisher;

use Src\Creational\FactoryMethod\Publisher\Interface\PublisherInterface;

class TwitterPublisher implements PublisherInterface
{
    //    business logic
    public function publish(Message $message): void
    {
        echo sprintf(
            'twitter publisher %s - %s - %s',
            $message->getTitle(),
            $message->getImage(),
            $message->getContent()
        );
    }
}
