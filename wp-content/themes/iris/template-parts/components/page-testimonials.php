<?php if ( get_field( 'would_you_like_to_show_the_testimonial_carousel' ) == 1 ) : ?> 

<div class="inner">
	<div class="flex column">
		<div class="quotemarks">
			<h3 class="quotes-top">“</h3>
			<h3 class="quotes-bot">”</h3>
		</div>

		<?php if ( have_rows( 'testimonial_carousel' ) ) : ?>
			<?php while ( have_rows( 'testimonial_carousel' ) ) : the_row(); ?>
				<h2><?php echo apply_filters( 'header_filter', get_sub_field( 'testimonial_title' ) ); ?></h2>
				<?php if ( have_rows( 'testimonial_quotes' ) ) : ?>
					<div class="glide testimonials">
						<div class="glide__track" data-glide-el="track">
							<ul class="glide__slides">
								<?php while ( have_rows( 'testimonial_quotes' ) ) : the_row(); ?>
									<li class="glide__slide">
										<div class="glide__slide__text">
											<p class="quote"><?php the_sub_field( 'testimonial_quote' ); ?></p>
											<p class="author"><?php the_sub_field( 'testimonial_author' ); ?></p>
										</div>
										<div class="glide__slide__image">
											<img src="<?php the_sub_field( 'testimonial_image' ); ?>" alt="Telepsychiatry Companies" />
										</div>
									</li>
								<?php endwhile; ?>
							</ul>
						</div>
						<div class="glide__controllers">
							<div class="glide__arrows">
								<button class="glide__arrow glide__arrow--left"><svg version="1.1" xmlns="http://www.w3.org/2000/svg" x="0" y="0" viewBox="0 0 8.7 14.6" xml:space="preserve"><path d="M8.014.707l-6.6 6.6 6.6 6.6" fill="none" stroke="#f434a6" stroke-width="2"/></svg></button>
								<button class="glide__arrow glide__arrow--right"><svg version="1.1" xmlns="http://www.w3.org/2000/svg" x="0" y="0" viewBox="0 0 8.7 14.6" xml:space="preserve"><path d="M.7.707l6.6 6.6-6.6 6.6" fill="none" stroke="#f434a6" stroke-width="2"/></svg></button>
							</div>
							<div class="glide__bullets" data-glide-el="controls[nav]">
								<?php while ( have_rows( 'testimonial_quotes' ) ) : the_row(); ?>
									<button class="slider__bullet glide__bullet" data-glide-dir="=<?php $idx = (get_row_index() - 1); echo $idx; ?>"></button>
								<?php endwhile; ?>
							</div>
						</div>
					</div>
				<?php else : ?>
					<?php // no rows found ?>
				<?php endif; ?>
			<?php endwhile; ?>
		<?php endif; ?>

	</div>
</div>
<?php endif; ?>