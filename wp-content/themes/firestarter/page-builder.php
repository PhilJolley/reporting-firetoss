<?php

// =============================================================================
// TEMPLATE NAME: Page Builder
// -----------------------------------------------------------------------------
ob_start();
$acf_installed = function_exists('have_rows');

?>

<?php get_header(); ?>
<div class="page-wrap">
	<?php if ($acf_installed && have_rows('page_builder')) : while (have_rows('page_builder')) : the_row();


	    ft_layout(get_row_layout());

	endwhile; endif; ?>
</div>

<?php get_footer();
ob_end_flush();
?>
