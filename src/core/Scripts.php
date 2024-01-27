<?php

namespace Alihassan\Shophub\core;

use Alihassan\Shophub\traits\Singleton;

class Scripts
{

    use Singleton;

    public function __construct()
    {
        $this->setupHooks();
    }

    public function setupHooks()
    {
        add_action('wp_enqueue_scripts', [$this, 'shophubStylesheets']);
        add_action('wp_enqueue_scripts', [$this, 'shophubScripts']);
    }

    public function shophubStylesheets()
    {

        wp_register_style('shophub-style', get_stylesheet_uri(), [], filemtime(get_template_directory() . '/style.css'));
        wp_register_style('swiper', SHOPHUB_ASSETS_DIR . '/css/plugins/swiper.min.css', [], filemtime(get_template_directory() . '/assets/css/plugins/swiper.min.css'));
        wp_register_style('magnific-popup', SHOPHUB_ASSETS_DIR . '/css/plugins/magnific-popup.css', [], filemtime(get_template_directory() . '/assets/css/plugins/magnific-popup.css'));
        wp_register_style('metis-menu', SHOPHUB_ASSETS_DIR . '/css/plugins/metismenu.css', [], filemtime(get_template_directory() . '/assets/css/plugins/metismenu.css'));
        wp_register_style('bootstrap', SHOPHUB_ASSETS_DIR . '/css/vendor/bootstrap.min.css', [], filemtime(get_template_directory() . '/assets/css/vendor/bootstrap.min.css'));
        wp_register_style('font-awesome', SHOPHUB_ASSETS_DIR . '/css/plugins/fontawesome.min.css', [], filemtime(get_template_directory() . '/assets/css/plugins/fontawesome.min.css'));
        wp_register_style('theme-style', SHOPHUB_ASSETS_DIR . '/css/style.css', [], filemtime(get_template_directory() . '/assets/css/style.css'));

        wp_enqueue_style('shophub-style');
        wp_enqueue_style('swiper');
        wp_enqueue_style('magnific-popup');
        wp_enqueue_style('metis-menu');
        wp_enqueue_style('bootstrap');
        wp_enqueue_style('font-awesome');
        wp_enqueue_style('theme-style');
    }

    public function shophubScripts()
    {
        wp_register_script('jquery', SHOPHUB_ASSETS_DIR . '/js/plugins/jquery.min.js', [], filemtime(get_template_directory() . '/assets/js/plugins/jquery.min.js'), true);
        wp_register_script('bootstrap', SHOPHUB_ASSETS_DIR . '/js/plugins/bootstrap.min.js', [], filemtime(get_template_directory() . '/assets/js/plugins/bootstrap.min.js'), true);
        wp_register_script('metis-menu', SHOPHUB_ASSETS_DIR . '/js/plugins/metismenu.js', [], filemtime(get_template_directory() . '/assets/js/plugins/metismenu.js'), true);
        wp_register_script('jquery-ui', SHOPHUB_ASSETS_DIR . '/js/vendor/jqueryui.js', [], filemtime(get_template_directory() . '/assets/js/vendor/jqueryui.js'), true);
        wp_register_script('waypoint', SHOPHUB_ASSETS_DIR . '/js/vendor/waypoint.js', [], filemtime(get_template_directory() . '/assets/js/vendor/waypoint.js'), true);
        wp_register_script('swiper', SHOPHUB_ASSETS_DIR . '/js/plugins/swiper.js', [], filemtime(get_template_directory() . '/assets/js/plugins/swiper.js'), true);
        wp_register_script('theia-sidebar', SHOPHUB_ASSETS_DIR . '/js/plugins/theia-sticky-sidebar.min.js', [], filemtime(get_template_directory() . '/assets/js/plugins/theia-sticky-sidebar.min.js'), true);
        wp_register_script('gsap', SHOPHUB_ASSETS_DIR . '/js/plugins/gsap.min.js', [], filemtime(get_template_directory() . '/assets/js/plugins/gsap.min.js'), true);
        wp_register_script('scroll-trigger', SHOPHUB_ASSETS_DIR . '/js/plugins/scrolltigger.js', [], filemtime(get_template_directory() . '/assets/js/plugins/scrolltigger.js'), true);
        wp_register_script('split-text', SHOPHUB_ASSETS_DIR . '/js/vendor/split-text.js', [], filemtime(get_template_directory() . '/assets/js/vendor/split-text.js'), true);
        wp_register_script('split-type', SHOPHUB_ASSETS_DIR . '/js/vendor/split-type.js', [], filemtime(get_template_directory() . '/assets/js/vendor/split-type.js'), true);
        wp_register_script('waw', SHOPHUB_ASSETS_DIR . '/js/vendor/waw.js', [], filemtime(get_template_directory() . '/assets/js/vendor/waw.js'), true);
        wp_register_script('counter-up', SHOPHUB_ASSETS_DIR . '/js/plugins/counter-up.js', [], filemtime(get_template_directory() . '/assets/js/plugins/counter-up.js'), true);
        wp_register_script('magnific-popup', SHOPHUB_ASSETS_DIR . '/js/plugins/magnific-popup.js', [], filemtime(get_template_directory() . '/assets/js/plugins/magnific-popup.js'), true);
        wp_register_script('theme-js', SHOPHUB_ASSETS_DIR . '/js/main.js', [], filemtime(get_template_directory() . '/assets/js/main.js'), true);

        wp_enqueue_script('jquery');
        wp_enqueue_script('bootstrap');
        wp_enqueue_script('metis-menu');
        wp_enqueue_script('jquery-ui');
        wp_enqueue_script('waypoint');
        wp_enqueue_script('swiper');
        wp_enqueue_script('theia-sidebar');
        wp_enqueue_script('gsap');
        wp_enqueue_script('scroll-trigger');
        wp_enqueue_script('split-text');
        wp_enqueue_script('split-type');
        wp_enqueue_script('waw');
        wp_enqueue_script('counter-up');
        wp_enqueue_script('magnific-popup');
        wp_enqueue_script('theme-js');
    }
}
