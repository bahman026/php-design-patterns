<?php

namespace Src\FactoryMethod\Publisher;

class TwitterPublisher implements PublisherInterface
{


    /**
     * @param Message $message
     * @return void
     */

//    business logic
    public function publish(Message $message): void
    {
        echo sprintf(
            "twitter publisher %s - %s - %s",
            $message->getTitle(),
            $message->getImage(),
            $message->getContent()
        );
    }
}
