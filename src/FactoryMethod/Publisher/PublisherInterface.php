<?php

namespace Src\FactoryMethod\Publisher;

//this is product interface
interface PublisherInterface
{
//    product method
    public function publish(Message $message): void;
}
