<?php

$args = ft_get_options(['social_media_links']);


?>

<div class="layout-social">
    <?php foreach($args->social_media_links as $item) : ?>
        <a href="<?=$item['url']?>" target="_blank">
            <i class="fa fa-<?=$item['acf_fc_layout']?>"></i>
        </a>
    <?php endforeach; ?>
</div>
