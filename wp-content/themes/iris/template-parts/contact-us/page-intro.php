<?php if ( have_rows( 'contact_us_-_intro' ) ) : ?>
	<?php while ( have_rows( 'contact_us_-_intro' ) ) : the_row(); ?>
		<div class="inner">
			<div class="flex column">
				<h1 style="color: #fff;"><?php the_sub_field( 'contact_us_-_title' ); ?></h1>
				<?php the_sub_field( 'contact_us_-_copy' ); ?>
				<?php if ( get_sub_field( 'contact_us_-_image' ) ) { ?>
					<img src="<?php the_sub_field( 'contact_us_-_image' ); ?>" alt="Telepsychiatry Companies" />
				<?php } ?>
			</div>
		</div>
	<?php endwhile; ?>
<?php endif; ?>