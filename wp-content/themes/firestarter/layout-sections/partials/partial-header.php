<?php
/**
 * Created by PhpStorm.

 * Date: 12/13/2017
 * Time: 3:32 PM
 */
global $ft_data;
$classes = [];
$styles = [];
$args = $ft_data ? $ft_data : ft_get_sub_fields([
    'title',
    'type',
    'color',
    'size',
    'alignment',
    'font_weight',
    'no_margin',
//    'divider',
]);

$styles[] = $args->color ? ft_style('color', $args->color) : null;
$styles[] = $args->alignment ? ft_style('text-align', $args->alignment) :  null;
$styles[] = $args->font_weight ? ft_style('font-weight', $args->font_weight) :  null;
$classes[] = $args->no_margin ? 'no-margin' :  null;
$classes[] = $args->size ? $args->size : '';
$classes[] = 'header';

 echo $args->title ? "<$args->type class='".ft_classes($classes)."' style='".ft_styles($styles)."' >$args->title</$args->type>":"";
