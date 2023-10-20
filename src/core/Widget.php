<?php

namespace Alihassan\Shophub\core;

use Alihassan\Shophub\traits\Singleton;

class Widget
{
    use Singleton;

    public function __construct()
    {
        $this->setupHooks();
    }

    public function setupHooks()
    {
        add_action('widgets_init', [$this, 'shophubWidgetsInit']);
    }

    public function shophubWidgetsInit()
    {
        register_sidebar(
            array(
                'name'          => esc_html__('Sidebar', 'shophub'),
                'id'            => 'sidebar-1',
                'description'   => esc_html__('Add widgets here.', 'shophub'),
                'before_widget' => '<section id="%1$s" class="widget %2$s">',
                'after_widget'  => '</section>',
                'before_title'  => '<h2 class="widget-title">',
                'after_title'   => '</h2>',
            )
        );
    }
}
