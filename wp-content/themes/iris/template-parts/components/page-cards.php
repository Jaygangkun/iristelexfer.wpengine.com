<?php if ( get_field( 'would_you_like_to_show_a_card_carousel' ) == 1 ) : ?>

	<?php if ( have_rows( 'card_carousel' ) ) : ?>
		<?php while ( have_rows( 'card_carousel' ) ) : the_row(); ?>
			<div class="inner">
				<div class="flex column">
					<h2><?php the_sub_field( 'card_carousel_-_title' ); ?></h2>
					<?php the_sub_field( 'card_carousel_-_copy' ); ?>
					
					<?php if ( have_rows( 'card_carousel_-_cards' ) ) : ?>
						<div class="glide cards">
							<div class="glide__track" data-glide-el="track">
								<ul class="glide__slides">
									<?php while ( have_rows( 'card_carousel_-_cards' ) ) : the_row(); ?>
										<li class="glide__slide">
											<div class="card">
												<div class="card-number"><?php echo get_row_index(); ?></div>
												<h3><?php the_sub_field( 'card_carousel_-_card_title' ); ?></h3>
												<?php the_sub_field( 'card_carousel_-_card_copy' ); ?>
											</div>
										</li>
									<?php endwhile; ?>
								</ul>
							</div>
							<div class="glide__controllers">
								<div class="glide__arrows" data-glide-el="controls">
									<button class="glide__arrow glide__arrow--left" data-glide-dir="<"><svg version="1.1" xmlns="http://www.w3.org/2000/svg" x="0" y="0" viewBox="0 0 8.7 14.6" xml:space="preserve"><path d="M8.014.707l-6.6 6.6 6.6 6.6" fill="none" stroke="#f434a6" stroke-width="2"/></svg></button>
									<button class="glide__arrow glide__arrow--right" data-glide-dir=">"><svg version="1.1" xmlns="http://www.w3.org/2000/svg" x="0" y="0" viewBox="0 0 8.7 14.6" xml:space="preserve"><path d="M.7.707l6.6 6.6-6.6 6.6" fill="none" stroke="#f434a6" stroke-width="2"/></svg></button>
								</div>
								<div class="glide__bullets" data-glide-el="controls[nav]">
									<?php while ( have_rows( 'card_carousel_-_cards' ) ) : the_row(); ?>
										<button class="slider__bullet glide__bullet" data-glide-dir="=<?php $idx = (get_row_index() - 1); echo $idx; ?>"></button>
									<?php endwhile; ?>
								</div>
							</div>
						</div>
					<?php endif; ?>

					<h4><?php echo apply_filters( 'header_filter', get_sub_field( 'card_carousel_-_cta' ) ); ?></h4>
					<?php $card_carousel_cta_button = get_sub_field( 'card_carousel_-_cta_button' ); ?>
					<?php if ( $card_carousel_cta_button ): ?>
						<a href="<?php echo $card_carousel_cta_button['url']; ?>" <?php echo $card_carousel_cta_button['target']; ?> > 
							<button><?php echo $card_carousel_cta_button['text']; ?></button>
						</a>
					<?php endif; ?>
				</div>
			</div>
		<?php endwhile; ?>
	<?php endif; ?>

<?php endif; ?>