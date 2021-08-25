<?php
/*
 * Template Name: Rules & Regulations
 * Template Post Type: page
 */
?>

<?php get_header(); ?>

<main id="content" class="clear-header" role="main">

	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

		<section class="regulations intro dark">
			<?php get_template_part( 'template-parts/regulations/page-intro' ); ?>
		</section>

		<section class="regulations definitions">
			<?php get_template_part( 'template-parts/regulations/page-definitions' ); ?>
		</section>

		<section class="regulations what-to-consider dark">
			<?php get_template_part( 'template-parts/regulations/page-what_to_consider' ); ?>
		</section>

	<?php endwhile; endif; ?>

</main>

<?php get_footer(); ?>