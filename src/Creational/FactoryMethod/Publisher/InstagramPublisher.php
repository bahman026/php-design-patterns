<?php

namespace Src\Creational\FactoryMethod\Publisher;

use Src\Creational\FactoryMethod\Publisher\Interface\PublisherInterface;

class InstagramPublisher implements PublisherInterface
{
    public function publish(Message $message): void
    {
        echo sprintf(
            'instagram publisher %s - %s - %s',
            $message->getTitle(),
            $message->getImage(),
            $message->getContent()
        );
    }
}
