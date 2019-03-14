<?php

function ft_content($section_name, $TemplateData = null)
{
    global $ft_data;

    // If section name is not set return;
    if ( ! $section_name) {
        return;
    }
    // Set altus_data global variable
	$ft_data = $TemplateData;

    // Get tempalate or specific sections
    get_template_part('layout-sections/base/content', $section_name);

    // Clear global variable
	$ft_data = null;
}