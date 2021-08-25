<?php if ( have_rows( 'about_us_-_our_company_values' ) ) : ?>
	<?php while ( have_rows( 'about_us_-_our_company_values' ) ) : the_row(); ?>
		<?php $our_company_values_header_background = get_sub_field( 'our_company_values_-_header_background' ); ?>
		<?php if ( $our_company_values_header_background ) { ?>
			<div class="background-bg" style="background-image: url('<?php echo $our_company_values_header_background['url']; ?>');">
				</div>
		<?php } ?>
			<div class="inner">
				<div class="flex column white-block">
					<div class="flex">
						<div><h2><?php the_sub_field( 'our_company_values_-_title' ); ?></h2></div>
						<?php if ( get_sub_field( 'our_company_values_-_image' ) ) { ?>
							<div><img src="<?php the_sub_field( 'our_company_values_-_image' ); ?>" alt="Telepsychiatry Companies" /></div>
						<?php } ?>
					</div>
					<div class="values-list">
						<?php if ( have_rows( 'our_company_values_-_values' ) ) : ?>
							<?php while ( have_rows( 'our_company_values_-_values' ) ) : the_row(); ?>
								<div class="flex column value">
									<p class="value-title"><?php the_sub_field( 'our_company_values_-_value_title' ); ?></p>
									<p><?php the_sub_field( 'our_company_values_-_value_copy' ); ?></p>
								</div>
							<?php endwhile; ?>
						<?php else : ?>
							<?php // no rows found ?>
						<?php endif; ?>
					</div>
				</div>
			</div>
	<?php endwhile; ?>
<?php endif; ?>