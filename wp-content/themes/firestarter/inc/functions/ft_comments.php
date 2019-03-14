<?php
/**
 * Created by PhpStorm.

 * Date: 3/15/2018
 * Time: 7:20 PM
 */

function ft_comments()
{
   if (comments_open() || get_comments_number()) :// If comments are open or we have at least one comment, load up the comment template.
        comments_template();
    endif;
}