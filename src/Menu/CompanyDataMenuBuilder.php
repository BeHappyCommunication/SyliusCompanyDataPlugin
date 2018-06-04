<?php

declare(strict_types = 1);

namespace BeHappy\SyliusCompanyDataPlugin\Menu;

use Sylius\Bundle\UiBundle\Menu\Event\MenuBuilderEvent;

/**
 * Class CompanyDataMenuBuilder
 *
 * @package BeHappy\SyliusCompanyDataPlugin\Menu
 */
final class CompanyDataMenuBuilder
{
    /**
     * @param MenuBuilderEvent $menuBuilderEvent
     */
    public function addItem(MenuBuilderEvent $menuBuilderEvent): void
    {
        $configurationMenu = $menuBuilderEvent->getMenu()->getChild('configuration');
        $configurationMenu
            ->addChild('company_data.menu', [
                'route' => 'behappy_company_data_plugin_admin_company_data_index'
            ])
            ->setLabel('behappy_company_data_plugin.ui.company_datas')
            ->setLabelAttribute('icon', 'building');
    }
}