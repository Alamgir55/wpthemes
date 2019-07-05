<?php
//Theme Support
    function adv_theme_menu(){
        // Featured Image Support
        add_theme_support('post-thumbnails');

        //Nav Menu
        register_nav_menus(array(
            'primary' => __('Primary Menu'),
            'footer' => __('Footer Menu')
        ));
    }
    add_action('after_setup_theme', 'adv_theme_menu');

    function adv_set_excerpt_length(){
        return 25;
    }
    add_filter('excerpt_length', 'adv_set_excerpt_length');