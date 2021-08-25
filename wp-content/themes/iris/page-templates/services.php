<?php
/*
 * Template Name: Services
 * Template Post Type: page
 */
?>

<?php get_header(); ?>

<main id="content" class="clear-header" role="main">

	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

		<section class="services intro dark">
			<?php get_template_part( 'template-parts/services/page-intro' ); ?>
		</section>

		<section class="services psychiatry">
			<?php get_template_part( 'template-parts/services/page-psychiatry' ); ?>
		</section>

		<section class="services on-your-own">
			<?php get_template_part( 'template-parts/services/page-on_your_own' ); ?>
		</section>

		<section class="services card-carousel dark">
			<?php get_template_part( 'template-parts/components/page-cards' ); ?>
		</section>

		<section class="services statistics-section">
			<?php get_template_part( 'template-parts/components/page-statistics' ); ?>
		</section>

		<section class="services awards-grid">
			<?php get_template_part( 'template-parts/components/page-awards' ); ?>
		</section>

		<section class="services testimonial-carousel">
			<?php get_template_part( 'template-parts/components/page-testimonials' ); ?>
		</section>

		<section class="services rules">
			<?php get_template_part( 'template-parts/services/page-rules' ); ?>
		</section>

	<?php endwhile; endif; ?>

</main>

<?php get_footer(); ?>