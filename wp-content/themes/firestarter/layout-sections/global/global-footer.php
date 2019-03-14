<?php
$args = ft_get_options(['footer_block_block_id']);
//print_r($args);

if( $args->footer_block_block_id): ?>
    <div id="site-footer">
        <?php ft_layout('block', (object)['block_id' => $args->footer_block_block_id]); ?>
    </div>
<?php endif;