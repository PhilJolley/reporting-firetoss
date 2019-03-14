<?php

global $columns, $ft_data, $styles, $defaults;
//print_r($ft_data);
$args = $ft_data ? $ft_data : ft_get_sub_fields([
    'number_of_columns',
    'spacing',
    'align_items',
    'justify_content']);

$args->spacing = $args->spacing ? $args->spacing : 'margin-1';

ft_add_class('flex-', 'grid');
ft_add_class('flex-grid--', $args->number_of_columns);
//ft_add_class('flex-items--', $defaults->column_width);
if($args->spacing) ft_add_class('flex-spacing--', $args->spacing);
if($args->align_items) ft_add_class('flex-align-', $args->align_items);
if($args->justify_content) ft_add_class('flex-justify-', $args->justify_content);


echo ft_classes();

