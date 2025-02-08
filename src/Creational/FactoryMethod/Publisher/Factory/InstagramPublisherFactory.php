<?php

namespace Src\Creational\FactoryMethod\Publisher\Factory;

use Src\Creational\FactoryMethod\Publisher\InstagramPublisher;
use Src\Creational\FactoryMethod\Publisher\Interface\PublisherInterface;
use Src\Creational\FactoryMethod\Publisher\MessagePublisher;

class InstagramPublisherFactory extends MessagePublisher
{
    protected function createPublisher(): PublisherInterface
    {
        return new InstagramPublisher;
    }
}
