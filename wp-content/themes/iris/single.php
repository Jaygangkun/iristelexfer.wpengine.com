<?php 
	get_header(); 
?>

<main id="content" class="clear-header" role="main">

	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<section class="post-header-section intro dark">
			<div class="inner">
				<div class="post-header">
					<div class="post-header-title">
						<h1><?php the_field( 'article_-_article_title', false, false ); ?></h1>
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
					<p class="post-content-meta">
					<?php
						$article_author = get_field('article_-_article_author');
						$article_author = empty($article_author) ? get_the_author_meta('display_name') : $article_author;
					?>
					<span class="post-content-meta-author"><?php echo $article_author; ?></span>
					<br/>
					<span class="post-content-meta-datetime"><?php echo get_the_date('F j, Y'); ?></span>
				</p>
				<?php the_content(); ?>
					
					<div style="text-align: center;">
						<a class="button-pink" href="https://iristelehealth.com/contact-us/" style="display: inline-block; margin-right: 5px; margin-bottom: 20px;">Contact Us</a>
						<a class="button-pink" href="<?php echo get_post_type_archive_link('post'); ?>" style="display: inline-block;">Blog Home Is Where I Want to Be</a>
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

		<?php /*
		<section class="article post-content-section content-block">
			<div class="inner">
				<div class="flex column post-content">
					<p class="post-content-meta">
						<?php
							$article_author = get_field('article_-_article_author');
							$article_author = empty($article_author) ? get_the_author_meta('display_name') : $article_author;
						?>
						<span class="post-content-meta-author"><?php echo $article_author; ?></span>
						<br/>
						<span class="post-content-meta-datetime"><?php echo get_the_date('F j, Y'); ?></span>
					</p>
					<?php the_content(); ?>
				</div><!-- end .flex -->

			</div><!-- end .inner -->
		</section>
		*/ ?>		

		<?php $next_post = get_next_post(); ?>
		<?php if ($next_post) { ?>
			<section class="post-next-section">
				<div class="inner">
					<a class="post-next" href="<?php echo get_permalink($next_post->ID); ?>">
						<div class="post-next-content">
							<p>Next</p>
							<h2><?php echo $next_post->post_title; ?></h2>
						</div>

						<div class="post-next-image">
							<p>Next</p>
							<img src="<?php echo get_the_post_thumbnail_url( $next_post->ID, 'medium_large' ); ?>" alt="<?php echo $next_post->post_title; ?>" />
						</div>
					</a>
				</div>
			</section>
		<?php } ?>

		<?php $previous_post = get_previous_post(); ?>
		<?php if ($previous_post) { ?>
			<section class="post-previous-section">
				<div class="inner">
					<a class="post-previous" href="<?php echo get_permalink($previous_post->ID); ?>">
						<div class="post-previous-content">
							<p>Previous</p>
							<h2><?php echo $previous_post->post_title; ?></h2>
						</div>

						<div class="post-previous-image">
							<p>Previous</p>
							<img src="<?php echo get_the_post_thumbnail_url( $previous_post->ID, 'medium_large' ); ?>" alt="<?php echo $previous_post->post_title; ?>" />
						</div>
					</a>
				</div>
				
				<div class="blob-purple-2"></div>
				
			</section>
		<?php } ?>

		<section class="article spacer"></section>
		
	<?php endwhile; endif; ?>
</main>

<?php get_footer(); ?>