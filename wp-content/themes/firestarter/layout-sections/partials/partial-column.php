<?php
/**
 * Created by PhpStorm.
 * User: Josh
 * Date: 5/16/2018
 * Time: 2:12 PM
 */

global $col, $int;

$odd = $col;
$even = 100 - $col;
$flex = $int ? $even : $odd;

?>
<div class="flex-item <?php ft_setting('padding');?>"
 style="<?php ft_setting('background'); echo "flex-basis:$flex%;"; ?>
"><?php ft_partial('basic_builder'); ?></div>


