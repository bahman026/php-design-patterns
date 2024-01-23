<?php

namespace Src\Composite\MenuComponent;

class MenuCollection implements MenuComponent
{
    private array $menuItems = [];

    public function add(MenuComponent $component): void
    {
        $this->menuItems[] = $component;
    }

    public function build(): void
    {
        echo '<div class="menu">';
        foreach ($this->menuItems as $menuItem) {
            $menuItem->build();
        }
        echo '</div>';
    }
}
