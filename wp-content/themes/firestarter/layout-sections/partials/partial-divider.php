<?php
global $ft_data, $classes, $styles;
$args = $ft_data ? $ft_data : ft_get_sub_fields(['direction', 'alignment', 'color']);
ft_add_style('color', $args->color);
ft_add_class('divider-', $args->direction);
ft_add_class('divider-', $args->alignment);
?>

<div class="layout-divider <?=ft_classes()?>" style="<?=ft_styles()?>">
    <div class="divider" style="<?=ft_style('background-color', $args->color)?>"></div>
    <div class="divider" style="<?=ft_style('background-color', $args->color)?>"></div>
</div>
