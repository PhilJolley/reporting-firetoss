<?php
$args = ft_get_options(['add_top_header', 'left_side_links', 'right_side_links', 'background_color', 'text_color']);
if($args->add_top_header):
  $styles[] = $args->text_color ? ft_style('color', $args->text_color) : '';
  $styles[] = $args->background_color ? ft_style('background-color', $args->background_color) : '';
?>
<div class="top-navigation" style="<?=ft_styles($styles);?>">
    <div class="container">
        <div class="flex-grid flex-grid--2">
            <?php if($args->left_side_links): ?>
                <div class="flex-item">
                    <ul>
                    <?php foreach($args->left_side_links as $link): ?>
                        <li><a href="<?=$link['url']?>" class="<?=$link['class']?>" ><?=$link['text']?></a></li>
                    <?php endforeach;?>
                    </ul>
                </div>
            <?php endif;?>


            <?php if($args->right_side_links): ?>
                <div class="flex-item">
                    <ul>
                        <?php foreach($args->right_side_links as $link): ?>
                            <li><a href="<?=$link['url']?>" class="<?=$link['class']?>" ><?=$link['text']?></a></li>
                        <?php endforeach;?>
                    </ul>
                </div>
            <?php endif;?>

        </div>
    </div>
</div>
<?php endif;
