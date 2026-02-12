<?php
// Theme setup
function wp_advanced_setup() {
    // Add theme support
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('custom-logo');
    add_theme_support('html5', ['search-form', 'comment-form', 'gallery']);
    add_theme_support('post-formats', ['aside', 'gallery', 'video']);

    // Register menus
    register_nav_menus([
        'primary' => __('Primary Menu', 'wp-advanced'),
        'footer'  => __('Footer Menu', 'wp-advanced'),
    ]);
}
add_action('after_setup_theme', 'wp_advanced_setup');

// Enqueue CSS & JS
function wp_advanced_scripts() {
    wp_enqueue_style('wp-advanced-style', get_stylesheet_uri());
    wp_enqueue_script('wp-advanced-js', get_template_directory_uri() . '/assets/js/main.js', [], false, true);
}
add_action('wp_enqueue_scripts', 'wp_advanced_scripts');

// Register sidebar
function wp_advanced_widgets() {
    register_sidebar([
        'name'          => __('Main Sidebar', 'wp-advanced'),
        'id'            => 'sidebar-1',
        'description'   => __('Widgets in this area will be shown on all posts and pages.', 'wp-advanced'),
        'before_widget' => '<div class="widget">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ]);
}
add_action('widgets_init', 'wp_advanced_widgets');

// Custom Post Type
function wp_advanced_cpt() {
    register_post_type('portfolio', [
        'labels' => [
            'name' => __('Portfolio'),
            'singular_name' => __('Portfolio Item'),
        ],
        'public' => true,
        'has_archive' => true,
        'supports' => ['title', 'editor', 'thumbnail', 'excerpt'],
    ]);
}
add_action('init', 'wp_advanced_cpt');

// Custom Taxonomy
function wp_advanced_taxonomy() {
    register_taxonomy('tech-stack', 'portfolio', [
        'label' => __('Tech Stack'),
        'rewrite' => ['slug' => 'tech-stack'],
        'hierarchical' => true,
    ]);
}
add_action('init', 'wp_advanced_taxonomy');