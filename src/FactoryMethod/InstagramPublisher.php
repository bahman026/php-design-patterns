<?php

namespace Src\FactoryMethod;

class InstagramPublisher implements PublisherInterface
{

    /**
     * @param Message $message
     * @return void
     */
    public function publish(Message $message): void
    {
        echo sprintf(
            "instagram publisher %s - %s - %s",
            $message->getTitle(),
            $message->getImage(),
            $message->getContent()
        );
    }
}
