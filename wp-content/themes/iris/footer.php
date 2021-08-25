	<div class="clear"></div>
	
	<?php global $post_ID;
	
	if ( get_field( 'would_you_like_to_show_the_footer_form', $post_ID ) == 1 || ( is_single() && 'post' == get_post_type() ) ) : ?>
		<footer class="form-showing">
			<div class="inner">
				<div class="contact-form">
					<div class="flex">
						<div class="flex column">														
							<h2><?php the_field( 'footer_-_contact_form_title', 'option' ); ?></h2>
							<p><?php the_field( 'footer_-_contact_form_text', 'option' ); ?></p>
						</div>
						<?php if ( get_field( 'footer_-_contact_form_image', 'option' ) ) { ?>
							<img src="<?php the_field( 'footer_-_contact_form_image', 'option' ); ?>" alt="Telepsychiatry Companies" />
						<?php } ?>
					</div>
					<div class="flex form">
						<?php
							$form_type = get_field( 'footer_-_contact_form_type', 'option' );
							if ( $form_type == "Gravity Form" ) {
								$form_id = get_field( 'footer_-_contact_form_form', 'option' );
								gravity_form( $form_id, false, false, false, '', $ajax = true, false );
							}
							if ( $form_type == "Embed" ) {
								if (get_field('footer_-_contact_form_embed')) {
									the_field( 'footer_-_contact_form_embed', '', false, false );
								} else {
									the_field( 'footer_-_contact_form_embed', 'option', false, false );
								}
							}
						?>
					</div>
				</div>
				
	<?php elseif ( get_field( 'would_you_like_to_show_the_subscription_form', $post_ID ) == 1 || ( is_single() && 'insights' == get_post_type() ) ) : ?>
	
		<footer class="form-showing">
			<div class="inner">
				<div class="contact-form subscription-form">
					<?php if ( get_field( 'footer_-_subscription_form_image', 'option' ) ) { ?>
						<img src="<?php the_field( 'footer_-_subscription_form_image', 'option' ); ?>" alt="Telepsychiatry Companies" />
					<?php } ?>
					<div class="flex">
						<div class="flex column">														
							<h2><?php the_field( 'footer_-_subscription_form_title', 'option' ); ?></h2>
							<p><?php the_field( 'footer_-_subscription_form_text', 'option' ); ?></p>
						</div>
					</div>
					<div class="flex form">
						<?php
							$form_type = get_field( 'footer_-_subscription_form_type', 'option' );
							if ( $form_type == "Gravity Form" ) {
								$form_id = get_field( 'footer_-_subscription_form_form', 'option' );
								gravity_form( $form_id, false, false, false, '', $ajax = true, false );
							}
							if ( $form_type == "Embed" ) {
								if (get_field('footer_-_subscription_form_embed')) {
									the_field( 'footer_-_subscription_form_embed', '', false, false );
								} else {
									the_field( 'footer_-_subscription_form_embed', 'option', false, false );
								}
							}
						?>
					</div>
				</div>

	<?php else : ?>
		<footer>
			<div class="inner">
	<?php endif; ?>
				<div class="flex column">
					<?php if ( have_rows( 'footer_-_link_columns', 'option' ) ) : ?>
						<div class="flex footer-links">
							<?php while ( have_rows( 'footer_-_link_columns', 'option' ) ) : the_row(); ?>
								<div class="flex column">
									<p class="column-title"><?php the_sub_field( 'footer_-_link_column_title' ); ?></p>
									<?php if ( have_rows( 'footer_-_links' ) ) : ?>
										<?php while ( have_rows( 'footer_-_links' ) ) : the_row(); ?>
											<?php $footer_link = get_sub_field( 'footer_-_link' ); ?>
											<?php if ( $footer_link ) { ?>
												<a href="<?php echo $footer_link['url']; ?>" target="<?php echo $footer_link['target']; ?>"><?php echo $footer_link['title']; ?></a>
											<?php } ?>
										<?php endwhile; ?>
									<?php else : ?>
										<?php // no rows found ?>
									<?php endif; ?>
								</div>
							<?php endwhile; ?>
						</div>
					<?php endif; ?>

					<div class="flex footer-boilerplate">
						<div class="flex column">
							<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="logo" aria-label="Home">
								<?php if ( get_field( 'footer_-_logo_dark', 'option' ) ) { ?>
									<img class="footer-logo" src="<?php the_field( 'footer_-_logo_dark', 'option' ); ?>" alt="Telepsychiatry Companies" />
								<?php } ?>
							</a>
							<div class="flex social-links">
								<?php if ( have_rows( 'footer_-_platform', 'option' ) ) : ?>
									<?php while ( have_rows( 'footer_-_platform', 'option' ) ) : the_row(); ?>
										<?php $footer_platform_url = get_sub_field( 'footer_-_platform_url' ); ?>
										<?php if ( $footer_platform_url ) { ?>
											<a href="<?php echo $footer_platform_url['url']; ?>" target="<?php echo $footer_platform_url['target']; ?>"><?php echo $footer_platform_url['title']; ?>
													<?php if ( get_sub_field( 'footer_-_platform_icon' ) ) { ?>
														<img src="<?php the_sub_field( 'footer_-_platform_icon' ); ?>" alt="Telepsychiatry Companies" />
													<?php } ?>
											</a>
										<?php } ?>
									<?php endwhile; ?>
								<?php else : ?>
									<?php // no rows found ?>
								<?php endif; ?>
							</div>
						</div>
						<div class="flex">
							<p><?php the_field( 'footer_-_boilerplate', 'option' ); ?></p>
						</div>
					</div>
				</div>
			</div>
		</footer>
	<?php wp_footer(); ?>

			<!-- Google Event tracking tag - Google Analytics -->
				

<script>
  var x = 0;
  var myVar = setInterval(function(){
    if(x == 0){
      if(jQuery('.hbspt-form:contains("Thank")').is(":visible"))
      {
        gtag('event', 'Submit', {
          'event_category' : 'Form',
          'event_label' : 'Contact'
        });
        clearInterval(myVar);
        x = 1;
      }
    }
  }, 1000);
</script>


	</body>

</html>
