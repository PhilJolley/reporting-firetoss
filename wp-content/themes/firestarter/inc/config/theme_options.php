<?php

function plugin_admin_add_page() {
	//add_menu_page('Theme Options', 'Theme Options', 'manage_options', 'manage_options', 'theme_front_page_settings');
	if( function_exists('acf_add_options_page') ) {
		acf_add_options_page(array(
			'page_title' 	=> 'FireStarter Settings',
			'menu_title'	=> 'FireStarter',
			'menu_slug' 	=> 'fire-settings',
			'capability'	=> 'edit_posts',
			'redirect'		=> false
		));

        acf_add_options_sub_page(array(
            'page_title' 	=> 'Header and Footer',
            'menu_title'	=> 'Header and Footer',
            'parent_slug'	=> 'fire-settings',
        ));

        acf_add_options_sub_page(array(
			'page_title' 	=> 'Add Post Types',
			'menu_title'	=> 'Add Post Types',
            'parent_slug'	=> 'fire-settings',
		));

        acf_add_options_sub_page(array(
			'page_title' 	=> 'Add Taxonomies',
			'menu_title'	=> 'Add Taxonomies',
            'parent_slug'	=> 'fire-settings',
		));

	}
}

add_action('admin_menu', 'plugin_admin_add_page');
