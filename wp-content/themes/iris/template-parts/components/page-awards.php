<?php if ( get_field( 'would_you_like_to_show_the_awards_grid' ) == 1 ) : ?>
	<div class="inner">
		<?php
			$award_grid_title = get_field( 'award_title' ); 
		?>
		<?php if ( have_rows( 'award_grid' ) ) : ?>
			<?php while ( have_rows( 'award_grid' ) ) : the_row(); ?>
				<?php 
					$award_grid_gallery_images_images = get_sub_field( 'award_grid_gallery_images' ); 
				?>
				<?php if ( $award_grid_gallery_images_images ) :  ?>
					<hr>
					<h1><?php echo $award_grid_title; ?></h1>
					<div class="flex award-grid">
						<?php foreach ( $award_grid_gallery_images_images as $award_grid_gallery_images_image ): ?>
							<div>
								<img src="<?php echo $award_grid_gallery_images_image['sizes']['medium']; ?>" alt="<?php echo 'Telepsychiatry Companies - ' . $award_grid_gallery_images_image['alt']; ?>" />
							</div>
						<?php endforeach; ?>
					</div>
				<?php endif; ?>
			<?php endwhile; ?>
		<?php endif; ?>
	</div>
<?php endif; ?>