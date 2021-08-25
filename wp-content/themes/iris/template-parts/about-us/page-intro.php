<div class="inner">
	<div class="flex">
		<?php if ( have_rows( 'about_us_-_what_were_here_to_do' ) ) : ?>
			<?php while ( have_rows( 'about_us_-_what_were_here_to_do' ) ) : the_row(); ?>
				<div class="flex column">
					<h1><?php echo apply_filters( 'header_filter', get_sub_field( 'what_were_here_to_do_title' ) ); ?></h1>
					<?php the_sub_field( 'what_were_here_to_do_copy' ); ?>
				</div>
				<div class="flex">
					<div class="blob-pink-3"></div>
					<?php if ( get_sub_field( 'what_were_here_to_do_image' ) ) { ?>
						<img src="<?php the_sub_field( 'what_were_here_to_do_image' ); ?>" alt="Telepsychiatry Companies" />
					<?php } ?>
				</div>
			<?php endwhile; ?>
		<?php endif; ?>
	</div>
</div>