<?php
/**
 * Created by PhpStorm.

 * Date: 11/21/2017
 * Time: 10:03 AM
 */


$args =  ft_get_sub_fields(array('image','image_size','header','header_element','content',));
$args->imageURL = wp_get_attachment_image_src($args->image, $args->image_size);

?>

<div class="content-card flex-item"><?php

    echo $args->imageURL ? "<img class='card-image' src='$args->imageURL' alt='$args->header'>" : '';

    echo $args->header ? "<$args->header_element class='card-header' >$args->header</$args->header_element>" : '';

    echo $args->content ? "<div class='card-content'>$args->content</div>" : '';

?></div>


