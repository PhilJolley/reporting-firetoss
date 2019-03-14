<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package FireStarter_Theme
 */

?><!DOCTYPE html>
<?php //this header is for when the user is logged in and the header switches to this header ?>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

    <?php wp_head(); ?>

</head>
<body <?php body_class(); ?>>

<?php

?>
<div id="page" class="site">
    <?php ft_global('top_header'); ?>
    <header id="header">
        <div class="container">
            <div class="grid row">
                <?php ft_global('logo'); ?>
                <div class="main-navigation">
                    <div class="menu-primary-container">
                        <ul id="primary-menu" class="menu">
                            <li id="menu-item-868">
                                <a href="<?php echo wp_logout_url('http://reporting.firetoss.com'); ?>">Logout</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </header>

