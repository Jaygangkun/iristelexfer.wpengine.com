<?php
	get_header();
	$featured_post = get_featured_post();
?>
<main id="content" class="clear-header" role="main">
	<?php if ($featured_post) { ?>
		<section class="post-featured-section intro dark">
			<div class="inner">
				<div class="post-featured">
					<p class="post-featured-top">
						Featured Post
					</p>
					<div class="post-featured-title">
						<h1 class="h2"><?php the_field( 'article_-_article_title', $featured_post, false ); ?></h1>

						<a class="post-featured-readmore" href="<?php the_permalink($featured_post->ID); ?>" class="button">Read</a>
					</div>

					<div class="post-featured-image">
						<img src="<?php echo get_the_post_thumbnail_url( $featured_post->ID, 'medium_large' ); ?>" alt="<?php echo $featured_post->post_title; ?>" />
					</div>
				</div>
			</div>

			<div class="post-section-wave"></div>
		</section>
	<?php } else { ?>
		<section class="article spacer"></section>
	<?php } ?>

	<section class="posts-grid-section">
		<div class="inner">
			<div class="posts-grid">
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
					<div class="posts-grid-col">
						<a class="posts-grid-single" href="<?php the_permalink(); ?>" style="background-color: <?php the_field('article_-_article_background_color', false, false); ?>;">
							<div class="posts-grid-single-image">
								<img src="<?php echo get_the_post_thumbnail_url( get_the_ID(), 'medium_large' ); ?>" alt="<?php echo get_the_title(); ?>" />
							</div>

							<div class="posts-grid-single-content">
								<h2 class="posts-grid-single-title"><?php echo get_the_title(); ?></h2>
							</div>
						</a>
					</div>
				<?php endwhile; endif; ?>
			</div>

			<div class="posts-grid-pagination">
				<?php the_posts_pagination( 'mid_size=2' ); ?>
			</div>
		</div>
	</section>
</main>
<?php get_footer(); ?>