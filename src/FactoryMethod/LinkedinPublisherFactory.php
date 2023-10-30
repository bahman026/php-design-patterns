<?php

namespace Src\FactoryMethod;

class LinkedinPublisherFactory extends MessagePublisher
{

    protected function createPublisher(): PublisherInterface
    {
        return new LinkedinPublisher();
    }
}
