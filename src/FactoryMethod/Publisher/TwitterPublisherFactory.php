<?php

namespace Src\FactoryMethod\Publisher;

class TwitterPublisherFactory extends MessagePublisher
{
    protected function createPublisher(): PublisherInterface
    {
        return new TwitterPublisher();
    }
}
