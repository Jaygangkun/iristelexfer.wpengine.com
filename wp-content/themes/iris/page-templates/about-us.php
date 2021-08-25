<?php
/*
 * Template Name: About Us
 * Template Post Type: page
 */
?>

<?php get_header(); ?>

<main id="content" class="clear-header" role="main">

	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

		<section class="about-us intro" id="section-about-us-intro">
			<?php get_template_part( 'template-parts/about-us/page-intro' ); ?>
		</section>

		<section class="about-us founded dark" id="section-about-us-founded">
			<?php get_template_part( 'template-parts/about-us/page-founded' ); ?>
		</section>

		<section class="services psychiatry values-alt" id="section-about-us-values">
			<?php get_template_part( 'template-parts/services/page-psychiatry' ); ?>
		</section>

		<!-- <section class="about-us values">
			<?php // get_template_part( 'template-parts/about-us/page-values' ); ?>
		</section> -->

		<section class="about-us people" id="section-about-us-people">
			<?php get_template_part( 'template-parts/about-us/page-people' ); ?>
		</section>

	<?php endwhile; endif; ?>

</main>

<?php get_footer(); ?>