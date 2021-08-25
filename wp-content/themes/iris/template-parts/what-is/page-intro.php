<?php if ( have_rows( 'what_is_telepsychiatry_-_intro' ) ) : ?>
	<?php while ( have_rows( 'what_is_telepsychiatry_-_intro' ) ) : the_row(); ?>
		<div class="inner">
			<div class="flex column">
				<h1 style="color: #fff;"><?php echo apply_filters( 'header_filter', get_sub_field( 'what_is_telepsychiatry_-_intro_title' ) ); ?></h1>
				<?php if ( get_sub_field( 'what_is_telepsychiatry_-_intro_image' ) ) { ?>
					<img src="<?php the_sub_field( 'what_is_telepsychiatry_-_intro_image' ); ?>" alt="Telepsychiatry Companies" style="min-height: 213px;" />
				<?php } ?>
			</div>
		</div>
	<?php endwhile; ?>
<?php endif; ?>