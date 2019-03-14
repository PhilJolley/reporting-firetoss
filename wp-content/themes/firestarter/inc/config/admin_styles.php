<?php


function admin_styles()
{
    wp_register_style('admin', get_template_directory_uri() . '/admin.css', false, false, 'all');
    wp_enqueue_style('admin');
}
add_action('admin_head', 'admin_styles');
