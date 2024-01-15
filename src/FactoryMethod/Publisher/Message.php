<?php

namespace Src\FactoryMethod\Publisher;

class Message
{
    /**
     * @param string $title
     * @param string $image
     * @param string $content
     */
    public function __construct(
        private readonly string $title,
        private readonly string $image,
        private readonly string $content,
    ) {
    }

    /**
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * @return string
     */
    public function getImage(): string
    {
        return $this->image;
    }

    /**
     * @return string
     */
    public function getContent(): string
    {
        return $this->content;
    }
}
