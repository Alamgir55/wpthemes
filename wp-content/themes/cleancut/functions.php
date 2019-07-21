<?php 

require_once('wp_bootstrap_navwalker.php');

function cleancut_theme_support(){

    add_theme_support('post-thumbnails');

    register_nav_menus(array(
        'primary' => __('Primary Menu'),
        'footer' => __('Footer Menu')
    ));
}

add_action('after_setup_theme', 'cleancut_theme_support');

require get_template_directory(). '/inc/customizer.php';