<?php

use Carbon_Fields\Container;
use Carbon_Fields\Field;


add_action('carbon_fields_register_fields', 'crb_attach_theme_options');
function crb_attach_theme_options()
{
    Container::make('theme_options', __('Theme Options'))
        ->add_fields(
            array(
                Field::make('text', 'title', __('Slide Title')),
                Field::make('image', 'photo', __('Slide Photo')),
            )
        );
}

add_action('after_setup_theme', 'crb_load');
function crb_load()
{
    require_once('vendor/autoload.php');
    \Carbon_Fields\Carbon_Fields::boot();
}

add_action('carbon_fields_register_fields', 'crb_attach_post_meta');
function crb_attach_post_meta()
{
    Container::make('post_meta', __('Sản phẩm mới', 'crb'))
        ->where('post_type', '=', 'page') // only show our new fields on pages
        ->add_fields(
            array(
                Field::make('complex', 'crb_new_product', 'Sản phẩm mới')
                    ->set_layout('tabbed-horizontal')
                    ->add_fields(
                        array(
                            Field::make('text', 'product-name', 'Tên sản phẩm'),
                        )
                    ),
            )
        );

    Container::make('post_meta', __('Sản phẩm khuyến mãi', 'crb'))
        ->where('post_type', '=', 'page') // only show our new fields on pages
        ->add_fields(
            array(
                Field::make('complex', 'crb_discount', 'Sản phẩm khuyến mãi')
                    ->set_layout('tabbed-horizontal')
                    ->add_fields(
                        array(
                            Field::make('text', 'product-name', 'Tên sản phẩm'),
                        )
                    ),
            )
        );

    // Container::make('post_meta', __('Header', 'crb'))

    //     ->where('post_type', '=', 'page') // only show our new fields on pages
    //     ->add_fields(
    //         array(
    //             Field::make('complex', 'crb_header', 'Header')
    //                 ->set_layout('tabbed-horizontal')
    //                 ->add_fields(
    //                     array(
    //                         Field::make('image', 'image', 'Hình ảnh'),
    //                         Field::make('text', 'web_name', 'Tên trang web'),
    //                     )
    //                 ),
    //         )
    //     );

    // Container::make('post_meta', __('Footer', 'crb'))
    //     ->where('post_type', '=', 'page') // only show our new fields on pages
    //     ->add_fields(
    //         array(
    //             Field::make('complex', 'crb_footer', 'Footer')
    //                 ->set_layout('tabbed-horizontal')
    //                 ->add_fields(
    //                     array(
    //                         Field::make('text', 'left_title', 'Tiêu đề bên trái'),
    //                         Field::make('text', 'left_content', 'Nội dung bên trái'),
    //                         Field::make('text', 'right_title', 'Tiêu đề bên phải'),
    //                         Field::make('text', 'right_content', 'Nội dung bên phải'),
    //                     )
    //                 ),
    //         )
    //     );

}

function add_style_sheets()
{
    wp_register_style("bootstrap.min.css", get_template_directory_uri() . '/assets/css/bootstrap.min.css', array(), '1.1', 'all');
    wp_enqueue_style("bootstrap.min.css");

    wp_register_style("templatemo-style.css", get_template_directory_uri() . '/assets/css/templatemo-style.css', array(), rand(111, 9999), 'all');
    wp_enqueue_style("templatemo-style.css");

    wp_register_style("all.min.css", get_template_directory_uri() . '/assets/fontawesome/css/all.min.css', array(), '1.1', 'all');
    wp_enqueue_style("all.min.css");

}
add_action('wp_enqueue_scripts', 'add_style_sheets');

function add_javascript()
{
    wp_register_script("jquery.js", get_template_directory_uri() . '/assets/js/jquery.js', array(), '2.0', array());
    wp_enqueue_script("jquery.js");

    wp_register_script("bootstrap.bundle.min.js", get_template_directory_uri() . '/assets/js/bootstrap.bundle.min.js', array(), '1.0', false);
    wp_enqueue_script("bootstrap.bundle.min.js");

    wp_register_script("plugins.js", get_template_directory_uri() . '/assets/js/plugins.js', array(), '1.0', array());
    wp_enqueue_script("plugins.js");

    wp_register_script("attribution.js", get_template_directory_uri() . '/assets/fontawesome/attribution.js', array(), '1.0', array());
    wp_enqueue_script("attribution.js");
}
add_action('wp_enqueue_scripts', 'add_javascript');



function add_additional_class_on_li($classes, $item, $args)
{
    if (isset($args->add_li_class)) {
        $classes[] = $args->add_li_class;
    }
    return $classes;
}
add_filter('nav_menu_css_class', 'add_additional_class_on_li', 1, 3);

function add_additional_class_on_a($classes, $item, $args)
{
    if (isset($args->add_a_class)) {
        $classes['class'] = $args->add_a_class;
    }
    return $classes;
}

add_filter('nav_menu_link_attributes', 'add_additional_class_on_a', 1, 3);

function add_custom_query_var($vars)
{
    $vars[] = "c";
    return $vars;
}
add_filter('query_vars', 'add_custom_query_var');

add_theme_support('menus');

/**
 * Register Custom Navigation Walker
 */
function register_navwalker()
{
    require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
}
add_action('after_setup_theme', 'register_navwalker');

register_nav_menus(
    array(
        'top-menu' => 'Top Menu',
    )
);

function my_pham_custom_post()
{
    $args = array(
        'labels' => array(
            'name' => 'Mỹ Phẩm',
            // 'singular-name' => 'Mỹ Phẩm'
        ),
        'hierarchical' => true,
        'public' => true,
        'has_archive' => true,
        'supports' => array('title', 'editor', 'thumbnail', 'custom-fields'),
        'rewrite' => array('slug' => 'my-pham'),
        'menu_icon' => 'dashicons-products',
    );

    register_post_type('mypham', $args);
}
add_action('init', 'my_pham_custom_post');

function xuat_xu_taxonomy()
{
    $args = array(
        'labels' => array(
            'name' => 'Xuất Xứ'
        ),
        'public' => true,
        'hierarchical' => true,
    );

    register_taxonomy('xuatxu', array('mypham'), $args);
}

add_action('init', 'xuat_xu_taxonomy');

add_theme_support('post-thumbnails');


//custom image sizes
add_image_size('small', 350, 350, true);
add_image_size('medium', 700, 700, false);
add_image_size('large', 1000, 1000, false);