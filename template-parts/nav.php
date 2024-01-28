<?php

use Alihassan\Shophub\core\Menu;

$menu_class = Menu::getInstance();
$menu_id = $menu_class->getMenuId("shophub-header-menu");

$header_menus = wp_get_nav_menu_items($menu_id);
$menus = $menu_class->normalizeMenus($header_menus);

?>

<!-- header area start -->
<header class="header-style-one header--sticky">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="header-style-one-wrapper">
                    <div class="logo-area">
                        <a href="index.html" class="logo">
                            <img class="light" src="<?= SHOPHUB_ASSETS_DIR ?>/images/logo/logo-1.svg" alt="logo">
                        </a>
                    </div>
                    <nav class="main-nav-area">
                        <ul class="list-unstyled fluxi-desktop-menu">
                            <?php foreach ($menus as $menu) : ?>
                                <li class="menu-item <?= count($menu->childs) > 0 ? "fluxi-has-dropdown" : "" ?>">
                                    <a href="<?= $menu->url ?> " class="fluxi-dropdown-main-element"><?= $menu->title ?></a>
                                    <?php if (count($menu->childs) > 0) : ?>
                                        <ul class="fluxi-submenu list-unstyled menu-home">
                                            <?php foreach ($menu->childs as $child_menu) :  ?>
                                                <li class="nav-item"><a class="nav-link page" href="<?= $child_menu->url ?>"><?= $child_menu->title ?></a></li>
                                            <?php endforeach; ?>
                                        </ul>
                                    <?php endif; ?>
                                </li>
                            <?php endforeach; ?>

                        </ul>
                    </nav>
                    <div class="button-area-start">
                        <a class="call-us" href="tel:123-456-7890">Call Us : +134 (99) 865</a>
                        <a href="free-audit.html" class="rts-btn btn-primary">Free Audit</a>
                        <div class="menu-btn" id="menu-btn">

                            <svg width="20" height="16" viewBox="0 0 20 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect y="14" width="20" height="2" fill="#1F1F25"></rect>
                                <rect y="7" width="20" height="2" fill="#1F1F25"></rect>
                                <rect width="20" height="2" fill="#1F1F25"></rect>
                            </svg>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- header area end -->

<!-- side bar area  -->
<div id="side-bar" class="side-bar header-two">
    <button class="close-icon-menu"><i class="fa-sharp fa-thin fa-xmark"></i></button>
    <!-- mobile menu area start -->
    <div class="mobile-menu-main">
        <nav class="nav-main mainmenu-nav mt--30">
            <ul class="mainmenu metismenu" id="mobile-menu-active">
                <?php foreach ($menus as $menu) : ?>
                    <li class="<?= count($menu->childs) > 0 ? 'has-droupdown' : '' ?>">
                        <a href="<?= $menu->url ?>" class="main"><?= $menu->title ?></a>
                        <?php if (count($menu->childs) > 0) : ?>
                            <ul class="submenu mm-collapse">
                                <?php foreach ($menu->childs as $child_menu) : ?>
                                    <li><a class="mobile-menu-link" href="<?= $child_menu->url ?>"><?= $child_menu->title ?></a></li>
                                <?php endforeach; ?>
                            </ul>
                        <?php endif; ?>
                    </li>
                <?php endforeach; ?>
            </ul>
        </nav>

        <ul class="social-area-one pl--20 mt--100">
            <li><a href="#"><i class="fa-brands fa-linkedin"></i></a></li>
            <li><a href="#"><i class="fa-brands fa-x-twitter"></i></a></li>
            <li><a href="#"><i class="fa-brands fa-youtube"></i></a></li>
            <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
        </ul>
    </div>
    <!-- mobile menu area end -->
</div>
<!-- side abr area end -->