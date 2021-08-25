<?php
/*
 * Template Name: Contact Us
 * Template Post Type: page
 */
?>

<?php get_header(); ?>

<main id="content" class="clear-header" role="main">

	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

		<section class="contact-us intro dark">
			<?php get_template_part( 'template-parts/contact-us/page-intro' ); ?>
		</section>

		<section class="contact-us form">
			<?php get_template_part( 'template-parts/contact-us/page-form' ); ?>
		</section>		

		<section class="contact-us report">
			<?php get_template_part( 'template-parts/contact-us/page-report' ); ?>
		</section>

		<section class="contact-us locations">
			<?php get_template_part( 'template-parts/contact-us/page-locations' ); ?>
		</section>

	<?php endwhile; endif; ?>

</main>

<?php get_footer(); ?>