<?php

global $ft_data, $col, $int;

$args = $ft_data ? $ft_data : ft_get_sub_fields([
    'columns',
    'first_column_width',
    'column_split_custom',
    'align_items',
    'justify_content'
]);

if($args->first_column_width == "custom"):
    $col = $args->column_split_custom;
else:
    $col = $args->first_column_width;
endif;


if($args->align_items) ft_add_class('flex-align-', $args->align_items);
if($args->justify_content) ft_add_class('flex-justify-', $args->justify_content);
?>

<div class="flex-grid flex-grid--custom <?=ft_classes();?>">
    <?php
    $int = false;
    if(have_rows('columns')):
        while(have_rows('columns')):the_row();

            ft_partial('column');

            $int = !$int;
        endwhile;
    endif;
    ?>
</div>

