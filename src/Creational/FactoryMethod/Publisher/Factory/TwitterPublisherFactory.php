<?php

namespace Src\Creational\FactoryMethod\Publisher\Factory;

use Src\Creational\FactoryMethod\Publisher\Interface\PublisherInterface;
use Src\Creational\FactoryMethod\Publisher\MessagePublisher;
use Src\Creational\FactoryMethod\Publisher\TwitterPublisher;

class TwitterPublisherFactory extends MessagePublisher
{
    protected function createPublisher(): PublisherInterface
    {
        return new TwitterPublisher;
    }
}
