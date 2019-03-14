<?php
global $ft_data;

$args = $ft_data ? $ft_data : ft_get_sub_fields(['block_id']);
?>
<div class="layout-block">
        <?php if(have_rows('page_builder' , $args->block_id)) : while(have_rows('page_builder', $args->block_id)) : the_row(); ?>
            <?php ft_layout(get_row_layout()); ?>
        <?php endwhile; endif; ?>
</div>

