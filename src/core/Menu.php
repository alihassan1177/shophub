<?php

namespace Alihassan\Shophub\core;

use Alihassan\Shophub\traits\Singleton;

class Menu
{
    use Singleton;

    public function __construct()
    {
        $this->setupHooks();
    }

    public function setupHooks()
    {
        add_action('init', [$this, 'registerMenus']);
    }

    public function registerMenus()
    {
        register_nav_menus([
            'shophub-header-menu' => __('Header Menu')
        ]);
    }

    public function normalizeMenus($header_menus)
    {
        $menus = [];
        if (empty($header_menus)) {
            return [];
        }

        foreach ($header_menus as $menu) {
            if ($menu->menu_item_parent == 0) {

                $menu->childs = [];

                foreach ($header_menus as $child_menu) {
                    if ($child_menu->menu_item_parent == $menu->ID) {
                        $menu->childs[] = $child_menu;
                    }
                }

                $menus[] = $menu;
            }
        }

        return $menus;
    }

    public function getMenuId($location)
    {
        $locations = get_nav_menu_locations();
        return $locations[$location] ?? "";
    }

    public function getChildMenus($menu, $parentMenuItemId)
    {
        $childMenuItems = [];

        if (!empty($menu) && is_array($menu)) {
            foreach ($menu as $menuItem) {
                if (intval($menuItem->menu_item_parent) === $parentMenuItemId) {
                    $childMenuItems[]  = $menuItem;
                }
            }
        }

        return $childMenuItems;
    }
}
