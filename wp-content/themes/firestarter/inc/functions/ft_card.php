<?php

function ft_card($type, $args = null){
    global $ft_data;
    global $styles;
    global $classes;

    $styles = [];
    $classes = [];

    // If section name is not set return;
    if ( ! $type) {
        return;
    }
    // Set altus_data global variable
    $ft_data = $args;

    // Get tempalate or specific sections
    get_template_part('layout-sections/cards/card', $type);

    // Clear global variable
    $ft_data = null;
}