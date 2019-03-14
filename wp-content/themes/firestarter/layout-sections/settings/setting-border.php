<?php
global $ft_data;
$bdr = $ft_data ? $ft_data : ft_get_sub_fields(array('borders'));
if($bdr->borders):
foreach((array)$bdr->borders as $border):
    $side = $border['border_side'] ? '-'.$border['border_side'] : null;
    $styles[]  = $border['border_width'] ? ft_style('border'.$side.'-width', $border['border_width']) : null;
    $styles[]  = $border['border_style'] ? ft_style('border'.$side.'-style', $border['border_style'] ) : null;
    $styles[]  = $border['border_color'] ? ft_style('border'.$side.'-color', $border['border_color'] ) : null;
endforeach;

echo ft_styles($styles);
endif;
