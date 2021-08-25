<?php if ( have_rows( 'home_-_work_at_iris_telehealth' ) ) : ?>
	<?php while ( have_rows( 'home_-_work_at_iris_telehealth' ) ) : the_row(); ?>

		<div class="inner">
			<div class="blob-pink-2"></div>
			<div class="flex">
				<?php if ( get_sub_field( 'work_at_iris_image' ) ) { ?>
					<div class="flex">
						<img class="working-at-iris" src="<?php the_sub_field( 'work_at_iris_image' ); ?>" alt="Telepsychiatry Companies" />
					</div>
				<?php } ?>

				<div class="flex column">
					<h2><?php the_sub_field( 'work_at_iris_title' ); ?></h2>
					<p><?php the_sub_field( 'work_at_iris_text' ); ?></p>
					<?php $work_at_iris_smart_button = get_sub_field( 'work_at_iris_smart_button' ); ?>
					<?php if ( $work_at_iris_smart_button ): ?>
						<a href="<?php echo $work_at_iris_smart_button['url']; ?>" <?php echo $work_at_iris_smart_button['target']; ?> > 
							<button><?php echo $work_at_iris_smart_button['text']; ?></button>
						</a>
					<?php endif; ?>
				</div>

			</div>
			<div class="blob-purple-2"></div>
		</div>

	<?php endwhile; ?>
<?php endif; ?>