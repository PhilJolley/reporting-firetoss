<?php
global $columns, $ft_data, $styles, $defaults;

$args = $ft_data ? $ft_data : ft_get_sub_fields(['column_offset', 'basic_builder', 'column_width']);
ft_add_class("flex-offset--", $args->column_offset);
ft_add_class("flex-", $args->column_width ? $args->column_width : $defaults->column_width);
?>

<div class="layout-column flex-item <?=ft_classes()?>" style="<?=ft_styles()?>">
    <div class="column-container">
        <?php foreach ($args->basic_builder as $layout) : ?>
            <?php ft_layout($layout['acf_fc_layout'], (object)$layout); ?>
        <?php endforeach; ?>
    </div>
</div>
