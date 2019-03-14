<?php

$args = ft_get_sub_fields([
        'list',
        'add_header',
        'add_button',
])
?>
<div class="ft_section layout-list_shelf" style="<?php ft_setting('background');?>">
	<div class="container">
        <?php if($args->add_header) ft_partial('header'); ?>
		<?php ft_partial('list', (object)$args->list); ?>
        <?php if($args->add_button) ft_partial('button'); ?>
	</div>
</div>

