<?php

namespace Src\FactoryMethod;

class TwitterPublisher implements PublisherInterface
{


    /**
     * @param Message $message
     * @return void
     */
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
