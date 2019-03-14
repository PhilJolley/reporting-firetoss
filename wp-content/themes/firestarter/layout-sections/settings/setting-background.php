<?php
global $ft_data;
$background = $ft_data ? $ft_data : ft_get_sub_fields(array(
    'background_color',
    'background_image',
    'background_position_x',
    'background_position_y',
    'background_size',
    'background_overlay_opacity',
));


$image_url = $background->background_image ? "url(". ft_get_thumbnail_url($background->background_image['id'], 'full').")" : "";
$background->background_size = $background->background_size ? '/'.$background->background_size : '';
$background->background_color =  $background->background_overlay_opacity ? ft_rgba($background->background_color, $background->background_overlay_opacity) : $background->background_color;
$styles[]  = $background->background_overlay_opacity ? ft_style('background-blend-mode', 'overlay') : null;
$styles[]  = ($background->background_color ||$background->background_image) ? ft_style('background',  $image_url .' '.  $background->background_position_x .' '. $background->background_position_y . $background->background_size .' '.  $background->background_color.' no-repeat') : null;

echo ft_styles($styles);

