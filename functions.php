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
