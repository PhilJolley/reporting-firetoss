<?php
/**
 * Created by PhpStorm.
 * User: phillipjolley
 * Date: 5/21/18
 * Time: 10:23 AM
 */
?>

<div class="ft_section layout-login" style="<?php ft_setting('background');?>">
    <div class="container login-form  <?php ft_setting('container');?> ">
        <?php
        if (!is_user_logged_in()):
            ft_partial('login');
        else:
            redirect_to('analytics');
        endif;
        ?>
    </div>
</div>
