<?php

function ft_add_style($attr, $val = null, $suffix = null){
	global $styles;
	if($val) $styles[] = ft_style($attr, $val, $suffix);
}