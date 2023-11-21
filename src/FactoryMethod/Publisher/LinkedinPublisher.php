<?php

namespace Src\FactoryMethod\Publisher;

class LinkedinPublisher implements PublisherInterface
{
    /**
     * @param Message $message
     * @return void
     */
    public function publish(Message $message): void
    {
        echo sprintf(
            "linkedin publisher %s - %s - %s",
            $message->getTitle(),
            $message->getImage(),
            $message->getContent()
        );
    }
}
