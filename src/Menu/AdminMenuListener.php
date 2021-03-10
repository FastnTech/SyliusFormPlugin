<?php

declare(strict_types=1);

namespace FastnTech\FormPlugin\Menu;

use Sylius\Bundle\UiBundle\Menu\Event\MenuBuilderEvent;

final class AdminMenuListener
{
    /**
     * @param MenuBuilderEvent $event
     */
    public function addAdminMenuItems(MenuBuilderEvent $event): void
    {
        $menu = $event->getMenu();

        $forms = $menu
            ->addChild('forms')
            ->setLabel('Formlar')
        ;

        $forms
            ->addChild('contact_form', ['route' => 'fastntech_form_admin_contact_index'])
            ->setLabel('İletişim Formu')
        ;
    }
}