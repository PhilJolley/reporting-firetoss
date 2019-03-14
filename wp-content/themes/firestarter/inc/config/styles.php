<?php


function custom_styles()
{
    wp_register_style('style', get_template_directory_uri() . '/style/style.css', false, false, 'all');
    wp_enqueue_style('style');

}
add_action( 'wp_enqueue_scripts', 'custom_styles' );




