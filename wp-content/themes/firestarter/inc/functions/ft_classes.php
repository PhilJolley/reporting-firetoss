<?php

function ft_classes($arr = null){
	global $classes;
	$str = join(' ', $arr ? $arr : $classes);
	return $str;
}