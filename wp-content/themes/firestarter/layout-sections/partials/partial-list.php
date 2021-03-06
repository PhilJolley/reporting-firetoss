<?php
global $list, $classes, $styles, $ft_data;

$args = $ft_data ? $ft_data : ft_get_sub_fields(array(
        'post_types',
    'columns',
    'order_by',
    'order',
    'taxonomies',
    'limit',
    'template',
    'exclude',
    'include',
//    'thumbnail_only'
));
$classes[] = $args->template;
//$classes[] = ($args->template == "product" ? "woocommerce" : "");
//print_r($args);
$list = (object)array(
    'limit' => $args->limit,
    'post_types' => $args->post_types,
    'taxonomies' => $args->taxonomies,
    'order'      => $args->order,
    'order_by'   => $args->order_by,
//    'exclude'    => $args->exclude,
//    'include'    => $args->include,
//    'thumbnail_only' => $args->thumbnail_only,
    'filter_by'    => null,
    'acf_field'    => null,
);

$query = ft_get_query($list);
?>
    <div class="layout-list <?=ft_classes($classes)?>">
        <div class="flex-grid flex-grid--<?=$args->columns;?>">
            <?php
            if($query->have_posts()) : while($query->have_posts()) : $query->the_post(); ?>
                <?php
                ft_card($args->template); ?>
            <?php endwhile; endif; ?>
        </div>
    </div>

<?php wp_reset_postdata(); ?>