<?php

namespace Src\Composite\MenuComponent;

class MenuItem implements MenuComponent
{
    public function __construct(
        private readonly string $title,
        private readonly string $url,
    ) {}

    public function build(): void
    {
        echo "<a href='{$this->url}'>{$this->title}</a>";
    }
}
