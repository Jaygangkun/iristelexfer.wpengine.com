<?php if ( have_rows( 'who_we_serve', 'option' ) ) : ?>
	<?php while ( have_rows( 'who_we_serve', 'option' ) ) : the_row(); ?>
		<!-- <div class="inner"> -->
		<div class="white-block">
			<div class="who-we-serve">
				<h2><?php the_sub_field( 'who_we_serve_title' ); ?></h2>
				<p><?php the_sub_field( 'who_we_serve_subtitle' ); ?></p>
				<?php if ( have_rows( 'who_we_serve_column' ) ) : ?>
					<div class="flex">
						<?php while ( have_rows( 'who_we_serve_column' ) ) : the_row(); ?>
							<?php 
								$who_we_serve_button = get_sub_field( 'who_we_serve_button' );
								if ( $who_we_serve_button ) {
									$btn_url = $who_we_serve_button['url'];
									$btn_tar = $who_we_serve_button['target'];
									$btn_txt = $who_we_serve_button['text'];
								}
							?>
							<a class="flex flex-item" href="<?php echo $btn_url; ?>" <?php echo $btn_tar; ?> >
								<div class="flex column serving">
									<?php if ( get_sub_field( 'who_we_serve_image' ) ) { ?>
										<img src="<?php the_sub_field( 'who_we_serve_image' ); ?>" alt="Telepsychiatry Companies" />
									<?php } ?>
									<h4><?php the_sub_field( 'who_we_serve_heading' ); ?></h4>
									<p><?php the_sub_field( 'who_we_serve_copy' ); ?></p>
									<button><?php echo $btn_txt; ?></button>
								</div>
							</a>
						<?php endwhile; ?>
					</div>
				<?php endif; ?>
			</div>
		</div>
	<?php endwhile; ?>
<?php endif; ?>