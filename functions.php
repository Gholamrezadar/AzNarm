<?php

function custom_excerpt_length()
{
    return 25;
}

add_filter('excerpt_length','custom_excerpt_length');

function add_support()
{
    add_theme_support('post_thumbnails');
    add_image_size('small_thumbnail', 256, 256, true);
    add_image_size('banner', 512, 512, true);
}

add_action('after_setup_theme', 'add_support');

function widget_init()
{
    register_sidebar(array(
        'name'=>'Footer1',
        'id'=>'footer1'
    ));

    register_sidebar(array(
        'name'=>'Footer2',
        'id'=>'footer2'
    ));
}

add_action('widgets_init', 'widget_init');
