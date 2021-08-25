<div class="inner">
	<div class="article-intro">
		<p class="article-intro-top">
			<a href="<?php echo get_permalink( get_page_by_path( 'blog' ) ); ?>">Back to list</a>
		</p>
		<div class="article-intro-title">
			<h2><?php the_field( 'article_-_article_title', false, false ); ?></h2>
		</div>

		<div class="article-intro-image">
			<img src="<?php echo get_the_post_thumbnail_url( get_the_ID(), 'medium_large' ); ?>" alt="<?php echo get_the_title(); ?>" />
		</div>
	</div>
</div>
