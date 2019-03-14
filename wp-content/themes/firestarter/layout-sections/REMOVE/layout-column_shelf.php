<?php
global $styles, $classes, $defaults;

$args = ft_get_sub_fields([
        'number_of_columns',
    'default_column_width', 'align_items',
    'justify_content', 'config', 'spacing',
    'extra_class', 'background_color'
]);

$defaults->column_width = $defaults->columns_in_grid / $args->number_of_columns;
$defaults->spacing = $args->spacing ? $args->spacing : 'margin-1';
$arr = [];

$i = 0; while($i < $args->number_of_columns) :
    $arr[] = "column_".($i+1)."_basic_builder";
    $arr[] = "column_".($i+1)."_column_offset";
    $arr[] = "column_".($i+1)."_column_width";
    $arr[] = "column_".($i+1)."_extra_class";
    $i++; endwhile;
$columns = ft_get_sub_fields($arr);
ft_layout('container');
ft_add_class('flex-grid--',$defaults->columns_in_grid);
ft_add_class('flex-items--',$defaults->column_width);
ft_add_class('flex-align-', $args->align_items);
ft_add_class('flex-justify-', $args->justify_content);
?>
<div class="layout-column_shelf <?=$args->extra_class?>" style="<?=ft_partial('background')?>">
    <div class="container grid <?=ft_classes()?>">
        <?php $n = 0; while ($n < $args->number_of_columns) :

            ft_layout('column', (object)[
                'basic_builder' => $columns->{"column_".($n+1)."_basic_builder"},
                'column_width'  => $columns->{"column_".($n+1)."_column_width"},
                'column_offset' => $columns->{"column_".($n+1)."_column_offset"},
                'extra_class' => $columns->{"column_".($n+1)."_extra_class"}
            ]);
            ?>
            <?php $n++; endwhile; ?>
    </div>
</div>