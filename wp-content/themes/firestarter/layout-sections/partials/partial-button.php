<?php
global $ft_data;
$args = $ft_data ? $ft_data :     ft_get_sub_fields([
//    'button_size',
    'button_type',
    'button_link',
    'button_text',
    'button_alignment'
//    'button_color',
]);

$style[] = ft_style('text-align', $args->button_alignment);
ft_add_class('button-', $args->button_type);

if($args->button_text): ?>

<div class="ft_section layout-button" style="<?=ft_styles($style);?>">
    <a class="button <?=ft_classes()?>" href="<?=$args->button_link['url']?>" style="<?=ft_styles()?>"  target="<?=$args->button_link['target']; ?>">
        <span><?=$args->button_text?></span>
    </a>
</div>

<?php endif; ?>

