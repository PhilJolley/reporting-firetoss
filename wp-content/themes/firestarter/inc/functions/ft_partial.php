<?php

function ft_partial($section_name, $TemplateData = null)
{
    global $ft_data;
    global $styles;
    global $classes;

    $styles = [];
    $classes = [];

    // If section name is not set return;
    if ( ! $section_name) {
        return;
    }
    // Set altus_data global variable
    $ft_data = $TemplateData;

    // Get tempalate or specific sections
    get_template_part('layout-sections/partials/partial', $section_name);

    // Clear global variable
    $ft_data = null;
}
