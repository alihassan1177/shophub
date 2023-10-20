<?php

namespace Alihassan\Shophub\core;

use Alihassan\Shophub\traits\Singleton;

class Scripts {

    use Singleton;

    public function __construct() {
        $this->setupHooks();
    }

    public function setupHooks() {
        add_action( 'wp_enqueue_scripts', [$this, 'shophubStylesheets'] );
        add_action( 'wp_enqueue_scripts', [$this, 'shophubScripts'] );
    } 

    public function shophubStylesheets() {
        wp_register_style( 'shophub-style', get_stylesheet_uri(), [], filemtime(get_template_directory() . '/style.css'));
        wp_register_style( 'bootstrap-style', SHOPHUB_ASSETS_DIR . '/library/bootstrap/css/bootstrap.min.css', [], filemtime(get_template_directory() . '/assets/library/bootstrap/css/bootstrap.min.css'));

        wp_enqueue_style('shophub-style');
        wp_enqueue_style('bootstrap-style');
    }

    public function shophubScripts() {
        wp_register_script('bootstrap-script', SHOPHUB_ASSETS_DIR . '/library/bootstrap/js/bootstrap.bundle.min.js', [], filemtime(get_template_directory() . '/assets/library/bootstrap/js/bootstrap.bundle.min.js'), true);
        
        wp_enqueue_script('bootstrap-script');
    }
}