<?php

function ft_taxonomy($slug, $label_singular, $label_plural, $post_types = []) {
    $labels = array(
        'name'                       => __($label_plural),
        'singular_name'              => __($label_singular),
        'menu_name'                  => __($label_plural),
        'all_items'                  => __( 'All '. $label_plural ),
    );
    $args = array(
        'labels'                     => $labels,
        'hierarchical'               => true,
        'public'                     => true,
        'show_ui'                    => true,
        'show_admin_column'          => true,
        'show_in_nav_menus'          => true,
        'capabilities' => array (
            'manage_terms' => 'manage_categories'
        )
    );

    register_taxonomy( $slug, $post_types, $args );
}

