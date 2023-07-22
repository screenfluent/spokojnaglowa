<?php
/**
 * Theme Name: Spokojna Głowa
 * Author: Szymon Rączka
 * Description: A minimalist WordPress theme designed for the Spokojna Głowa website.
 * Version: 1.0
 */

// Remove unnecessary scripts and meta tags from wp_head
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('wp_print_styles', 'print_emoji_styles');
remove_action('wp_head', 'feed_links', 2);
remove_action('wp_head', 'feed_links_extra', 3);
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'wp_generator');
remove_action('wp_head', 'rest_output_link_wp_head', 10);
remove_action('wp_head', 'wp_oembed_add_discovery_links', 10);
remove_action('wp_head', 'wp_shortlink_wp_head', 10, 0);

// Remove default WordPress styles
function remove_block_css() {
	wp_dequeue_style( 'wp-block-library' );
	wp_dequeue_style( 'wp-block-library-theme' );
	wp_dequeue_style( 'wp-block-library-css' );
}
add_action( 'wp_print_styles', 'remove_block_css' );

remove_action( 'wp_enqueue_scripts', 'wp_enqueue_global_styles' );
remove_action( 'wp_enqueue_scripts', 'wp_enqueue_classic_theme_styles' );

// Remove WordPress version numbers
function remove_version() {
    return '';
}
add_filter('the_generator', 'remove_version');

function remove_version_from_rss() {
    return '';
}
add_filter('the_generator', 'remove_version_from_rss');

function remove_version_from_scripts_and_styles($src) {
    if (strpos($src, 'ver=')) {
        $src = remove_query_arg('ver', $src);
    }
    return $src;
}
add_filter('style_loader_src', 'remove_version_from_scripts_and_styles', 9999);
add_filter('script_loader_src', 'remove_version_from_scripts_and_styles', 9999);

// Add custom styles
function enqueue_my_style() {
    wp_enqueue_style('my-style', get_template_directory_uri() . '/style.css');
}
add_action('wp_enqueue_scripts', 'enqueue_my_style');