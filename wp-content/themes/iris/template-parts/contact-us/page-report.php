<?php if ( have_rows( 'contact_us_-_report_a_concern' ) ) : ?>
	<?php while ( have_rows( 'contact_us_-_report_a_concern' ) ) : the_row(); ?>
		<div class="inner">
			<div class="flex">
				<?php if ( have_rows( 'contact_us_-_report_a_concern_left_group' ) ) : ?>
					<?php while ( have_rows( 'contact_us_-_report_a_concern_left_group' ) ) : the_row(); ?>
						<div class="flex column">
							<h4><?php the_sub_field( 'contact_us_-_report_a_concern_left_title' ); ?></h4>
							<?php the_sub_field( 'contact_us_-_report_a_concern_left_copy' ); ?>
						</div>
					<?php endwhile; ?>
				<?php endif; ?>
				<?php if ( have_rows( 'contact_us_-_report_a_concern_right_group' ) ) : ?>
					<?php while ( have_rows( 'contact_us_-_report_a_concern_right_group' ) ) : the_row(); ?>
						<div class="flex column">
							<h4><?php the_sub_field( 'contact_us_-_report_a_concern_right_title_copy' ); ?></h4>
							<?php the_sub_field( 'contact_us_-_report_a_concern_right_copy' ); ?>
						</div>
					<?php endwhile; ?>
				<?php endif; ?>
			</div>
		</div>
	<?php endwhile; ?>
<?php endif; ?>