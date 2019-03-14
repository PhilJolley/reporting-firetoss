<?php

function ft_setting($section_name, $data = true)
{
    global $ft_data;

    // If section name is not set return;
    if ( ! $section_name) {
        return;
    }

    $args = ft_get_sub_fields([$section_name]);
    if($data) $ft_data = (object)$args->{$section_name};

    // Get tempalate or specific sections
    get_template_part('layout-sections/settings/setting', $section_name);

    // Clear global variable
    $ft_data = null;
}


