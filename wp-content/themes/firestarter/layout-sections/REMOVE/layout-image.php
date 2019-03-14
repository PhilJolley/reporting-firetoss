<?php
/**
 * Created by PhpStorm.

 * Date: 9/18/2017
 * Time: 10:52 PM
 */

global $styles, $classes, $ft_data;

$args = $ft_data ? $ft_data : ft_get_sub_fields(['image', 'thumbnail_size', 'size', 'link']);
$args->image_url = ft_get_thumbnail_url($args->image['ID'], $args->thumbnail_size);
?>
<div class="layout-image">
    <?= $args->link ? "<a href='$args->link'>" : ""; ?>
    <img src="<?= $args->image_url; ?>">
    <?= $args->link ? "</a>" : ""; ?>
</div>
