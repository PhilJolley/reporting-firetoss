<?php
/**
 * Created by PhpStorm.

 * Date: 1/9/2018
 * Time: 9:39 PM
 */

add_shortcode('social-media-list', 'social_media_list');

function social_media_list() {

    $args = ft_get_options(['facebook', 'linkedin', 'youtube']);
    $content = "<ul class='social-media-list'>";

        foreach ($args as $key => $value):
            $content .= $value ? "<li><a href='$value' target='_blank'><i class='fa fa-$key'></i></a></li>" : "" ;
        endforeach;

    $content .= "</ul>";
    return $content;
}