<?php if ( have_rows( 'services_-_intro' ) ) : ?>
	<?php while ( have_rows( 'services_-_intro' ) ) : the_row(); ?>

		<?php
			if ( get_sub_field( 'should_the_background_image_be_full_width' ) === "Full Width" ) {
				$full_width = true;
			} else {
			 	$full_width = false;
			}
		?>

		<?php if ( $full_width ) : ?>
			<?php if ( get_sub_field( 'services_-_intro_background' ) ) { ?>
				<div class="services-hero-bg full" style="background-image: url('<?php the_sub_field( 'services_-_intro_background' ); ?>');"></div>
			<?php } ?>
		<?php endif; ?>

		<div class="inner">
			<div class="flex">
				<div class="flex column">
					<p class="heading"><?php the_sub_field( 'services_-_intro_heading' ); ?></p>

					<h2><?php echo apply_filters( 'header_filter', get_sub_field( 'services_-_intro_title' ) ); ?></h2>

					<p><?php the_sub_field( 'services_-_intro_copy' ); ?></p>
				</div>

				<?php if ( get_sub_field( 'services_-_intro_foreground' ) ) { ?>
					<?php if ( !$full_width ) : ?>
						<div class="services-hero-bg">
							<img src="<?php the_sub_field( 'services_-_intro_background' ); ?>" alt="Telepsychiatry Companies">
						</div>
						<div class="services-hero-fg">
							<img src="<?php the_sub_field( 'services_-_intro_foreground' ); ?>" alt="Telepsychiatry Companies">
						</div>
					<?php else : ?>
						<div class="services-hero-fg full">
							<img src="<?php the_sub_field( 'services_-_intro_foreground' ); ?>" alt="Telepsychiatry Companies">
						</div>
					<?php endif; ?>

				<?php } ?>
			</div>

			<?php if ( have_rows( 'services_-_intro_cta' ) ) : ?>
				<div class="dark-block">
					<?php while ( have_rows( 'services_-_intro_cta' ) ) : the_row(); ?>
						<h4><?php the_sub_field( 'services_-_intro_cta_heading', false, false ); ?></h4>
						<p><?php the_sub_field( 'services_-_intro_cta_copy' ); ?></p>
						<?php $services_intro_cta_button = get_sub_field( 'services_-_intro_cta_button' ); ?>
						<?php if ( $services_intro_cta_button ): ?>
							<a href="<?php echo $services_intro_cta_button['url']; ?>" <?php echo $services_intro_cta_button['target']; ?> > 
								<button><?php echo $services_intro_cta_button['text']; ?></button>
							</a>
						<?php endif; ?>
					<?php endwhile; ?>
				</div>
			<?php endif; ?>
		</div>

	<?php endwhile; ?>
<?php endif; ?>

