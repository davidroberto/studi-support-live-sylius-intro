<?php


namespace App\Menu;

use Sylius\Bundle\UiBundle\Menu\Event\MenuBuilderEvent;

final class AdminMenuListener
{
    public function addAdminMenuItems(MenuBuilderEvent $event): void
    {
        $menu = $event->getMenu();

        $pageMenu = $menu
            ->addChild('menu-pages')
            ->setLabel('Contenu')
        ;

        $pageMenu
            ->addChild('pages', ['route' => 'app_admin_page_index'])
            ->setLabelAttribute('icon', 'file alternate')
            ->setLabel('Pages')
        ;

    }
}
