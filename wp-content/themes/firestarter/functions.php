<?php
/**
 * Firetoss Theme functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Firetoss_Theme
 */

include 'util.php';
include_dir('inc/config');
include_dir('inc/functions');
include_dir('inc/actions');
include_dir('inc/acf');
include_dir('inc/theme');
include_dir('inc/filters');

//include_dir('inc/services/');
//include_dir('inc/extras');
//include_dir('inc/shortcodes');
//include_dir('inc/woocommerce');
//

if(function_exists('have_rows')) :
	ft_custom_post_types();
	ft_taxonomies();
endif;

// Register Analytics Custom Post type
function custom_post_type() {

    $labels = array(
        'name'                  => _x( 'Analytics', 'Post Type General Name', 'text_domain' ),
        'singular_name'         => _x( 'Analytic', 'Post Type Singular Name', 'text_domain' ),
        'menu_name'             => __( 'Analytics', 'text_domain' ),
        'name_admin_bar'        => __( 'Analytic', 'text_domain' ),
        'archives'              => __( 'Item Archives', 'text_domain' ),
        'attributes'            => __( 'Item Attributes', 'text_domain' ),
        'parent_item_colon'     => __( 'Parent Item:', 'text_domain' ),
        'all_items'             => __( 'All Items', 'text_domain' ),
        'add_new_item'          => __( 'Add New Item', 'text_domain' ),
        'add_new'               => __( 'Add New', 'text_domain' ),
        'new_item'              => __( 'New Item', 'text_domain' ),
        'edit_item'             => __( 'Edit Item', 'text_domain' ),
        'update_item'           => __( 'Update Item', 'text_domain' ),
        'view_item'             => __( 'View Item', 'text_domain' ),
        'view_items'            => __( 'View Items', 'text_domain' ),
        'search_items'          => __( 'Search Item', 'text_domain' ),
        'not_found'             => __( 'Not found', 'text_domain' ),
        'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
        'featured_image'        => __( 'Featured Image', 'text_domain' ),
        'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
        'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
        'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
        'insert_into_item'      => __( 'Insert into item', 'text_domain' ),
        'uploaded_to_this_item' => __( 'Uploaded to this item', 'text_domain' ),
        'items_list'            => __( 'Items list', 'text_domain' ),
        'items_list_navigation' => __( 'Items list navigation', 'text_domain' ),
        'filter_items_list'     => __( 'Filter items list', 'text_domain' ),
    );
    $args = array(
        'label'                 => __( 'Analytic', 'text_domain' ),
        'description'           => __( 'Post Type Description', 'text_domain' ),
        'labels'                => $labels,
        'supports'              => array( 'title', 'editor', 'thumbnail' ),
        'taxonomies'            => array( 'category', 'post_tag', 'Analytic Iframes' /*'tour_destination' */),
        'hierarchical'          => false,
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'menu_position'         => 5,
        'show_in_admin_bar'     => true,
        'show_in_nav_menus'     => true,
        'can_export'            => true,
        'has_archive'           => true,
        'exclude_from_search'   => false,
        'publicly_queryable'    => true,
        'capability_type'       => 'page',

    );
    register_post_type( 'analytic', $args );

}
add_action( 'init', 'custom_post_type', 0 );

if ( ! function_exists( 'custom_taxonomy_destinations' ) ) {

// Register Custom Taxonomy
    function custom_taxonomy_analytics() {

        $labels = array(
            'name'                       => _x( 'Analytic Iframes', 'Taxonomy General Name', 'text_domain' ),
            'singular_name'              => _x( 'Analytic Iframe', 'Taxonomy Singular Name', 'text_domain' ),
            'menu_name'                  => __( 'Analytic Iframes', 'text_domain' ),
            'all_items'                  => __( 'All Items', 'text_domain' ),
            'parent_item'                => __( 'Analytic', 'text_domain' ),
            'parent_item_colon'          => __( 'Parent Item:', 'text_domain' ),
            'new_item_name'              => __( 'New Item Name', 'text_domain' ),
            'add_new_item'               => __( 'Add New Item', 'text_domain' ),
            'edit_item'                  => __( 'Edit Item', 'text_domain' ),
            'update_item'                => __( 'Update Item', 'text_domain' ),
            'view_item'                  => __( 'View Item', 'text_domain' ),
            'separate_items_with_commas' => __( 'Separate items with commas', 'text_domain' ),
            'add_or_remove_items'        => __( 'Add or remove items', 'text_domain' ),
            'choose_from_most_used'      => __( 'Choose from the most used', 'text_domain' ),
            'popular_items'              => __( 'Popular Items', 'text_domain' ),
            'search_items'               => __( 'Search Items', 'text_domain' ),
            'not_found'                  => __( 'Not Found', 'text_domain' ),
            'no_terms'                   => __( 'No items', 'text_domain' ),
            'items_list'                 => __( 'Items list', 'text_domain' ),
            'items_list_navigation'      => __( 'Items list navigation', 'text_domain' ),
        );
        $args = array(
            'labels'                     => $labels,
            'hierarchical'               => false,
            'public'                     => true,
            'show_ui'                    => true,
            'show_admin_column'          => true,
            'show_in_nav_menus'          => true,
            'show_tagcloud'              => true,
        );
        register_taxonomy( 'analytic_iframe', array( 'analytic' ), $args );

    }
    add_action( 'init', 'custom_taxonomy_analytics', 0 );

}

//Custom Post Types
function my_et_builder_post_types($post_types) {
    $post_types[] = 'analytic';
    return $post_types;
}
add_filter('et_builder_post_types', 'my_et_builder_post_types');

// add themes options acf

if( function_exists('acf_add_options_page') ) {
    acf_add_options_page();
}
function redirect_to($location) {
    header("Location: " .$location);
    exit();
}

function remove_admin_bar() {
    if (!current_user_can('administrator') && !is_admin()) {
        show_admin_bar(false);
    }
}
add_action('after_setup_theme', 'remove_admin_bar');
/**
 * Capture user login and add it as timestamp in user meta data
 *
 */

function user_last_login( $user_login, $user ) {
    update_user_meta( $user->ID, 'last_login', time() );
}
add_action( 'wp_login', 'user_last_login', 10, 2 );

/**
 * Display last login time
 *
 */

function wpb_lastlogin() {
    $last_login = get_the_author_meta('last_login');
    $the_login_date = human_time_diff($last_login);
    return $the_login_date;
}

/**
 * Add Shortcode lastlogin
 *
 */

add_shortcode('lastlogin','wpb_lastlogin');