<?php
//
global $ft_data;
$text = $ft_data ? $ft_data : ft_get_sub_fields(array(
'text_color',
'text_align',
));

$styles[]  = $text->text_block_color ? ft_style('color',$text->text_color) : null;
$styles[]  = $text->text_align ? ft_style('text-align', $text->text_align) : null ;

echo ft_styles($styles);

