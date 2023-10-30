<?php

namespace Src\FactoryMethod;

class InstagramPublisherFactory extends MessagePublisher
{

    protected function createPublisher(): PublisherInterface
    {
        return new InstagramPublisher();
    }
}
