<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Firetoss_Theme
 */

get_header(); ?>

    <div id="primary" class="content-area">
        <div class="container">
            <main id="main" class="site-main" role="main">

                <?php
                while (have_posts()) : the_post();

                    ft_content( get_post_format());

                    the_post_navigation();

                    ft_comments();

                endwhile; // End of the loop.
                ?>

            </main><!-- #main -->
        </div><!-- .container -->
    </div><!-- #primary -->


<?php
get_footer();
