<?php
global $ft_data;

$args = $ft_data ? $ft_data : ft_get_sub_fields([
    'columns',
    'number_of_columns',
    'spacing',
    'align_items',
    'justify_content',
    'container_width'
]);
$parts = ['background', 'layout'];
?>

<div class="ft_section layout-multi_column" style="<?php ft_setting('background'); ?>">
    <div class="container  <?php ft_setting('container');?> ">

        <?php ft_partial('header'); ?>

        <div class="multi_column-wrapper <?php ft_setting('layout') ?>">

            <?php ft_partial('columns'); ?>

        </div>

        <?php ft_partial('button'); ?>

    </div>
</div>

