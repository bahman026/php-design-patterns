<?php

namespace Src\Creational\FactoryMethod\Publisher;

class Message
{
    public function __construct(
        private readonly string $title,
        private readonly string $image,
        private readonly string $content,
    ) {}

    public function getTitle(): string
    {
        return $this->title;
    }

    public function getImage(): string
    {
        return $this->image;
    }

    public function getContent(): string
    {
        return $this->content;
    }
}
