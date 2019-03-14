<?php

$args = ft_get_options(['main_logo', 'height', 'width']);
$styles[] = ft_style('max-width', $args->width, 'px');
$styles[] = ft_style('max-height', $args->height, 'px');
?>

<a class="main_logo-wrapper" href="/">
	<img id="main_logo" src="<?=$args->main_logo?>" style="<?=ft_styles($styles)?>">
</a>
