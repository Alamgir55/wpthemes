<?php 

function wpnews_theme_support(){

    add_theme_support('post-thumbnails');
    add_image_size('news-thumb', 400, 200);
    add_image_size('news-large', 790 , 380);
    add_image_size('news-popular', 300 , 150);

    register_nav_menus(array(
        'primary' => __('Primary Menu')
    ));
}
add_action('after_setup_theme', 'wpnews_theme_support');

function init_widgets($id){
    register_sidebar(array(
        'name'      => 'Sidebar',
        'id'        => 'sidebar',
        'before_widget' => '<div class="side-widget">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3>',
        'after_title'   => '</h3>'
    ));
}
add_action('widgets_init', 'init_widgets');