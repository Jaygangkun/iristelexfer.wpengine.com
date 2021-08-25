
<?php if ( have_rows( 'contact_us_-_office_locations' ) ) : ?>
	<?php while ( have_rows( 'contact_us_-_office_locations' ) ) : the_row(); ?>
		<div class="inner">
			<div class="flex column">
				<h2><?php the_sub_field( 'contact_us_-_office_locations_title' ); ?></h2>
				<?php if ( have_rows( 'contact_us_-_office_locations_-_offices' ) ) : ?>
					<div class="flex offices">
						<?php while ( have_rows( 'contact_us_-_office_locations_-_offices' ) ) : the_row(); ?>
							<div class="flex column">
								<?php if ( get_sub_field( 'contact_us_-_office_locations_image' ) ) { ?>
									<div class="flex office">
										<img src="<?php the_sub_field( 'contact_us_-_office_locations_image' ); ?>" alt="Telepsychiatry Companies" />
									</div>
								<?php } ?>
								<div>
									<h4><?php the_sub_field( 'contact_us_-_office_locations_office_name' ); ?></h4>
									<p><?php the_sub_field( 'contact_us_-_office_locations_office_address' ); ?></p>
								</div>
							</div>
						<?php endwhile; ?>
					</div>
				<?php else : ?>
					<?php // no rows found ?>
				<?php endif; ?>
			</div>
		</div>
	<?php endwhile; ?>
<?php endif; ?>