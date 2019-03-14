<?php

global $ft_data;
$args =  $ft_data ? $ft_data : ft_get_sub_fields(['basic_builder']);
//print_r($args);
if($args->basic_builder):
foreach ($args->basic_builder as $layout) :


    $name = $layout['acf_fc_layout'];
//print_r($name);

    ft_partial($layout['acf_fc_layout'], (object)$layout[$name]);


endforeach;
endif;



