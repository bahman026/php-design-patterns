<?php

namespace Src\FactoryMethod;

class TwitterPublisherFactory extends MessagePublisher
{
    protected function createPublisher(): PublisherInterface
    {
        return new TwitterPublisher();
    }
}
