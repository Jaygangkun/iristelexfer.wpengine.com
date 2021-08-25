<?php if ( have_rows( 'services_-_psychiatry_that_doesnt_compromise' ) ) : ?>
	<?php while ( have_rows( 'services_-_psychiatry_that_doesnt_compromise' ) ) : the_row(); ?>
		<?php $psychiatry_that_doesnt_compromise_header_background = get_sub_field( 'psychiatry_that_doesnt_compromise_-_header_background' ); ?>
		<div class="background-bg" 
			<?php if ( $psychiatry_that_doesnt_compromise_header_background ) { ?>
				style="background-image: url('<?php echo $psychiatry_that_doesnt_compromise_header_background['url']; ?>');
			<?php } ?>
		"></div>
			<div class="blob-container">
				<div class="blob-pink-4"></div>
				<div class="flex column white-block">
					<div class="flex column">
						<h2><?php the_sub_field( 'psychiatry_that_doesnt_compromise_-_title' ); ?></h2>
						<p><?php the_sub_field( 'psychiatry_that_doesnt_compromise_-_subtitle' ); ?></p>
					</div>
					<div class="values-list">
						<?php if ( have_rows( 'psychiatry_that_doesnt_compromise_-_values' ) ) : ?>
							<?php while ( have_rows( 'psychiatry_that_doesnt_compromise_-_values' ) ) : the_row(); ?>
								<div class="flex column value">
									<?php if ( get_sub_field( 'psychiatry_that_doesnt_compromise_-_value_icon' ) ) { ?>
										<div><img src="<?php the_sub_field( 'psychiatry_that_doesnt_compromise_-_value_icon' ); ?>" alt="Telepsychiatry Companies" /></div>
									<?php } ?>
									<p class="value-title"><?php the_sub_field( 'psychiatry_that_doesnt_compromise_-_value_title' ); ?></p>
									<?php the_sub_field( 'psychiatry_that_doesnt_compromise_-_value_copy' ); ?>
								</div>
							<?php endwhile; ?>
						<?php endif; ?>
					</div>
				</div>
			</div>

	<?php endwhile; ?>
<?php endif; ?>