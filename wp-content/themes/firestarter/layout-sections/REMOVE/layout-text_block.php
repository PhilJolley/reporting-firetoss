<?php
global $ft_data;
$args = $ft_data ? $ft_data : ft_get_sub_fields(['body', 'text_block_color', 'extra_class', 'text_block_size']);
$classes[] = $ft_data->extra_class ? $ft_data->extra_class : $args->extra_class;
$classes[] = $ft_data->text_block_size ? $ft_data->text_block_size : $args->text_block_size;
ft_add_style('color', $args->text_block_color);
?>

<div class="layout-text_block <?=ft_classes($classes)?>" style="<?=ft_styles()?>">
	<?=$args->body?>
</div>
