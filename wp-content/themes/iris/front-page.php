<?php get_header(); ?>

<main id="content" class="clear-header" role="main">

	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

		<section class="home intro">
			<?php get_template_part( 'template-parts/home/page-intro' ); ?>
		</section>

		<section class="home statistics-section">
			<?php get_template_part( 'template-parts/components/page-statistics' ); ?>
		</section>

		<section class="home awards-grid">
			<?php get_template_part( 'template-parts/components/page-awards' ); ?>
		</section>

		<section class="home testimonial-carousel dark">
			<?php get_template_part( 'template-parts/components/page-testimonials' ); ?>
		</section>

		<section class="home work">
			<?php get_template_part( 'template-parts/home/page-work' ); ?>
		</section>

	<?php endwhile; endif; ?>

</main>

<?php get_footer(); ?>
