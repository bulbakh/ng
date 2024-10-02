<?php
function ng_enqueue_styles()
{
    $parent_style = 'clearer-style';
    wp_enqueue_style($parent_style, get_template_directory_uri() . '/style.css');
    wp_enqueue_style('child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array($parent_style),
        wp_get_theme()->get('Version')
    );
}

add_action('wp_enqueue_scripts', 'ng_enqueue_styles');

function service_post_type()
{
    $args = array(
        'label' => 'Послуги',
        'public' => true,
        'has_archive' => 'services',
        'supports' => array('title', 'editor', 'custom-fields'),
    );

    register_post_type('service', $args);
}

add_action('init', 'service_post_type');
