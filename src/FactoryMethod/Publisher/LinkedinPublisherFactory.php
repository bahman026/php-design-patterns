<?php

namespace Src\FactoryMethod\Publisher;

class LinkedinPublisherFactory extends MessagePublisher
{

    protected function createPublisher(): PublisherInterface
    {
        return new LinkedinPublisher();
    }
}
