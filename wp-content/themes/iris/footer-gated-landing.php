<div class="clear"></div>
	
	<footer class="gated-landing-footer">
		<div class="inner">
			<div class="flex column">
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
