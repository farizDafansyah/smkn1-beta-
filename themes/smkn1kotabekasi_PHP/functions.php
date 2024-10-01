<?php
// untuk nama file js pada folder js/
function custom_js_in_page()
{
    return [''];
}

// untuk nama file css pada folder detail-postingan/
function custom_css_in_detail_postingan()
{
    return [''];
}

// untuk mengatur css dan js pada halaman
function enqueue_custom_styles_scripts_page()
{
    // Untuk semua halaman, selalu muat header dan footer CSS dan JS
    wp_enqueue_style('header-css', get_template_directory_uri() . '/css/header.css');
    wp_enqueue_script('header-js', get_template_directory_uri() . '/js/header.js', array(), false, true);

    wp_enqueue_style('footer-css', get_template_directory_uri() . '/css/footer.css');

    // Cek apakah halaman menggunakan template khusus
    if (is_page_template()) {
        $template_slug = get_page_template_slug();
        $template_name = str_replace('page/', '', $template_slug);
        $template_name = str_replace('.php', '', $template_name);

        // Enqueue file CSS dan JS berdasarkan template
        if (!empty($template_name)) {
            wp_enqueue_style($template_name . '-css', get_template_directory_uri() . '/css/' . $template_name . '.css');

            if (in_array($template_name, custom_js_in_page())) {
                wp_enqueue_script($template_name . '-js', get_template_directory_uri() . '/js/' . $template_name . '.js', array(), false, true);
            }
        }
    }

    // Untuk halaman depan atau home
    if (is_home() || is_front_page()) {
        wp_enqueue_style('index-css', get_template_directory_uri() . '/css/index.css');
        wp_enqueue_script('index-js', get_template_directory_uri() . '/js/index.js', array(), false, true);
    }
}
add_action('wp_enqueue_scripts', 'enqueue_custom_styles_scripts_page');

function enqueue_custom_styles_scripts_detail_postingan()
{
    if (is_single()) {
        $categories = get_the_category();
        $category_name = !empty($categories) ? $categories[0]->name : '';

        if (!empty($category_name)) {
            if (in_array($category_name, custom_js_in_page())) {
                wp_enqueue_style($category_name . '-css', get_template_directory_uri() . '/css/detail-postingan/' . $category_name . '.css');
            } else {
                wp_enqueue_style($category_name . '-css', get_template_directory_uri() . '/css/detail-postingan/artikel.css');
            }
        }
    }
}
add_action('wp_enqueue_scripts', 'enqueue_custom_styles_scripts_detail_postingan');

// function set_default_thumbnail($html, $post_id, $post_thumbnail_id, $size, $attr)
// {
//     if (empty($html)) {
//         $default_image = get_template_directory_uri() . '/images/default-thumbnail.png';
//         $html = '<img src="' . $default_image . '" alt=""/>';
//     }
//     return $html;
// }
// add_filter('post_thumbnail_html', 'set_default_thumbnail', 10, 5);

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
