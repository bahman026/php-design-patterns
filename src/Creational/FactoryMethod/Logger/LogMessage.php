<?php

namespace Src\Creational\FactoryMethod\Logger;

class LogMessage
{
    public function __construct(private readonly string $content) {}

    public function getContent(): string
    {
        return $this->content;
    }
}
