<?php

function ft_taxonomies(){
	$args = ft_get_options(['taxonomies']);

    if($args->taxonomies):
	foreach ($args->taxonomies as $taxonomy){
		ft_taxonomy(
			$taxonomy['slug'],
			$taxonomy['label_singular'],
			$taxonomy['label_plural'],
			$taxonomy['post_types']
		);
	}
	endif;
}