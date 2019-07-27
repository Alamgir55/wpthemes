<?php

function fc_theme_support(){

    add_theme_support('post-thumbnails');
    add_image_size('home-thumb', 715, 449);

    register_nav_menus(array(
        'primary' => __('Primary Menu')
    ));
}
add_action('after_setup_theme', 'fc_theme_support');