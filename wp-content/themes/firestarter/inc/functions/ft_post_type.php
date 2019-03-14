<?php
function ft_post_type($slug, $label_singular, $label_plural, $taxonomies = [], $public = true ) {
    $labels = array(
	    'name'                  => _x( $label_plural, 'Post Type General Name', 'text_domain' ),
	    'singular_name'         => _x( $label_singular, 'Post Type Singular Name', 'text_domain' ),
	    'menu_name'             => __( $label_plural, 'text_domain' ),
	    'name_admin_bar'        => __( $label_plural, 'text_domain' ),
	    'archives'              => __( $label_plural . ' Archives', 'text_domain' ),
	    'attributes'            => __( $label_plural . ' Attributes', 'text_domain' ),
	    'parent_item_colon'     => __( 'Parent Item:', 'text_domain' ),
	    'all_items'             => __( 'All ' . $label_plural, 'text_domain' ),
	    'add_new_item'          => __( 'Add New ' . $label_singular, 'text_domain' ),
	    'add_new'               => __( 'Add ' . $label_singular, 'text_domain' ),
	    'new_item'              => __( 'New ' . $label_singular, 'text_domain' ),
	    'edit_item'             => __( 'Edit ' . $label_singular, 'text_domain' ),
	    'update_item'           => __( 'Update ' . $label_singular, 'text_domain' ),
	    'view_item'             => __( 'View ' . $label_singular, 'text_domain' ),
	    'view_items'            => __( 'View '.$label_plural, 'text_domain' ),
	    'search_items'          => __( 'Search '.$label_plural, 'text_domain' ),
	    'not_found'             => __( 'Not found', 'text_domain' ),
	    'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
	    'featured_image'        => __( 'Featured Image', 'text_domain' ),
	    'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
	    'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
	    'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
	    'insert_into_item'      => __( 'Insert into item', 'text_domain' ),
	    'uploaded_to_this_item' => __( 'Uploaded to this item', 'text_domain' ),
	    'items_list'            => __( $label_plural . ' list', 'text_domain' ),
	    'items_list_navigation' => __( $label_plural . ' list navigation', 'text_domain' ),
	    'filter_items_list'     => __( 'Filter people list', 'text_domain' ),
    );
    $rewrite = array(
	    'slug'                  => $slug,
	    'with_front'            => true,
	    'pages'                 => true,
	    'feeds'                 => true,
    );
    $args = array(
	    'label'                 => __( '' . $label_plural, 'text_domain' ),
	    'description'           => __( $label_plural . '', 'text_domain' ),
	    'labels'                => $labels,
	    'supports'              => array( 'title', 'editor' ),
	    'taxonomies'            => $taxonomies,
	    'hierarchical'          => true,
	    'public'                => $public,
	    'show_ui'               => true,
	    'show_in_menu'          => true,
	    'show_in_admin_bar'     => true,
	    'show_in_nav_menus'     => true,
	    'can_export'            => true,
	    'has_archive'           => $public,
	    'exclude_from_search'   => (!$public),
	    'publicly_queryable'    => $public,
	    'rewrite'               => $rewrite,
	    'capability_type'       => 'page',
	    'menu_icon'             => 'dashicons-media-spreadsheet'
    );

    register_post_type($slug, $args);
}

