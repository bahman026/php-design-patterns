<?php

namespace Src\Composite\Concept;

class Composite implements Component
{
    private array $components = [];

    public function addComponent(Component $component): void
    {
        $this->components[] = $component;
    }

    public function operation(): void
    {
        foreach ($this->components as $component) {
            $component->operation();
        }
    }
}
