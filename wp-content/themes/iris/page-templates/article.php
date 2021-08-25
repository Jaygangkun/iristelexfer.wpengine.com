<?php
/*
 * Template Name: Article
 * Template Post Type: page
 */
?>

<?php get_header(); ?>

<main id="content" class="clear-header" role="main">

	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

		<section class="article intro dark">
			<?php get_template_part( 'template-parts/article/page-intro' ); ?>
		</section>

		<section class="article content-block">
			<?php get_template_part( 'template-parts/article/page-content_block' ); ?>
		</section>

		<?php if ( get_field( 'would_you_like_to_show_the_who_we_serve_block' ) == 1 ) : ?> 
			<section class="article who-we-serve">
				<?php get_template_part( 'template-parts/components/page-who_we_serve' ); ?>
			</section>
		<?php else : ?>
			<section class="article spacer"></section>
		<?php endif; ?>

	<?php endwhile; endif; ?>

</main>

<?php get_footer(); ?>