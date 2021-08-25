<?php if ( have_rows( 'services_-_rules_&_regulations' ) ) : ?>
	<?php while ( have_rows( 'services_-_rules_&_regulations' ) ) : the_row(); ?>
		<div class="inner">
			<div class="blob-pink-5"></div>
			<div class="flex">
				<div>
					<h2><?php the_sub_field( 'services_-_rules_&_regulations_title' ); ?></h2>
				</div>
				<div class="flex column">
					<?php the_sub_field( 'services_-_rules_&_regulations_copy' ); ?>
					<?php $services_rules_regulations_button = get_sub_field( 'services_-_rules_&_regulations_button' ); ?>
					<?php if ( $services_rules_regulations_button ): ?>
						<a href="<?php echo $services_rules_regulations_button['url']; ?>" <?php echo $services_rules_regulations_button['target']; ?> > 
							<button><?php echo $services_rules_regulations_button['text']; ?></button>
						</a>
					<?php endif; ?>
				</div>
			</div>
			<div class="blob-purple-2"></div>
		</div>
	<?php endwhile; ?>
<?php endif; ?>