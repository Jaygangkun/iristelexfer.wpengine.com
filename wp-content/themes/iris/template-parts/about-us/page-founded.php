<div class="inner">
	<?php if ( have_rows( 'about_us_-_how_we_were_founded' ) ) : ?>
		<?php while ( have_rows( 'about_us_-_how_we_were_founded' ) ) : the_row(); ?>
			<div class="flex">
				<div class="flex">
					<?php if ( get_sub_field( 'how_we_were_founded_image' ) ) { ?>
						<img src="<?php the_sub_field( 'how_we_were_founded_image' ); ?>" alt="Telepsychiatry Companies" />
					<?php } ?>
				</div>
				<div class="flex column">
					<h2><?php echo apply_filters( 'header_filter', get_sub_field( 'how_we_were_founded_title' ) ); ?></h2>
					<?php the_sub_field( 'how_we_were_founded_copy' ); ?>
				</div>
			</div>
			<div class="flex column our-vision">
				<?php if ( have_rows( 'how_we_were_founded_our_vision' ) ) : ?>
					<?php while ( have_rows( 'how_we_were_founded_our_vision' ) ) : the_row(); ?>
						<div class="our-vision-bg">
							<svg xmlns="http://www.w3.org/2000/svg" width="801" height="418" viewBox="0 0 801 418">
								<defs>
									<clipPath id="a">
									 	<rect data-name="Rectangle 1207" width="801" height="418" rx="10" transform="translate(1869 5995)" fill="#243ea2"/>
									</clipPath>
								</defs>
								<g data-name="Mask Group 16" transform="translate(-1869 -5995)" clip-path="url(#a)">
									<rect data-name="Rectangle 576" width="801" height="418" rx="10" transform="translate(1869 5995)" fill="#243ea2"/>
									<path class="blob purple" data-name="Path 626" d="M2321.348 6347.626c146.731-26.913 414.658 163.96 357.236 254.496s-497.614 171.275-586.924 107.651 82.959-335.234 229.688-362.147z" fill="none" stroke="#b9b3df" stroke-width="2" stroke-dasharray="9" opacity=".297"/>
									<path class="blob pink" data-name="Path 625" d="M2787.986 5817.724c133.444 7.187 329.39 251.233 261.261 325.395s-468.459 52.6-533.774-28.746 139.07-303.836 272.513-296.649z" fill="none" stroke="#b9b3df" stroke-width="2" stroke-dasharray="9" opacity=".297"/>
									<path class="blob blue" data-name="Path 624" d="M1823.842 6284.339c-125.593 47.11-395.922-91.817-360.443-185.233s412.256-234.744 502.366-188.435-16.333 326.557-141.923 373.668z" fill="none" stroke="#a1a7d1" stroke-width="2.00052" stroke-dasharray="9" opacity=".297"/>
									<path class="blob pink" data-name="Path 621" d="M2802.565 5825.909c130.184 30.958 281.955 306.325 202.362 367.155s-470.146-32.034-520.736-123.823 188.19-274.288 318.374-243.332z" fill="#f434a6"/>
									<path class="blob purple" data-name="Path 623" d="M2451.001 6344.468c138.517 32.817 302.315 314.437 218.397 375.492s-499.475-37.399-554.07-131.271 197.156-277.04 335.673-244.221z" fill="#7869c6"/>
									<path class="blob blue" data-name="Path 622" d="M1913.394 6230.618c-99.298 92.107-405.398 62.246-408.139-39.811s295.14-378.366 397.172-368.415 110.256 316.126 10.967 408.226z" fill="#002b79"/>
								</g>
							</svg>
						</div>
						<p><?php the_sub_field( 'how_we_were_founded_our_vision_title' ); ?></p>
						<h2><?php the_sub_field( 'how_we_were_founded_our_vision_copy' ); ?></h2>
					<?php endwhile; ?>
				<?php endif; ?>
			</div>
		<?php endwhile; ?>
	<?php endif; ?>
</div>