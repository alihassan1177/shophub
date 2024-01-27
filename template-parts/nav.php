<?php

use Alihassan\Shophub\core\Menu;

$menu_class = Menu::getInstance();
$menu_id = $menu_class->getMenuId("shophub-header-menu");

$header_menus = wp_get_nav_menu_items($menu_id);

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
                            <li class="menu-item fluxi-has-dropdown">
                                <a href="#" class="fluxi-dropdown-main-element">Home</a>
                                <!-- Start Dropdown Menu -->
                                <ul class="fluxi-submenu list-unstyled menu-home">
                                    <li class="nav-item"><a class="nav-link page" href="index.html">SEO Marketing</a></li>
                                    <li class="nav-item"><a class="nav-link" href="index-two.html">Digital Marketing</a></li>
                                    <li class="nav-item"><a class="nav-link" href="index-three.html">Digital Agency</a></li>
                                    <li class="nav-item"><a class="nav-link" href="index-four.html">Startup Agency</a></li>
                                    <li class="nav-item"><a class="nav-link" href="index-five.html">Advertising agency</a></li>
                                    <li class="nav-item"><a class="nav-link" href="index-six.html">Web Design Agency</a></li>
                                    <li class="nav-item"><a class="nav-link" href="index-seven.html">Social Media agency</a></li>
                                    <li class="nav-item"><a class="nav-link" href="index-eight.html">SEO Agency</a></li>
                                </ul>
                                <!-- End Dropdown Menu -->
                            </li>
                            <li class="menu-item fluxi-has-dropdown">
                                <a href="#" class="fluxi-dropdown-main-element">Pages</a>
                                <!-- Start Dropdown Menu -->
                                <ul class="fluxi-submenu list-unstyled menu-home">
                                    <li class="nav-item"><a class="nav-link page" href="about.html">About</a></li>
                                    <li class="nav-item"><a class="nav-link page" href="team.html">Our Team</a></li>
                                    <li class="nav-item"><a class="nav-link page" href="faq.html">FAQ's</a></li>
                                    <li class="nav-item"><a class="nav-link" href="book-a-demo.html">Book a Demo</a></li>
                                    <li class="nav-item"><a class="nav-link" href="free-audit.html">Free Audit</a></li>
                                    <li class="nav-item"><a class="nav-link" href="pricing.html">Pricing Plans</a></li>
                                    <li class="nav-item"><a class="nav-link" href="404.html">404 Page</a></li>
                                </ul>
                                <!-- End Dropdown Menu -->
                            </li>
                            <li class="menu-item fluxi-has-dropdown">
                                <a href="#" class="fluxi-dropdown-main-element">Services</a>
                                <!-- Start Dropdown Menu -->
                                <ul class="fluxi-submenu list-unstyled menu-home">
                                    <li class="nav-item"><a class="nav-link page" href="service.html">Service</a></li>
                                    <li class="nav-item sub-dropdown">
                                        <a href="#" class="nav-link sub-menu-link">Service Details</a>
                                        <ul class="fluxi-submenu third-lvl base">
                                            <li><a class="mobile-menu-link" href="service-single.html">Paid Search Marketing</a></li>
                                            <li><a class="mobile-menu-link" href="email-marketing.html">Email Marketing</a></li>
                                            <li><a class="mobile-menu-link" href="social-media-marketing.html">Social Media Marketing</a></li>
                                            <li><a class="mobile-menu-link" href="influencer-marketing.html">Influencer Marketing</a></li>
                                        </ul>
                                    </li>
                                </ul>
                                <!-- End Dropdown Menu -->
                            </li>
                            <li class="menu-item fluxi-has-dropdown">
                                <a href="#" class="fluxi-dropdown-main-element">Work</a>
                                <!-- Start Dropdown Menu -->
                                <ul class="fluxi-submenu list-unstyled menu-home">
                                    <li class="nav-item"><a class="nav-link page" href="case-studies.html">Case Studies</a></li>
                                    <li class="nav-item"><a class="nav-link" href="single-case-studies.html">Case Studies Details</a></li>
                                </ul>
                                <!-- End Dropdown Menu -->
                            </li>
                            <li class="menu-item fluxi-has-dropdown">
                                <a href="#" class="fluxi-dropdown-main-element">Blog</a>
                                <!-- Start Dropdown Menu -->
                                <ul class="fluxi-submenu list-unstyled menu-home">
                                    <li class="nav-item"><a class="nav-link page" href="blog.html">Blog</a></li>
                                    <li class="nav-item"><a class="nav-link" href="blog-left-sidebar.html">Blog Left Sidebar</a></li>
                                    <li class="nav-item"><a class="nav-link" href="blog-grid.html">Blog Grid</a></li>
                                    <li class="nav-item"><a class="nav-link" href="blog-grid-2.html">Blog Grid Right Sidebar</a></li>
                                    <li class="nav-item"><a class="nav-link" href="blog-grid-3.html">Blog Grid Left Sidebar</a></li>
                                    <li class="nav-item"><a class="nav-link" href="blog-details.html">Blog Details</a></li>
                                </ul>
                                <!-- End Dropdown Menu -->
                            </li>

                            <li class="menu-item"><a class="main-element fluxi-dropdown-main-element" href="contact.html">Contact</a></li>
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
                <li class="has-droupdown">
                    <a href="#" class="main">Home</a>
                    <ul class="submenu mm-collapse">
                        <li><a class="mobile-menu-link" href="index.html">SEO Marketing</a></li>
                        <li><a class="mobile-menu-link" href="index-two.html">Digital Marketing</a></li>
                        <li><a class="mobile-menu-link" href="index-three.html">Digital Agency</a></li>
                        <li><a class="mobile-menu-link" href="index-four.html">Startup Agency</a></li>
                        <li><a class="mobile-menu-link" href="index-five.html">Advertising Agency</a></li>
                        <li><a class="mobile-menu-link" href="index-six.html">Web Design Agency</a></li>
                        <li><a class="mobile-menu-link" href="index-seven.html">Social Media Agency</a></li>
                        <li><a class="mobile-menu-link" href="index-eight.html">SEO Agency</a></li>
                    </ul>
                </li>
                <li class="has-droupdown">
                    <a href="#" class="main">Pages</a>
                    <ul class="submenu mm-collapse">
                        <li><a class="mobile-menu-link" href="about.html">About</a></li>
                        <li><a class="mobile-menu-link" href="team.html">Our Team</a></li>
                        <li><a class="mobile-menu-link" href="faq.html">FAQ's</a></li>
                        <li><a class="mobile-menu-link" href="book-a-demo.html">Book a Demo</a></li>
                        <li><a class="mobile-menu-link" href="free-audit.html">Free Audit</a></li>
                        <li><a class="mobile-menu-link" href="pricing.html">Pricing Plans</a></li>
                        <li><a class="mobile-menu-link" href="404.html">404 Page</a></li>
                    </ul>
                </li>
                <li class="has-droupdown">
                    <a href="#" class="main">Services</a>
                    <ul class="submenu mm-collapse">
                        <li><a class="mobile-menu-link" href="service.html">Services</a></li>
                        <li class="has-droupdown third-lvl">
                            <a class="main" href="#">Service Details</a>
                            <ul class="submenu-third-lvl mm-collapse">
                                <li><a href="service-details.html"></a>Paid Search Marketing</li>
                                <li><a href="email-marketing.html"></a>Email Marketing</li>
                                <li><a href="social-media-marketing.html"></a>Social Media Marketing</li>
                                <li><a href="influencer-marketing.html"></a>Influencer Marketing</li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class="has-droupdown">
                    <a href="#" class="main">Work</a>
                    <ul class="submenu mm-collapse">
                        <li><a class="mobile-menu-link" href="case-studies.html">Case Studies</a></li>
                        <li><a class="mobile-menu-link" href="single-case-studies.html">Case Studies Details</a></li>
                    </ul>
                </li>
                <li class="has-droupdown">
                    <a href="#" class="main">Blog</a>
                    <ul class="submenu mm-collapse">
                        <li><a class="mobile-menu-link" href="blog.html">Blog</a></li>
                        <li><a class="mobile-menu-link" href="blog-left-sidebar.html">Blog Left Sidebar</a></li>
                        <li><a class="mobile-menu-link" href="blog-grid.html">Blog Grid</a></li>
                        <li><a class="mobile-menu-link" href="blog-grid-2.html">Blog Grid Right Sidebar</a></li>
                        <li><a class="mobile-menu-link" href="blog-grid-3.html">Blog Grid Left Sidebar</a></li>
                        <li><a class="mobile-menu-link" href="blog-details.html">Blog Details</a></li>
                    </ul>
                </li>
                <li>
                    <a href="contact.html" class="main">Contact Us</a>
                </li>
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

