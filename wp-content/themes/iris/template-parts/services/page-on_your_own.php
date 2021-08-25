<?php if ( have_rows( 'services_-_all_on_your_own' ) ) : ?>
	<?php while ( have_rows( 'services_-_all_on_your_own' ) ) : the_row(); ?>

		<div class="inner">
			<div class="flex column">

				<h2><?php the_sub_field( 'services_-_all_on_your_own_title' ); ?></h2>

				<?php 
					$content_side = get_sub_field( 'services_-_all_on_your_own_top_half_which_side_should_the_text_content_be_on' );
					if ( $content_side === "Right" ) {
						$content_side = " reverse";
					} else {
						$content_side = "";
					}
				?>
				<div class="flex content<?php echo $content_side; ?>">
					<?php if ( have_rows( 'services_-_all_on_your_own_top_half_image__copy_component' ) ) : ?>
						<?php while ( have_rows( 'services_-_all_on_your_own_top_half_image__copy_component' ) ) : the_row(); ?>

							<div class="copy">
								<?php the_sub_field( 'image__copy_component_copy' ); ?>
							</div>
							<?php if ( get_sub_field( 'image__copy_component_image' ) ) { ?>
								<div class="flex column image">
									<img src="<?php the_sub_field( 'image__copy_component_image' ); ?>" alt="Telepsychiatry Companies" />
									<h2><?php the_sub_field( 'image__copy_component_subtitle', false, false ); ?></h2>
								</div>
							<?php } ?>
						<?php endwhile; ?>
					<?php endif; ?>
				</div>

				<?php 
					$content_side = get_sub_field( 'services_-_all_on_your_own_bottom_half_which_side_should_the_text_content_be_on' );
					if ( $content_side === "Right" ) {
						$content_side = " reverse";
					} else {
						$content_side = "";
					}
				?>
				<div class="flex content<?php echo $content_side; ?>">
					<?php if ( have_rows( 'services_-_all_on_your_own_bottom_half_image__copy_component' ) ) : ?>
						<?php while ( have_rows( 'services_-_all_on_your_own_bottom_half_image__copy_component' ) ) : the_row(); ?>
							<div class="copy">
								<?php the_sub_field( 'image__copy_component_copy' ); ?>
							</div>
							<?php if ( get_sub_field( 'image__copy_component_image' ) ) { ?>
								<div class="flex column image">
									<img src="<?php the_sub_field( 'image__copy_component_image' ); ?>" alt="Telepsychiatry Companies" />
									<h2><?php the_sub_field( 'image__copy_component_subtitle', false, false ); ?></h2>
								</div>
							<?php } ?>
						<?php endwhile; ?>
					<?php endif; ?>
				</div>

			</div>
			<div class="blob-purple-3"></div>
		</div>
	<?php endwhile; ?>
<?php endif; ?>