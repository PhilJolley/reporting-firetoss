<?php
global $alternate, $counter;

if($counter == 2){
	$alternate = !$alternate;
	$counter = 1;
} else $counter++;
$styles = [];
$classes = [];
$args = ft_get_fields(['featured_image']);
$args->image_url = ft_get_thumbnail_url($args->featured_image['id'], 'full');
$styles[] = ft_style('background-image', $args->image_url);
$classes[] = $alternate ? '' : 'wide';
?>

<div class="card-product flex-item <?=ft_classes($classes)?>" style="<?=ft_styles($styles)?>">
    <div class="card-container">
        <div class="thumbnail"><?php echo woocommerce_get_product_thumbnail()?></div>
        <div class="title"><?php the_title()?></div>
        <a class="button button-alt" href="<?php the_permalink()?>">View Component</a>
    </div>
</div>

