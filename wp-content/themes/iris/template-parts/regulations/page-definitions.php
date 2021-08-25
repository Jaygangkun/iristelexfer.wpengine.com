<?php if ( have_rows( 'regulations_-_what_you_need_to_know' ) ) : ?>
	<?php while ( have_rows( 'regulations_-_what_you_need_to_know' ) ) : the_row(); ?>
		<div class="inner">
			<div class="flex column">
				<h1><?php the_sub_field( 'regulations_-_what_you_need_to_know_title' ); ?></h1>

				<?php $break = ceil(count(get_sub_field( 'regulations_-_what_you_need_to_know_definitions' )) / 2); ?>

				<?php if ( have_rows( 'regulations_-_what_you_need_to_know_definitions' ) ) : ?>
					<div class="flex definitions-container">
						<div class="definition-column">
							<?php while ( have_rows( 'regulations_-_what_you_need_to_know_definitions' ) ) : the_row(); ?>
								<div class="flex column definition">
									<div class="flex accordion">
										<h4><?php the_sub_field( 'regulations_-_what_you_need_to_know_definition_term' ); ?></h4>
										<img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon-accordion.svg" alt="Telepsychiatry Companies">
									</div>
									<div class="panel">
										<p><?php the_sub_field( 'regulations_-_what_you_need_to_know_definition' ); ?></p>
									</div>
								</div>
								<?php
									if (get_row_index() == $break) {
										echo '</div><div class="definition-column">';
									}
								?>
							<?php endwhile; ?>
						</div>
					</div>
				<?php endif; ?>
			</div>
		</div>
	<?php endwhile; ?>
<?php endif; ?>