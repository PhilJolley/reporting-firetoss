<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package FireStarter_Theme
 *
 *
 */

get_header(); ?>

    <div id="flex" class="content-area">
        <?php if (have_rows('flexible_fields')) :
            while (have_rows('flexible_fields')) : the_row();

                ft_layout(get_row_layout());

            endwhile;
        endif;  ?>
    </div>
<?php
get_footer();