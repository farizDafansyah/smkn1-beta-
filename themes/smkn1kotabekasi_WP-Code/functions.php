<?php
function custom_css_in_detail_postingan()
{
    return []; // tulis file di sini jika ingin membuat custom 
}
function enqueue_custom_styles_scripts_detail_postingan()
{
    if (is_single()) {
        $categories = get_the_category();
        $category_name = !empty($categories) ? $categories[0]->name : '';

        if (!empty($category_name)) {
            if (in_array($category_name, custom_css_in_detail_postingan())) {
                wp_enqueue_style($category_name . '-css', get_template_directory_uri() . '/css/detail-postingan/' . $category_name . '.css');
            } else {
                wp_enqueue_style($category_name . '-css', get_template_directory_uri() . '/css/detail-postingan/default.css');
            }
        }
    }
}
add_action('wp_enqueue_scripts', 'enqueue_custom_styles_scripts_detail_postingan');

function remove_block_library_css()
{
    wp_dequeue_style('wp-block-library');
    wp_dequeue_style('wp-block-library-theme');
}
add_action('wp_enqueue_scripts', 'remove_block_library_css', 100);
add_filter('wp_calculate_image_srcset', '__return_false');

function set_default_thumbnail($html, $post_id, $post_thumbnail_id, $size, $attr)
{
    if (empty($html)) {
        $default_image = get_template_directory_uri() . '/images/default-thumbnail.png';
        $html = '<img src="' . $default_image . '" alt=""/>';
    }
    return $html;
}
add_filter('post_thumbnail_html', 'set_default_thumbnail', 10, 5);

// Registering menu
function smkn1kotabekasi()
{
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('responsive-embeds');
    add_theme_support('automatic-feed-links');
    add_theme_support('html5', array('search-form', 'navigation-widgets'));
    add_theme_support('appearance-tools');
    register_nav_menus(array('main-menu' => esc_html__('Main Menu', 'smkn1kotabekasi')));
}

add_action('after_setup_theme', 'smkn1kotabekasi');
