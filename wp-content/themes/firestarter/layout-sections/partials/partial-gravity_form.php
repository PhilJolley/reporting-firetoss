<?php
global $ft_data;

$args = $ft_data ? $ft_data : ft_get_sub_fields(array("gform_id"))

?>

<div class="layout-gravity_form">
    <div class="container">
        <?php echo do_shortcode("[gravityform id='$args->gform_id' title='false' description='false' ajax='true' tabindex='1']"); ?>
    </div>
</div>
