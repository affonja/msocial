<?php
require('inc/carbon-fields.php');


add_action('wp_enqueue_scripts', 'theme_name_scripts');

function theme_name_scripts()
{
    wp_enqueue_style('bootstrpcss', '//cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css', [], false, 'all');
    wp_enqueue_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js', [], false, true);
    wp_enqueue_script('bootstrapscript', 'https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js', [], false, true);
}


add_action('init', 'register_post_type_news');
add_action('init', 'register_post_type_product');

function register_post_type_news()
{

    $labels = array(
        'name' => 'Новости',
        'singular_name' => 'Новость',
        'add_new' => 'Добавить новость',
        'add_new_item' => 'Добавить новость',
        'edit_item' => 'Редактировать новость',
        'new_item' => 'Новая новость',
        'all_items' => 'Все новости',
        'search_items' => 'Искать новости',
        'not_found' => 'Новостей по заданным критериям не найдено.',
//        'not_found_in_trash' => 'В корзине нет лидов.',
        'menu_name' => 'Новости'
    );

    $args = array(
        'labels' => $labels,
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'show_in_admin_bar' => true,
        'show_in_nav_menus' => true,
        'has_archive' => false,
        'menu_icon' => 'dashicons-email-alt2',
        'menu_position' => 2,
        'supports' => ['title']
    );

    register_post_type('newstest', $args);
}

function register_post_type_product()
{

    $labels = array(
        'name' => 'Продукция',
        'singular_name' => 'Продукт',
        'add_new' => 'Добавить продукт',
        'add_new_item' => 'Добавить продукт',
        'edit_item' => 'Редактировать продукт',
        'new_item' => 'Новый продукт',
        'all_items' => 'Все продукты',
        'search_items' => 'Искать продукт',
        'not_found' => 'Продукт по заданным критериям не найден.',
//        'not_found_in_trash' => 'В корзине нет лидов.',
        'menu_name' => 'Продукты'
    );

    $args = array(
        'labels' => $labels,
        'public' => true,
        'publicly_queryable' => false,
        'has_archive' => false,
        'menu_icon' => 'dashicons-email-alt2',
        'menu_position' => 3,
        'supports' => ['title']
    );

    register_post_type('productstest', $args);
}


add_action('after_switch_theme', 'create_pages', 10, 2);
function create_pages()
{

    $post_data = [
        [
            'post_title' => 'Новости',
            'post_content' => '',
            'post_name' => 'news',
            'post_status' => 'publish',
            'post_type' => 'page',
            'post_author' => 1,
            'ping_status' => 'closed',
        ],
        [
            'post_title' => 'Продукция',
            'post_content' => '',
            'post_name' => 'goods',
            'post_status' => 'publish',
            'post_type' => 'page',
            'post_author' => 1,
            'ping_status' => 'closed',
        ],
    ];

    foreach ($post_data as $post) {
        $post_id = wp_insert_post($post);
    }

}
