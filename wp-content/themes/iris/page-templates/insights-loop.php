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
		<h2 class="posts-grid-single-title">
			<?php if ( get_field('external_url') ) : ?>
				<a href="<?php the_field('external_url'); ?>" target="_blank"><?php the_title(); ?></a>
			<?php else: ?>
				<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
			<?php endif; ?>
		</h2>
		
		<?php $terms = get_the_terms($post->ID, 'insight_topics'); ?>
		
		<div class="topics">
			<?php foreach ($terms as $term) : ?>
				<span class="topic"><?= $term->name; ?></span>
			<? endforeach; ?>
		</div><!-- end .topics -->
	</div><!-- end .posts-grid-single-content -->
</div><!-- end .posts-grid-col -->