<?php
/*
 * Template Name: State Page
 * Template Post Type: post, page, states
 */
?>

<?php get_header(); ?>

<main id="content" class="clear-header" role="main">

	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

		<section class="states intro dark">
			<?php get_template_part( 'template-parts/states/page-intro' ); ?>
		</section>

		<section class="states content-block">
			<?php get_template_part( 'template-parts/states/page-content_block' ); ?>
		</section>

		<?php if ( get_field( 'would_you_like_to_show_the_who_we_serve_block' ) == 1 ) : ?>
			<section class="states who-we-serve">
				<?php get_template_part( 'template-parts/components/page-who_we_serve' ); ?>
			</section>
		<?php else : ?>
			<section class="states spacer"></section>
		<?php endif; ?>

	<?php endwhile; endif; ?>

</main>

<?php get_footer(); ?>