<?php

/**
 * shophub functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package shophub
 */


if (!defined('SHOPHUB_ASSETS_DIR')) {
    define('SHOPHUB_ASSETS_DIR', untrailingslashit(get_template_directory_uri()) . "/assets");
}

require_once get_template_directory() . "/vendor/autoload.php";

use Alihassan\Shophub\core\Theme;

Theme::getInstance();

/*Custom Post type start*/
function cw_post_type_courses()
{
    $supports = array(
        'title', // post title
        'editor', // post content
        'author', // post author
        'thumbnail', // featured images
        'excerpt', // post excerpt
        'custom-fields', // custom fields
        'comments', // post comments
        'revisions', // post revisions
        'post-formats', // post formats
    );

    $labels = array(
        'name' => _x('Courses', 'plural'),
        'singular_name' => _x('Course', 'singular'),
        'menu_name' => _x('Courses', 'admin menu'),
        'name_admin_bar' => _x('Courses', 'admin bar'),
        'add_new' => _x('Add New', 'add new'),
        'add_new_item' => __('Add New Course'),
        'new_item' => __('New Course'),
        'edit_item' => __('Edit Course'),
        'view_item' => __('View Course'),
        'all_items' => __('All Courses'),
        'search_items' => __('Search Courses'),
        'not_found' => __('No courses found.'),
    );

    $args = array(
        'supports' => $supports,
        'labels' => $labels,
        'public' => true,
        'query_var' => true,
        'rewrite' => array('slug' => 'courses'),
        'has_archive' => true,
        'hierarchical' => false,
    );
    register_post_type('courses', $args);
}

function reg_course_cat() {
    register_taxonomy_for_object_type('category','courses');
}

add_action('init', 'cw_post_type_courses');
add_action('init', 'reg_course_cat');

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';
