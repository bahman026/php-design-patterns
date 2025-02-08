<?php

namespace Src\Creational\FactoryMethod\Publisher\Factory;

use Src\Creational\FactoryMethod\Publisher\Interface\PublisherInterface;
use Src\Creational\FactoryMethod\Publisher\LinkedinPublisher;
use Src\Creational\FactoryMethod\Publisher\MessagePublisher;

class LinkedinPublisherFactory extends MessagePublisher
{
    protected function createPublisher(): PublisherInterface
    {
        return new LinkedinPublisher;
    }
}
