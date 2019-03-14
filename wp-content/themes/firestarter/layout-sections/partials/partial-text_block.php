<?php

global $ft_data;
$args = $ft_data ? $ft_data : ft_get_sub_fields([
    'body',
    'text_block_color',
    'text_align',
]);

$styles[]  = $args->text_block_color ? ft_style('color',$args->text_block_color) : null;
$styles[]  = $args->text_align ? ft_style('text-align', $args->text_align) : null ;

if($args->body): ?>
    <div class="layout-text_block" style="<?=ft_styles($styles);?>">
        <?=$args->body?>
    </div>
<?php endif; ?>



