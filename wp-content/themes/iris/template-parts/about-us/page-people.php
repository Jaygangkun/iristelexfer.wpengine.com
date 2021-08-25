<?php
	// Get 'Our People' posts
	$people_posts = get_posts( array(
		'post_type' => 'people',
		'posts_per_page' => 6, // -1 for unlimited posts
	) );
?>

<?php if ( $people_posts ) : ?>

	<div class="inner">
		<div class="flex column">
			<?php if ( have_rows( 'about_us_-_our_people' ) ) : ?>
				<?php while ( have_rows( 'about_us_-_our_people' ) ) : the_row(); ?>
					<h2><?php the_sub_field( 'our_people_-_title' ); ?></h2>
					<p><?php the_sub_field( 'our_people_-_subtitle' ); ?></p>
				<?php endwhile; ?>
			<?php endif; ?>
		</div>
	</div>

	<div class="white-block">
		<div class="flex profiles">

			<div class="modal-dimmer"></div>

			<?php foreach ( $people_posts as $post ) {
				setup_postdata($post);
				$people_img = get_the_post_thumbnail_url( $post->ID, 'full' );
			?>

				<div class="flex column profile">
					<div class="flex column">
						<div class="people-photo" style="background-image: url('<?php echo $people_img ?>');"></div>
						<p class="people-name"><?php the_title(); ?></p>
						<p class="people-title"><?php the_field( 'our_people_-_title' ); ?></p>
						<div class="flex people-links">
							<?php $our_people_linkedin = get_field( 'our_people_-_linkedin' ); ?>
							<?php if ( $our_people_linkedin ) { ?>
								<a class="people-link" href="<?php echo $our_people_linkedin['url']; ?>" target="<?php echo $our_people_linkedin['target']; ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon-linkedin.svg" alt="Telepsychiatry Companies"></a>
							<?php } ?>
							<a class="people-link bio" tabindex="0">View bio</a>
						</div>
					</div>
					<div class="flex column modal">
						<img class="modal-close" src="<?php echo get_template_directory_uri(); ?>/assets/img/icon-x.svg" alt="Close">
						<div class="flex column modal-content">
							<img class="modal-photo" src="<?php echo $people_img ?>" alt="<?php the_title(); ?>">
							<h4 class="modal-name"><?php the_title(); ?></h4>
							<h4 class="modal-title"><?php the_field( 'our_people_-_title' ); ?></h4>
							<p><?php the_field( 'our_people_-_biography' ); ?></p>
							<?php if ( $our_people_linkedin ) { ?>
								<a class="people-link" href="<?php echo $our_people_linkedin['url']; ?>" target="<?php echo $our_people_linkedin['target']; ?>">
									<img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon-linkedin.svg" alt="Telepsychiatry Companies">
								</a>
							<?php } ?>
						</div>
					</div>
				</div>

			<?php } ?>

		</div>
		<button class="view-more">View more</button>
	</div>

<?php endif; ?>

<?php wp_reset_postdata(); ?>