<?php if ( have_rows( 'regulations_-_what_to_consider' ) ) : ?>
	<?php while ( have_rows( 'regulations_-_what_to_consider' ) ) : the_row(); ?>
		<div class="inner">
			<div class="flex column">
				<h2><?php the_sub_field( 'regulations_-_what_to_consider_title' ); ?></h2>
				<?php if ( !empty( get_sub_field( 'regulations_-_what_to_consider_copy' ) ) ) { ?>
					<p><?php the_sub_field( 'regulations_-_what_to_consider_copy' ); ?></p>
				<?php } ?>
			</div>
		</div>
		<?php if ( have_rows( 'regulations_-_what_to_consider_bullet_points' ) ) : ?>
			<?php while ( have_rows( 'regulations_-_what_to_consider_bullet_points' ) ) : the_row(); ?>
				<div class="flex column wysiwyg-output">
					<?php if ( have_rows( 'regulations_-_what_to_consider_outpatient' ) ) : ?>
						<?php while ( have_rows( 'regulations_-_what_to_consider_outpatient' ) ) : the_row(); ?>
							<?php $title = get_sub_field( 'regulations_-_what_to_consider_outpatient_title' ); ?>
							<?php if ($title) { ?>
								<h3><?php echo $title; ?></h3>
							<?php } ?>
							<?php if ( have_rows( 'regulations_-_what_to_consider_outpatient_lists' ) ) : ?>
								<div class="flex list-container">
									<?php while ( have_rows( 'regulations_-_what_to_consider_outpatient_lists' ) ) : the_row(); ?>
										<div class="flex column list">
											<h4><?php the_sub_field( 'regulations_-_what_to_consider_outpatient_list_title' ); ?></h4>
											<?php the_sub_field( 'regulations_-_what_to_consider_outpatient_list_items' ); ?>
										</div>
									<?php endwhile; ?>
								</div>
							<?php endif; ?>
						<?php endwhile; ?>
					<?php endif; ?>
					<?php if ( have_rows( 'regulations_-_what_to_consider_inpatient' ) ) : ?>
						<?php while ( have_rows( 'regulations_-_what_to_consider_inpatient' ) ) : the_row(); ?>
							<?php $title = get_sub_field( 'regulations_-_what_to_consider_inpatient_title' ); ?>
							<?php if ($title) { ?>
								<h3><?php echo $title; ?></h3>
							<?php } ?>
							<?php if ( have_rows( 'regulations_-_what_to_consider_inpatient_lists' ) ) : ?>
								<div class="flex list-container">
									<?php while ( have_rows( 'regulations_-_what_to_consider_inpatient_lists' ) ) : the_row(); ?>
										<div class="flex column list">
											<h4><?php the_sub_field( 'regulations_-_what_to_consider_inpatient_list_title' ); ?></h4>
											<?php the_sub_field( 'regulations_-_what_to_consider_inpatient_list_items' ); ?>
										</div>
									<?php endwhile; ?>
								</div>
							<?php endif; ?>
						<?php endwhile; ?>
					<?php endif; ?>
					<?php if ( have_rows( 'regulations_-_what_to_consider_ods' ) ) : ?>
						<?php while ( have_rows( 'regulations_-_what_to_consider_ods' ) ) : the_row(); ?>
							<?php $title = get_sub_field( 'regulations_-_what_to_consider_ods_title' ); ?>
							<?php if ($title) { ?>
								<h3><?php echo $title; ?></h3>
							<?php } ?>
							<?php if ( have_rows( 'regulations_-_what_to_consider_ods_lists' ) ) : ?>
								<div class="flex list-container">
									<?php while ( have_rows( 'regulations_-_what_to_consider_ods_lists' ) ) : the_row(); ?>
										<div class="flex column list">
											<h4><?php the_sub_field( 'regulations_-_what_to_consider_ods_list_title' ); ?></h4>
											<?php the_sub_field( 'regulations_-_what_to_consider_ods_list_items' ); ?>
										</div>
									<?php endwhile; ?>
								</div>
							<?php endif; ?>
						<?php endwhile; ?>
					<?php endif; ?>
				</div>
			<?php endwhile; ?>
		<?php endif; ?>
		<div class="inner">
			<div class="closer">
				<?php the_sub_field( 'regulations_-_what_to_consider_closer' ); ?>
			</div>
		</div>
	<?php endwhile; ?>
<?php endif; ?>