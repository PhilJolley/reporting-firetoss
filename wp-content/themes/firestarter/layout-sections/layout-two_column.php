<?php
global $columns, $ft_data, $styles, $defaults, $col, $int;

$args = $ft_data ? $ft_data : ft_get_sub_fields([
        'columns',
        'add_header',
        'header',
        'add_button',
        'add_button',
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

?>

<div class="ft_section layout-two_column flex-item" style="<?php ft_setting('background'); ?> <?php ft_setting('border', false); ?>">
    <div class="container  <?php ft_setting('container');?>">
        <?php
        if($args->add_header) ft_partial('header', (object)$args->header);

        ft_partial('split-column');

        if($args->add_button) ft_partial('button', (object)$args->button);
        ?>
    </div>
</div>
