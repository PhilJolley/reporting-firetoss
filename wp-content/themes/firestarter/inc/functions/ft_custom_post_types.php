<?php

function ft_custom_post_types(){
	$args = ft_get_options(['post_types']);
	if($args->post_types):
	foreach ($args->post_types as $post_type){
		ft_post_type(
			$post_type['slug'],
			$post_type['label_singular'],
			$post_type['label_plural'],
			$post_type['taxonomies']
		);
	}
	endif;
}
