<?php


$pad = ft_get_sub_fields(['padding','padding_custom']);

if($pad->padding == 'Custom'):
    $class[] =  'flex-padding-custom';
    $padding = 'padding:'.$pad->padding_custom.';';
else:
    $class[] = 'flex-padding-'.$pad->padding;
    $padding = '';
endif;

echo ft_classes($class);
