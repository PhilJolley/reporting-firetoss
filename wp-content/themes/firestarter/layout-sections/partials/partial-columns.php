<?php
/**
 * Created by PhpStorm.
 * User: Josh
 * Date: 5/14/2018
 * Time: 12:56 PM
 */

global $ft_data;

$args = $ft_data ? $ft_data : ft_get_sub_fields([
    'columns',
]);


foreach ($args->columns as $column): ?>
        <div class="flex-item" style="<?php ft_setting('background', false) ?>">
            <?php ft_partial('basic_builder', (object)$column); ?>
        </div>
    <?php
endforeach;

