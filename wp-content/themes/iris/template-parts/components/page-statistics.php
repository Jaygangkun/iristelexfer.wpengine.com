<?php if ( get_field( 'would_you_like_to_show_a_statistics_section' ) == 1 ) : ?>
	<div class="inner">
		<div class="flex">
			<?php if ( have_rows( 'statistics_component' ) ) : ?>
				<?php while ( have_rows( 'statistics_component' ) ) : the_row(); ?>
					<div class="flex column">
						<h2><?php the_sub_field( 'statistics_component_-_title' ); ?></h2>
						<p><?php the_sub_field( 'statistics_component_-_copy' ); ?></p>
					</div>
					<?php if ( have_rows( 'statistics_component_-_statistics' ) ) : ?>
						<div class="flex column">
							<?php while ( have_rows( 'statistics_component_-_statistics' ) ) : the_row(); ?>
							<div class="flex">
								<div class="flex flex-left">
									<div>
										<h3><?php the_sub_field( 'statistics_component_-_number' ); ?></h3>
										<h3 class="highlight"><?php the_sub_field( 'statistics_component_-_number_type' ); ?></h3>
									</div>
								</div>
								<div class="flex flex-right">
									<p><?php the_sub_field( 'statistics_component_-_description' ); ?></p>
								</div>
							</div>
							<?php endwhile; ?>
						</div>
					<?php endif; ?>
				<?php endwhile; ?>
			<?php endif; ?>
		</div>
	</div>
<?php endif; ?>

