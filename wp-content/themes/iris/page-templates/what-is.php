<?php
/*
 * Template Name: What is Telepsychiatry?
 * Template Post Type: page
 */
?>

<?php get_header(); ?>

<main id="content" class="clear-header" role="main">

	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

		<section class="what-is intro dark">
			<?php get_template_part( 'template-parts/what-is/page-intro' ); ?>
		</section>

		<section class="what-is content-block">
			<?php get_template_part( 'template-parts/what-is/page-content_block' ); ?>
		</section>

		<?php if ( get_field( 'would_you_like_to_show_the_who_we_serve_block' ) == 1 ) : ?> 
			<section class="what-is who-we-serve">
				<?php get_template_part( 'template-parts/components/page-who_we_serve' ); ?>
			</section>
		<?php endif; ?>

	<?php endwhile; endif; ?>

</main>

<?php get_footer(); ?>