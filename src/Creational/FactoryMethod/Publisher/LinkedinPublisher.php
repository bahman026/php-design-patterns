<?php

namespace Src\Creational\FactoryMethod\Publisher;

use Src\Creational\FactoryMethod\Publisher\Interface\PublisherInterface;

class LinkedinPublisher implements PublisherInterface
{
    public function publish(Message $message): void
    {
        echo sprintf(
            'linkedin publisher %s - %s - %s',
            $message->getTitle(),
            $message->getImage(),
            $message->getContent()
        );
    }
}
