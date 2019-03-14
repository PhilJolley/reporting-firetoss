<?php

function setup(){
	global $plugins, $fields, $defaults, $counter;
	$counter = 1;
	$plugins = (object)null;
	$defaults = (object)[
		'columns_in_grid' => 8
	];
	$fields = (object)[
		'header' => ['title', 'type', 'size'],
		'text_block' => ['body', 'extra_class']
	];
}

add_action('init', 'setup');