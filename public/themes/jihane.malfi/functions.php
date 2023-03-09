<?php

add_action('after_setup_theme', function () {
    add_theme_support('post-thumbnails');
    add_theme_support('title-tag');
    add_theme_support( 'woocommerce' );

    add_image_size('logo', 150, 150, true );


    add_theme_support('custom-logo', array(
        'height'      => 150,
        'width'       => 150,
        'flex-height' => true,
        'flex-width'  => true,
    ));

    register_nav_menus([
        'navigation' => __('Navigation'),
    ]);
});
