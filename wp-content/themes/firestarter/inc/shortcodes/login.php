<?php
/**
 * Created by PhpStorm.
 * User: phillipjolley
 * Date: 5/21/18
 * Time: 10:29 AM
 */

add_shortcode('login-form', 'display_login_form');

function display_login_form() {

    $content = wp_login_form();
    return $content;
}