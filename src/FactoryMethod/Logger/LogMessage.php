<?php

namespace Src\FactoryMethod\Logger;

class LogMessage
{
    /**
     * @param string $content
     */
    public function __construct(private readonly string $content)
    {
    }

    /**
     * @return string
     */
    public function getContent(): string
    {
        return $this->content;
    }
}
