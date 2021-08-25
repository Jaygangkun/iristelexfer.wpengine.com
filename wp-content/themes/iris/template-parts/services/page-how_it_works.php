<?php if ( have_rows( 'services_-_how_it_works' ) ) : ?>
	<?php while ( have_rows( 'services_-_how_it_works' ) ) : the_row(); ?>
		<div class="inner">
			<div class="flex column">
				<h2><?php the_sub_field( 'services_-_how_it_works_title' ); ?></h2>
				<?php the_sub_field( 'services_-_how_it_works_copy' ); ?>
				<?php if ( have_rows( 'services_-_how_it_works_steps_carousel' ) ) : ?>

					<div class="glide steps">
						<div class="glide__track" data-glide-el="track">
							<ul class="glide__slides">
								<?php while ( have_rows( 'services_-_how_it_works_steps_carousel' ) ) : the_row(); ?>
									<li class="glide__slide">
										<div class="step-card">
											<div class="step-number"><?php echo get_row_index(); ?></div>
											<h3><?php the_sub_field( 'services_-_how_it_works_step_title' ); ?></h3>
											<?php the_sub_field( 'services_-_how_it_works_step_copy' ); ?>
										</div>
									</li>
								<?php endwhile; ?>
							</ul>
						</div>
						<div class="glide__arrows" data-glide-el="controls">
							<button class="glide__arrow glide__arrow--left" data-glide-dir="<">prev</button>
							<button class="glide__arrow glide__arrow--right" data-glide-dir=">">next</button>
						</div>
						<div class="glide__bullets" data-glide-el="controls[nav]">
							<?php while ( have_rows( 'services_-_how_it_works_steps_carousel' ) ) : the_row(); ?>
								<button class="slider__bullet glide__bullet" data-glide-dir="=<?php $idx = (get_row_index() - 1); echo $idx; ?>"></button>
							<?php endwhile; ?>
						</div>
					</div>

				<?php endif; ?>
				<h4><?php the_sub_field( 'services_-_how_it_works_cta', false, false ); ?></h4>
			</div>
		</div>
	<?php endwhile; ?>
<?php endif; ?>