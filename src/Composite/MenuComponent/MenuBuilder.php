<?php

namespace Src\Composite\MenuComponent;

class MenuBuilder
{
    public function buildMenu()
    {
        $menuItem1 = new MenuItem('google', 'https://www.google.com');
        $menuItem2 = new MenuItem('uber', 'https://www.uber.com');
        $menuItem3 = new MenuItem('amazon', 'https://www.amazon.com');

        $menu = new MenuCollection();
        $menu->add($menuItem1);
        $menu->add($menuItem2);
        $menu->add($menuItem3);

        $submenu = new MenuCollection();
        $submenu->add($menuItem1);
        $submenu->add($menuItem2);
        $submenu->add($menuItem3);
        $menu->add($submenu);

        $menu->build();
    }
}
