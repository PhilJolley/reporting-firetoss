<?php


function custom_scripts() {

    wp_deregister_script('jquery');
    wp_register_script('jquery', "http" . ($_SERVER['SERVER_PORT'] == 443 ? "s" : "") . "://ajax.googleapis.com/ajax/libs/jquery/1.12.1/jquery.min.js", true, null, false);

    wp_register_script( 'vendor',  get_template_directory_uri() . '/js/vendor.min.js', array( 'jquery' ), false, true );

    wp_register_script( 'firetoss',  get_template_directory_uri() . '/js/theme.min.js', array( 'jquery','vendor', ), false, true );
    wp_enqueue_script( 'firetoss' );

}
add_action( 'wp_enqueue_scripts', 'custom_scripts' );