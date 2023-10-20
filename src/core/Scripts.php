<?php

namespace Alihassan\Shophub\core;

use Alihassan\Shophub\traits\Singleton;

class Scripts {

    use Singleton;

    public function __construct() {
        $this->setupHooks();
    }

    public function setupHooks() {
        add_action( 'wp_enqueue_scripts', [$this, 'shophubScripts'] );
    } 

    public function shophubScripts() {
        wp_enqueue_style( 'shophub-style', get_stylesheet_uri(), array() );
        wp_style_add_data( 'shophub-style', 'rtl', 'replace' );
    
        wp_enqueue_script( 'shophub-navigation', get_template_directory_uri() . '/js/navigation.js', array(), false, true );
    
        if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
            wp_enqueue_script( 'comment-reply' );
        }
    }
}