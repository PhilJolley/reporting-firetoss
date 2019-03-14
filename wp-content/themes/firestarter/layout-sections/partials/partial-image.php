<?php
/**
 * Created by PhpStorm.

 * Date: 9/18/2017
 * Time: 10:52 PM
 */

global $styles, $classes, $ft_data;

$args = $ft_data ? $ft_data : ft_get_sub_fields(['image_arr', 'thumbnail_size', 'size', 'link', 'alt_text', 'image_alignment']);
//print_r($args);

$class = 'align'.$args->image_alignment;
$args->image_url = ft_get_thumbnail_url($args->image_arr['ID'], $args->thumbnail_size);
$args->alt_text = $args->alt_text ? "alt='$args->alt_text'" : '';
?>
<div class="layout-image">
    <?= $args->link ? "<a href='$args->link'>" : ""; ?>
    <img src="<?= $args->image_url; ?>" class="<?php echo $class;?>" <?=$args->alt_text;?>>
    <?= $args->link ? "</a>" : ""; ?>
</div>
