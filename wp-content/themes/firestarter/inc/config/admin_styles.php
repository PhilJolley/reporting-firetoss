<?php


function admin_styles()
{
    wp_register_style('admin', get_template_directory_uri() . '/admin.css', false, false, 'all');
    wp_enqueue_style('admin');
}
add_action('wp_enqueue_scripts', 'admin_styles');

//function theme_firestarter_styles()
//{
//    wp_register_style('theme-firestarter', get_template_directory_uri() . '/style/style.css', false, false, 'all');
//    wp_enqueue_style('theme-firestarter');
//}
//add_action('admin_head', 'theme_firestarter_styles');