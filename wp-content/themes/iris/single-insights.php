<?php 
get_header(); 
?>

<main id="content" class="clear-header" role="main">

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<section class="post-header-section insight-single-header intro dark">
		<div class="inner">
			<div class="post-header">
				<div class="post-header-title">
					<?php $category = get_primary_taxonomy_term($post->ID, 'insight_categories'); ?>

					<div class="category-pill" style="background-color: <?php the_field('background_color', 'insight_categories' . '_' . $category['id']); ?> ;"><?= $category['title']; ?></div>
					
					<h1><?php the_title(); ?></h1>
					
					<p><?php the_date('F d, Y'); ?></p>
					
					<p class="post-content-meta">
						<?php
							$article_author = get_field('article_-_article_author');
							$article_author = empty($article_author) ? get_the_author_meta('display_name') : $article_author;
						?>
						<span class="post-content-meta-author"><?php the_field('author') ?></span>
						<br/>
						<span class="post-content-meta-datetime"><?php echo the_field('author_position'); ?></span>
					</p>
				</div>

				<div class="post-header-image">
					<img src="<?php echo get_the_post_thumbnail_url( get_the_ID(), 'medium_large' ); ?>" alt="<?php echo get_the_title(); ?>" />
				</div>
			</div>
		</div>

		<div class="post-section-wave"></div>
	</section>

	<section class="article post-content-section content-block insight-content">
		<div class="inner">
			<div class="flex column post-content">
				<?php the_content(); ?>
				
				<div style="text-align: center;">
					<a class="button-pink" href="https://iristelehealth.com/contact-us/" style="display: inline-block; margin-right: 5px; margin-bottom: 20px;">Contact Us</a>
					<a class="button-pink" href="<?php the_permalink(1946); ?>" style="display: inline-block;">Insight Center Is Where I Want to Be</a>
				</div>
			</div>
			
			<div class="flex column order-lg-1">
				
				<div class="share">
					<span>SHARE</span>
					<div class="socials">
						<a href="http://www.facebook.com/sharer.php?u=<?php the_permalink(); ?>" target="_blank" OnClick="window.open(this.href,'targetWindow','toolbar=no,location=0,status=no,menubar=no,scrollbars=yes,resizable=yes,width=600,height=400'); return false;">
							<i class="fab fa-facebook"></i>
						</a>
						<a href="http://twitter.com/share?url=<?php the_permalink(); ?>&text=<?php the_title(); ?>" target="_blank" OnClick="window.open(this.href,'targetWindow','toolbar=no,location=0,status=no,menubar=no,scrollbars=yes,resizable=yes,width=600,height=400'); return false;">
							<i class="fab fa-twitter"></i>
						</a>
						
						<a href="https://www.linkedin.com/sharing/share-offsite/?url=<?php the_permalink(); ?>" target="_blank" OnClick="window.open(this.href,'targetWindow','toolbar=no,location=0,status=no,menubar=no,scrollbars=yes,resizable=yes,width=600,height=400'); return false;">
							<i class="fab fa-linkedin"></i>
						</a>
						
					</div><!-- end .socials -->
				</div><!-- end .share -->
			</div>
		</div>
	</section>
	
	<section class="posts-grid-section related-posts">
		<div class="inner">
			<h5>Up Next</h5>
			
			<div class="posts-grid">
				<?php
				$args = array(
					'post_type' => 'insights',
					'posts_per_page' => 9,
					'post__not_in' => array(get_the_ID())
				);
				
				$related_posts = new WP_Query( $args );
				if( $related_posts->have_posts() ):
						while( $related_posts->have_posts() ): $related_posts->the_post();
				?>
				
					<div class="posts-grid-col">
						<?php $category = get_primary_taxonomy_term($post->ID, 'insight_categories'); ?>
					
						<div class="category-pill" style="background-color: <?php the_field('background_color', 'insight_categories' . '_' . $category['id']); ?> ;"><?= $category['title']; ?></div>
						
						<?php if ( get_field('external_url') ) : ?>
							<a class="posts-grid-single insight-grid-single<?= $count; ?>" href="<?php the_field('external_url'); ?>" target="_blank" style="background: <?php the_field('background_color'); ?>;">
						<?php else: ?>
							<a class="posts-grid-single insight-grid-single<?= $count; ?>" href="<?php the_permalink(); ?>" style="background: <?php the_field('background_color'); ?>;">
						<?php endif; ?>
							<img src="<?php echo get_the_post_thumbnail_url( get_the_ID(), 'medium_large' ); ?>" alt="<?php echo get_the_title(); ?>" />
						</a>
					
						<div class="posts-grid-single-content">
							<h2 class="posts-grid-single-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
						</div><!-- end .posts-grid-single-content -->
					</div><!-- end .posts-grid-col -->
				
				<?php
				endwhile; endif;
				wp_reset_postdata();
				?>
				
			</div><!-- end .posts-grid -->
				
			<div class="blob-purple-2"></div>
				
		</div>
		
	</section>

<?php endwhile; endif; ?>
</main>

<?php get_footer(); ?>