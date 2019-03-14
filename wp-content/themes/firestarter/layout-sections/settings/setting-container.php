<?php

global $columns, $ft_data, $styles, $defaults;
$container = $ft_data ? $ft_data : ft_get_sub_fields(['container_width']);

$class = ft_class('container-', $container->container_width);

echo $class;