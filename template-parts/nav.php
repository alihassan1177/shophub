<?php

use Alihassan\Shophub\core\Menu;

$menu_class = Menu::getInstance();
$menu_id = $menu_class->getMenuId("shophub-header-menu");

$header_menus = wp_get_nav_menu_items($menu_id);

?>

<nav class="navbar navbar-expand-lg <?php if(!is_front_page()){ echo "mb-4"; } ?>">
    <div class="container-fluid">

        <a class="navbar-brand" href="<?= esc_url(get_home_url()) ?>">Navbar</a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">

            <?php if (!empty($header_menus) && is_array($header_menus)) : ?>
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <?php foreach ($header_menus as $menu_item) :
                        if (!$menu_item->menu_item_parent) :

                            $child_menus = $menu_class->getChildMenus($header_menus, $menu_item->ID);
                            $has_child_menus = !empty($child_menus) && is_array($child_menus);

                            if ($has_child_menus) :
                    ?>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="<?= esc_url($menu_item->url) ?>" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <?= esc_html($menu_item->title) ?>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <?php foreach ($child_menus as $child_menu_item) : ?>
                                            <li><a class="dropdown-item" href="<?= esc_url($child_menu_item->url) ?>"><?= $child_menu_item->title ?></a></li>
                                        <?php endforeach; ?>
                                    </ul>
                                </li>
                            <?php else : ?>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?= esc_url($menu_item->url) ?>"><?= esc_html($menu_item->title) ?></a>
                                </li>
                            <?php
                            endif;
                            ?>

                        <?php
                        endif; ?>
                    <?php endforeach; ?>
                </ul>
            <?php endif; ?>
        </div>
    </div>
</nav>