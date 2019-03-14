<?php

function ft_add_class($name, $val){
	global $classes;
	if($name && $val) $classes[] = $name.$val;
}