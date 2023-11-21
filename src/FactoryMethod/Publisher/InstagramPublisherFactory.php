<?php

namespace Src\FactoryMethod\Publisher;

class InstagramPublisherFactory extends MessagePublisher
{

    protected function createPublisher(): PublisherInterface
    {
        return new InstagramPublisher();
    }
}
