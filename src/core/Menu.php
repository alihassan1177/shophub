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

    public function getMenuId($location){
        $locations = get_nav_menu_locations();
        return $locations[$location] ?? "";       
    }

    public function getChildMenus($menu, $parentMenuItemId){
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
