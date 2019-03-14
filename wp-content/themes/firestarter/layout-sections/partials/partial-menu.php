<?php
global $ft_data;
$args =  $ft_data ? $ft_data : ft_get_sub_fields(['menu_name']);
 if($args->menu_name):   ?>
    <div class="partial-navigation">
        <?php
        wp_nav_menu( array(
            'menu' => $args->menu_name
        ) );
        ?>
    </div>
<?php endif;
