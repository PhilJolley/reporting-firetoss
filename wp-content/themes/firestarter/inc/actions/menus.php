<?php

function firetoss_nav_setup() {
    register_nav_menus( array(
        'primary' => esc_html__( 'Primary', 'firestarter' ),
        'footer' => esc_html__( 'Footer', 'firestarter' ),
    ) );
}

add_action( 'after_setup_theme', 'firetoss_nav_setup' );

