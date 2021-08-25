<div class="inner">
	<div class="flex column">
		<?php if ( have_rows( 'home_intro' ) ) : ?>
			<?php while ( have_rows( 'home_intro' ) ) : the_row(); ?>
				<h2><?php echo apply_filters( 'header_filter', get_sub_field( 'home_intro_title' ) ); ?></h2>
				<p><?php the_sub_field( 'home_intro_subtitle' ); ?></p>
			<?php endwhile; ?>
		<?php endif; ?>
	</div>
</div>

<div class="hero">
	<div class="hero-bg"></div>
	<div class="hero-img">
		<svg xmlns="http://www.w3.org/2000/svg" width="960" height="445" viewBox="0 0 960 445">
			<style>
				.st1{fill:#edecf4}.st2{fill:#b9b3df}.st3{fill:#c9c6df}.st4{fill:#fff}.st5{fill:#120e41}.st6{fill:#4a4295}.st7{fill:#a5a0ca}.st8{fill:#dbd9ea}.st9{fill:#6e68aa}.st10{fill:#282452}.st11{fill:#928ebf}.st12{fill:#535075}.st13{fill:#e64097}.st14{fill:#807bb5}.st15{fill:#5c559f}.st16{fill:#b7b3d4}.st17{fill:#382f8a}.st19{fill:#d4d3dc}.st20{fill:#bebdcb}.st21{fill:#3d3a64}.st22{opacity:.5}.st26{fill:#cccae1}.st32{opacity:.25}.st34{fill:#413673}.st37{fill:#837ab8}.st46{fill:#9ea2cd}.st48{opacity:.15}.st49{fill:none;stroke:#e64097;stroke-width:3;stroke-miterlimit:10}.st50{opacity:5.000000e-02}
			</style>
			<path fill="none" d="M0 0h960v445H0z"/>
			<path class="st1 cloud" d="M29.9 13.9s-.2-6-6.5-6-13.9 4-13.9 4l9.3.3S13.5-2.2 5.5-2.2-9.1 11.2-9.1 11.2l10.8-.7S-3.8 3.6-9.2 3.6c-5.5 0-6.8 10.2-6.8 10.2l45.9.1z" transform="translate(124.377 62.898)"/>
			<path class="st1 cloud" d="M-16 14h59.1S42 4.5 32.9 4.5s-7.3 4.7-7.3 4.7h4.3S26.3-2.3 16-2.3 2.7 7.1 2.7 7.1h4.9S5.7 2.4-.7 2.4s-9.1 10-9.1 10l3.2-1.7c-2.2-.5-4.4-.7-6.6-.5-3 .3-2.8 3.8-2.8 3.8z" transform="translate(369.053 6.869)"/>
			<path class="st1 cloud" d="M34.1 8.3S35.3 3 31.8 3c-2.4 0-5.2 2.4-5.2 2.4h2.9s-3.8-7.6-15.2-7.6S1 4 1 4h2.7s-1-2.4-9.2-2.4C-13 1.6-16 8.3-16 8.3h50.1z" transform="translate(177.684 21.248)"/>
			<path class="st1 cloud" d="M65.3 12s-1-6.9-6.3-6.9c-2.8-.2-5.3 1.9-5.6 4.7h4S51.2.7 33.7.7C21.2.7 17 10.4 17 10.4h13.7S27.2-2.2 16.4-2.2c-7.4 0-11 7.7-11 7.7h10.8S8.7 1.7 2.8 1.7c-8.3 0-8.7 8-8.7 8h4.1s-1.7-1.3-7.1-1.3S-16 12-16 12h81.3z" transform="translate(793.582 7.194)"/>
			<path class="st1 cloud" d="M11.8 10.5s1.3-3.9-.6-3.9c-5 0-7.1 2.3-7.1 2.3l4.8.2S7.2-2.3.9-2.3-10.5 8.4-10.5 8.4l8.5-.6s-4.3-5.4-8.6-5.4c-4.4 0-5.4 8.1-5.4 8.1h27.8z" transform="translate(560.636 25.404)"/>
			<path class="st1" d="M69.3 69.9c61.5-6 160.7 32.3 160.7 32.3H69.3S141.7-2.2 291.9-2.2c134.2 0 258.9 104.4 258.9 104.4l-28.5-4.5s34.1-41.8 146.4-41.8c80.1 0 154.9 44.8 154.9 44.8h-47.9s41.5-28.3 84.8-20.7 62 46.1 62 46.1H-16c0 .1 23.8-50.2 85.3-56.2z" transform="translate(25.338 65.715)"/>
			<path class="st2" d="M0-2.2h960v274H0z" transform="translate(0 173.264)"/>
			<path class="st2" d="M784.6 39.8c21.1 7.5 41.3 17.5 60 29.9H-12.2s-11.7-24.6 5.7-24.6c53.7 0 69.1-24.4 118.8-13.2s75.9-34.1 119-34.1c37.5 0 60 36.6 109.5 36.6s72.3-20.6 130.5-17.3 62.3 22.7 109.1 22.7 68.2-19.2 130.4-16.3 40.3 4.8 73.8 16.3z" transform="translate(65.426 125.853)"/>
			<path class="st3" d="M-9.9-2.2l3.1 5.6L-3.7 9H-16l3.1-5.6 3-5.6z" transform="translate(318.985 99.618)"/>
			<path class="st3" d="M-8-2.2l4 7.4 4 7.4h-16l4-7.4 4-7.4z" transform="translate(317.071 104.785)"/>
			<path class="st3" d="M-8-2.2l4 7.4 4 7.4h-16l4-7.4 4-7.4z" transform="translate(317.071 112.168)"/>
			<path class="st3" d="M-16-2.2h5.2v4.6H-16z" transform="translate(322.497 125.293)"/>
			<path class="st3" d="M-11.8-2.2l2.1 3.9 2.1 3.9H-16l2.1-3.9 2.1-3.9z" transform="translate(435.419 147.436)"/>
			<path class="st3" d="M-10.4-2.2l2.8 5.1L-4.9 8H-16l2.8-5.1 2.8-5.1z" transform="translate(434.096 151.009)"/>
			<path class="st3" d="M-10.4-2.2l2.8 5.1L-4.9 8H-16l2.8-5.1 2.8-5.1z" transform="translate(434.096 156.114)"/>
			<path class="st3" d="M-16-2.2h3.6V1H-16z" transform="translate(437.848 165.191)"/>
			<g>
				<path class="st3" d="M-12.4-2.2l1.8 3.3 1.8 3.3H-16l1.8-3.3 1.8-3.3z" transform="translate(885.502 158.408)"/>
				<path class="st3" d="M-11.3-2.2l2.4 4.4 2.4 4.4H-16l2.4-4.4 2.3-4.4z" transform="translate(884.373 161.457)"/>
				<path class="st3" d="M-11.3-2.2l2.4 4.4 2.4 4.4H-16l2.4-4.4 2.3-4.4z" transform="translate(884.373 165.814)"/>
				<path class="st3" d="M-16-2.2h3.1V.5H-16z" transform="translate(887.575 173.56)"/>
			</g>
			<g>
				<path class="st3" d="M-12.4-2.2l1.8 3.3 1.8 3.3H-16l1.8-3.3 1.8-3.3z" transform="translate(349.131 124.657)"/>
				<path class="st3" d="M-11.3-2.2l2.4 4.4 2.4 4.4H-16l2.4-4.4 2.3-4.4z" transform="translate(348.002 127.706)"/>
				<path class="st3" d="M-11.3-2.2l2.4 4.4 2.4 4.4H-16l2.4-4.4 2.3-4.4z" transform="translate(348.002 132.063)"/>
				<path class="st3" d="M-16-2.2h3.1V.5H-16z" transform="translate(351.204 139.809)"/>
			</g>
			<g>
				<path class="st3" d="M-12.4-2.2l1.8 3.3 1.8 3.3H-16l1.8-3.3 1.8-3.3z" transform="translate(103.122 154.983)"/>
				<path class="st3" d="M-11.3-2.2l2.4 4.4 2.4 4.4H-16l2.4-4.4 2.3-4.4z" transform="translate(101.993 158.032)"/>
				<path class="st3" d="M-11.3-2.2l2.4 4.4 2.4 4.4H-16l2.4-4.4 2.3-4.4z" transform="translate(101.993 162.389)"/>
				<path class="st3" d="M-16-2.2h3.1V.5H-16z" transform="translate(105.195 170.135)"/>
			</g>
			<g>
				<path class="st3" d="M-11.4-2.2L-9 2l2.3 4.3H-16l2.3-4.3 2.3-4.2z" transform="translate(195.785 142.696)"/>
				<path class="st3" d="M-9.9-2.2l3 5.6 3 5.6H-16l3-5.6 3.1-5.6z" transform="translate(194.334 146.615)"/>
				<path class="st3" d="M-9.9-2.2l3 5.6 3 5.6H-16l3-5.6 3.1-5.6z" transform="translate(194.334 152.214)"/>
				<path class="st3" d="M-16-2.2h4v3.5h-4z" transform="translate(198.449 162.17)"/>
			</g>
			<g>
				<ellipse class="st4" cx="195.6" cy="-442.6" rx="211.6" ry="54.4" transform="translate(297.903 795.111)"/>
				<ellipse class="st4" cx="135.3" cy="-458.1" rx="151.3" ry="38.9" transform="translate(70.353 722.951)"/>
				<ellipse class="st4" cx="105.7" cy="-465.7" rx="121.7" ry="31.3" transform="translate(682.15 769.043)"/>
				<path class="st4" d="M-8-497l295.7 98.6L272-356-16-475.5l8-21.5z" transform="translate(178.563 761.376)"/>
				<path class="st4" d="M-16-446l221.3-51 4.6 15.4L-3-402.7-16-446z" transform="translate(580.289 801.986)"/>
				<path class="st5" d="M-16-497h67.7v16.6H-16z" transform="translate(734.242 553.354)"/>
				<path class="st5" d="M-16-497h26.8v11.8H-16z" transform="translate(835.509 555.741)"/>
				<path class="st6" d="M-16-497h151v244.2H-16z" transform="translate(726.235 563.561)"/>
				<path class="st1" d="M-16-497h151v37.1H-16z" transform="translate(726.235 569.954)"/>
				<path class="st1" d="M-16-497h151v37.1H-16z" transform="translate(726.235 619.88)"/>
				<path class="st1" d="M-16-497h151v37.1H-16z" transform="translate(726.235 669.942)"/>
				<path class="st7" d="M-13.7-497c-1.9 0-2.3.9-2.3 2.3s.8 3.5 2.6 3.5 2.1-3.1 2.1-4-.6-1.8-2.4-1.8z" transform="translate(844.973 577.804)"/>
				<path class="st7" d="M-15.5-497l.6 1.2c-.3.2-.8.2-1.1.1" transform="translate(848.839 580.519)"/>
				<path class="st7" d="M-14.5-496.5c-.8-.1-1.5 1.6-1.3 2.7.2 1.1.7 1.7 0 2-.7.3.8 1.3 1.8.6.9-.7.8-2.1 1.6-2.3s2.4-.6 2.6-1.7-.1-1.9-1.3-1.7c-1.1.2-2.3.3-3.4.4z" transform="translate(844.27 577.121)"/>
				<path class="st7" d="M-11.3-497c-2.2.3-4.3 1.6-4.7 6-.4 4.4 2.4 13.4 2.4 16.2 0 2.8 2.4 2.1 2.4 2.1s3.7-15 2.8-19-.3-5.6-2.9-5.3z" transform="translate(843.009 582.733)"/>
				<path class="st7" d="M-12.9-496.9c1.8.5 2 1.5 1.6 2.8s-1.6 3.2-3.4 2.8c-1.8-.5-1.3-3.5-1-4.3s1-1.7 2.8-1.3z" transform="translate(861.211 584.317)"/>
				<path class="st7" d="M-15.1-497c-.3.3-.6.7-.9 1 .3.3.7.4 1.1.3" transform="translate(860.732 586.56)"/>
				<path class="st7" d="M-11.1-495.6c.8.1 1.1 1.9.6 2.9s-1.1 1.5-.4 1.9-1.1 1-1.9.1-.3-2.2-1-2.7c-.7-.4-2.2-1.1-2.1-2.3s.6-1.8 1.7-1.3c.9.7 2 1.1 3.1 1.4z" transform="translate(860.917 583.175)"/>
				<path class="st7" d="M-10.5-481.4l-5.5-1.4c.3-3.9.8-7.9 1.6-9.5 1.9-3.7 1.6-5.3 4-4.4 2.1.8 3.8 2.6 3.1 6.9-.3 2.2-1.8 5.4-3.2 8.4z" transform="translate(856.973 588.877)"/>
				<path class="st7" d="M-16-479.3h33.7L16.5-497l-5.2 6.7-5.2 2.8-11.7-.2-10.4.2v8.2z" transform="translate(836.373 589.712)"/>
				<path class="st7" d="M-15.7-485.1l-.3-2.2c.3 0 8-1 11.7-1 1.9 0 4 0 6.1.1 2 0 3.9.1 5.6.1 2.7 0 7.6-5.4 9.4-8.9l2 1c-1.3 2.4-2.9 4.5-4.8 6.4-1.7 1.7-4.3 3.7-6.6 3.7-1.7 0-3.6 0-5.7-.1s-4.1-.1-6-.1c-3.6.1-11.4 1-11.4 1z" transform="translate(835.045 589.207)"/>
				<path class="st7" d="M-16-497h3.2v13.7H-16z" transform="translate(833.149 593.653)"/>
				<path class="st7" d="M-16-497h3.3v19.4H-16z" transform="translate(867.81 587.966)"/>
				<path class="st7" d="M1.9-488H-16v-5.3c0-2 1.7-3.7 3.7-3.7h10.5c2 0 3.7 1.7 3.7 3.7v5.3zm-16.5-1.4H.5v-3.9c0-1.3-1-2.3-2.3-2.3h-10.5c-1.3 0-2.3 1-2.3 2.3v3.9z" transform="translate(842.315 592.975)"/>
				<path class="st7" d="M-16-497h1.4v8H-16z" transform="translate(853.561 593.653)"/>
				<path class="st7" d="M-16-497h1.4v8H-16z" transform="translate(847.583 593.653)"/>
				<path class="st1" d="M-16-497h151v37.1H-16z" transform="translate(726.235 719.868)"/>
				<path class="st7" d="M-16-497h26.2v14.8H-16z" transform="translate(765.976 719.868)"/>
				<path class="st8" d="M-16-497h11v12.2h-11z" transform="translate(767.483 721.136)"/>
				<path class="st8" d="M-16-497h11v12.2h-11z" transform="translate(779.68 721.136)"/>
				<g transform="translate(775.652 730.778)">
					<circle class="st7" cx="-15.1" cy="-496.1" r=".9" transform="translate(5.088)"/>
					<circle class="st7" cx="-15.1" cy="-496.1" r=".9"/>
				</g>
				<path class="st7" d="M-16-497h70.9v12.7H-16z" transform="translate(751.523 744.356)"/>
				<path class="st3" d="M-16-497h74.3v2.4H-16z" transform="translate(748.941 742.331)"/>
				<path class="st5" d="M141.4-497c.1 2.9-2.2 5.3-5.1 5.3H-10.9c-2.9-.1-5.2-2.4-5.1-5.3h157.4z" transform="translate(723.06 606.957)"/>
				<path class="st5" d="M141.4-497c.1 2.9-2.2 5.3-5.1 5.3H-10.9c-2.9-.1-5.2-2.4-5.1-5.3h157.4z" transform="translate(723.06 707.083)"/>
				<path class="st7" d="M-13.7-497c-1.9 0-2.3.9-2.3 2.3s.8 3.5 2.6 3.5 2.1-3.1 2.1-4-.6-1.8-2.4-1.8z" transform="translate(829.035 628.124)"/>
				<path class="st7" d="M-15.5-497l.6 1.2c-.3.2-.8.2-1.1.1" transform="translate(832.901 630.839)"/>
				<path class="st7" d="M-14.5-496.5c-.8-.1-1.5 1.6-1.3 2.7s.7 1.7 0 2 .8 1.3 1.8.6.8-2.1 1.6-2.3 2.4-.6 2.6-1.7-.1-1.9-1.3-1.7c-1.1.2-2.3.3-3.4.4z" transform="translate(828.332 627.441)"/>
				<path class="st7" d="M-11.3-497c-2.2.3-4.3 1.6-4.7 6-.4 4.4 2.4 13.4 2.4 16.2s2.4 2.1 2.4 2.1 3.7-15 2.8-19-.3-5.6-2.9-5.3z" transform="translate(827.071 633.053)"/>
				<g>
					<path class="st7" d="M-13.6-497c1.9 0 2.3.9 2.3 2.3s-.8 3.5-2.6 3.5-2.1-3.1-2.1-4 .6-1.8 2.4-1.8z" transform="translate(854.152 628.124)"/>
					<path class="st7" d="M-15.4-497l-.6 1.2c.3.2.8.2 1.1.1" transform="translate(853.877 630.839)"/>
					<path class="st7" d="M-11.2-496.5c.8-.1 1.5 1.6 1.3 2.7s-.7 1.7 0 2-.8 1.3-1.8.6-.8-2.1-1.6-2.3-2.4-.6-2.6-1.7.1-1.9 1.3-1.7c1.1.2 2.2.3 3.4.4z" transform="translate(853.28 627.441)"/>
					<path class="st7" d="M-13.1-497c2.2.3 4.3 1.6 4.7 6 .4 4.4-2.4 13.4-2.4 16.2s-2.4 2.1-2.4 2.1-3.7-15-2.8-19 .4-5.6 2.9-5.3z" transform="translate(853.128 633.053)"/>
				</g>
				<g>
					<path class="st7" d="M-13.6-497c1.9 0 2.3.9 2.3 2.3s-.8 3.5-2.6 3.5-2.1-3.1-2.1-4 .6-1.8 2.4-1.8z" transform="translate(844.503 631.522)"/>
					<path class="st7" d="M-15.4-497l-.6 1.2c.3.2.8.2 1.1.1" transform="translate(844.228 634.237)"/>
					<path class="st7" d="M-11.2-496.5c.8-.1 1.5 1.6 1.3 2.7s-.7 1.7 0 2-.8 1.3-1.8.6-.8-2.1-1.6-2.3-2.4-.6-2.6-1.7.1-1.9 1.3-1.7c1.1.2 2.2.3 3.4.4z" transform="translate(843.631 630.839)"/>
					<path class="st7" d="M-13.1-497c2.2.3 4.3 1.6 4.7 6 .4 4.4-2.4 10.1-2.4 12.8s-2.4 2.1-2.4 2.1-3.7-11.6-2.8-15.6.4-5.6 2.9-5.3z" transform="translate(843.479 636.451)"/>
				</g>
				<g>
					<path class="st7" d="M-13.6-497c1.9 0 2.3.9 2.3 2.3s-.8 3.5-2.6 3.5-2.1-3.1-2.1-4c.1-.8.6-1.8 2.4-1.8z" transform="translate(854.612 731.215)"/>
					<path class="st7" d="M-15.4-497l-.6 1.2c.3.2.8.2 1.1.1" transform="translate(854.337 733.93)"/>
					<path class="st7" d="M-11.2-496.5c.8-.1 1.5 1.6 1.3 2.7s-.7 1.7 0 2-.8 1.3-1.8.6-.8-2.1-1.6-2.3-2.4-.6-2.6-1.7c-.2-1.1.1-1.9 1.3-1.7 1.1.2 2.2.3 3.4.4z" transform="translate(853.74 730.532)"/>
					<path class="st7" d="M-13.1-497c2.2.3 4.3 1.6 4.7 6s-2.4 10.1-2.4 12.8-2.4 2.1-2.4 2.1-3.7-11.6-2.8-15.6c1.1-4 .4-5.6 2.9-5.3z" transform="translate(855.063 736.144)"/>
				</g>
				<g>
					<path class="st7" d="M-13.6-497c1.9 0 2.3.9 2.3 2.3s-.8 3.5-2.6 3.5-2.1-3.1-2.1-4c.1-.8.6-1.8 2.4-1.8z" transform="translate(782.378 677.501)"/>
					<path class="st7" d="M-15.4-497l-.6 1.2c.3.2.8.2 1.1.1" transform="translate(782.103 680.216)"/>
					<path class="st7" d="M-11.2-496.5c.8-.1 1.5 1.6 1.3 2.7s-.7 1.7 0 2-.8 1.3-1.8.6-.8-2.1-1.6-2.3-2.4-.6-2.6-1.7c-.2-1.1.1-1.9 1.3-1.7 1.1.2 2.2.3 3.4.4z" transform="translate(781.506 676.818)"/>
					<path class="st7" d="M-13.1-497c2.2.3 4.3 1.6 4.7 6s-2.4 13.5-2.4 16.2-2.4 2.1-2.4 2.1-3.7-15-2.8-19c1.1-4 .4-5.6 2.9-5.3z" transform="translate(781.354 682.43)"/>
					<g>
						<path class="st7" d="M17.7-479.3H-16l1.2-17.7 5.2 6.7 5.2 2.8 11.7-.2 10.4.2v8.2z" transform="translate(741.619 689.409)"/>
						<path class="st7" d="M18.6-485.1c-.1 0-7.9-.9-11.4-.9-1.9 0-4 0-6 .1s-4 .1-5.7.1c-2.4 0-4.9-2-6.6-3.7-1.9-1.9-3.5-4-4.8-6.4l2-1c1.8 3.5 6.7 8.9 9.4 8.9 1.7 0 3.6 0 5.6-.1 2.1 0 4.2-.1 6.1-.1 3.7 0 11.4.9 11.7 1l-.3 2.1z" transform="translate(741.804 688.904)"/>
						<path class="st7" d="M-16-497h3.2v13.7H-16z" transform="translate(775.296 693.35)"/>
						<path class="st7" d="M-16-497h3.3v19.4H-16z" transform="translate(740.538 687.663)"/>
						<g>
							<path class="st7" d="M1.9-488H-16v-5.3c0-2 1.7-3.7 3.7-3.7h10.5c2 0 3.7 1.7 3.7 3.7v5.3zm-16.5-1.4H.5v-3.9c0-1.3-1-2.3-2.3-2.3h-10.5c-1.3 0-2.3 1-2.3 2.3v3.9z" transform="translate(751.485 692.673)"/>
							<path class="st7" d="M-16-497h1.4v8H-16z" transform="translate(756.752 693.351)"/>
							<path class="st7" d="M-16-497h1.4v8H-16z" transform="translate(762.731 693.351)"/>
						</g>
					</g>
				</g>
				<g>
					<path class="st7" d="M17.7-479.3H-16l1.2-17.7 5.2 6.7 5.2 2.8 11.7-.2 10.4.2v8.2z" transform="translate(734.847 589.713)"/>
					<path class="st3" d="M18.6-485.1c-.1 0-7.9-.9-11.4-.9-1.9 0-4 0-6 .1s-4 .1-5.7.1c-2.4 0-4.9-2-6.6-3.7-1.9-1.9-3.5-4-4.8-6.4l2-1c1.8 3.5 6.7 8.9 9.4 8.9 1.7 0 3.6 0 5.6-.1 2.1 0 4.2-.1 6.1-.1 3.7 0 11.4.9 11.7 1l-.3 2.1z" transform="translate(735.032 589.208)"/>
					<path class="st7" d="M-16-497h3.2v13.7H-16z" transform="translate(768.524 593.654)"/>
					<path class="st7" d="M-16-497h3.3v19.4H-16z" transform="translate(733.766 587.967)"/>
					<g>
						<path class="st7" d="M1.9-488H-16v-5.3c0-2 1.7-3.7 3.7-3.7h10.5c2 0 3.7 1.7 3.7 3.7v5.3zm-16.5-1.4H.5v-3.9c0-1.3-1-2.3-2.3-2.3h-10.5c-1.3 0-2.3 1-2.3 2.3v3.9z" transform="translate(744.713 592.976)"/>
						<path class="st7" d="M-16-497h1.4v8H-16z" transform="translate(749.981 593.654)"/>
						<path class="st7" d="M-16-497h1.4v8H-16z" transform="translate(755.959 593.654)"/>
					</g>
				</g>
				<g>
					<path class="st7" d="M17.7-479.3H-16l1.2-17.7 5.2 6.7 5.2 2.8 11.7-.2 10.4.2v8.2z" transform="translate(734.847 639.346)"/>
					<path class="st3" d="M18.6-485.1c-.1 0-7.9-.9-11.4-.9-1.9 0-4 0-6 .1s-4 .1-5.7.1c-2.4 0-4.9-2-6.6-3.7-1.9-1.9-3.5-4-4.8-6.4l2-1c1.8 3.5 6.7 8.9 9.4 8.9 1.7 0 3.6 0 5.6-.1 2.1 0 4.2-.1 6.1-.1 3.7 0 11.4.9 11.7 1l-.3 2.1z" transform="translate(735.032 638.841)"/>
					<path class="st7" d="M-16-497h3.2v13.7H-16z" transform="translate(768.524 643.287)"/>
					<path class="st7" d="M-16-497h3.3v19.4H-16z" transform="translate(733.766 637.6)"/>
					<g>
						<path class="st7" d="M1.9-488H-16v-5.3c0-2 1.7-3.7 3.7-3.7h10.5c2 0 3.7 1.7 3.7 3.7v5.3zm-16.5-1.4H.5v-3.9c0-1.3-1-2.3-2.3-2.3h-10.5c-1.3 0-2.3 1-2.3 2.3v3.9z" transform="translate(744.713 642.609)"/>
						<path class="st7" d="M-16-497h1.4v8H-16z" transform="translate(749.981 643.287)"/>
						<path class="st7" d="M-16-497h1.4v8H-16z" transform="translate(755.959 643.287)"/>
					</g>
				</g>
				<g>
					<path class="st7" d="M-2.8-436c8.2 0 17-10.7 17-18S-1-497-1-497s-16.3 32.5-14.9 43 6.4 18 13.1 18z" transform="translate(857.793 743.411)"/>
					<path class="st7" d="M6.5-495c3.7 1.9 3.5 6.3 1.2 9.5s-3.6 4.4-4.5 6.6-.5 2.9-1 6.5-7.5 2.4-9.4 6.5-2.2 2.3-4.2 1.5-1.2-3.6-.8-5-5.6-8.4-3.2-11 5.9-2.6 6.2-4.8-1.1-5.6.5-7.9 7-6.2 15.2-1.9z" transform="translate(875.658 771.074)"/>
					<path class="st9" d="M-4-496.9c-5 .4-10.4 4.9-9.7 9.6s2.8 3.3 2.6 6.1-3.2 3.4-4.6 7.5 6.7 6.8 6.5 12.3 1 3.7 3.7 4 3.3-3.2 3.6-4.9 10.7-5.8 9.6-10S0-479 1-481.5s6.5-4 6.1-7.4-3.8-8.7-11.1-8z" transform="translate(868.855 763.449)"/>
					<path class="st10" d="M-13-483.7c-3.5-3.4-4.4-9.4 0-9s4.5 1.4 9.1 2.2 7.1-6.2 14.8-6.5 4 5.5 7.4 6 4.1-1.6 7.9-.9-1.4 8.1-1.4 8.1l-37.8.1z" transform="translate(853.74 794.52)"/>
				</g>
				<g>
					<path class="st7" d="M-13.6-497c1.9 0 2.3.9 2.3 2.3s-.8 3.5-2.6 3.5-2.1-3.1-2.1-4c.1-.8.6-1.8 2.4-1.8z" transform="translate(840.675 735.598)"/>
					<path class="st7" d="M-15.4-497l-.6 1.2c.3.2.8.2 1.1.1" transform="translate(840.4 738.313)"/>
					<path class="st7" d="M-11.2-496.5c.8-.1 1.5 1.6 1.3 2.7s-.7 1.7 0 2-.8 1.3-1.8.6-.8-2.1-1.6-2.3-2.4-.6-2.6-1.7c-.2-1.1.1-1.9 1.3-1.7 1.1.2 2.2.3 3.4.4z" transform="translate(839.803 734.915)"/>
					<path class="st7" d="M-13.3-491.7c.8-4 .2-5.6 2.8-5.3 2.2.3 4.8 1.6 4.7 6-.1 1.6-.5 3.1-1.2 4.6l-5.7.4.9-.7-3 5.1-1.3-.2 1.7-6.9 2.7-.7v1.8c.2-.1-1.8-2.7-1.6-4.1z" transform="translate(837.059 740.526)"/>
					<circle class="st7" cx="-10.9" cy="-491.9" r="5.1" transform="translate(840.663 746.823)"/>
				</g>
				<g>
					<path class="st7" d="M-9.1-497l-3.9 4.3-3 .3.6.8 3.7.1 5-4.2-2.4-1.3z" transform="translate(849.287 738.438)"/>
				</g>
				<g>
					<path class="st7" d="M-16-489.5l1.2-7.5h3.1l-.8 1.7-1.2-.4-1.1 7.1-1.2-.9z" transform="translate(846.94 741.848)"/>
				</g>
				<g>
					<path class="st9" d="M-14.1-493.3c1-.5 4.5-1.1 5.7-.6s2.1.9 3 .6-2.6-3.5-4.3-3.7-4.4 2.2-5.9 2.3 1.5 1.4 1.5 1.4z" transform="translate(860.328 860.166)"/>
					<path class="st9" d="M-9-496.3c-.3 1.2-.5 2.5-.6 3.7.1.5-3.6 2.4-5.9 2.5s3.3-5.7 4.1-6.6 2.4.4 2.4.4z" transform="translate(839.83 875.221)"/>
					<path class="st10" d="M-13.8-496.6c-1.6 1-2.4 12.1-2.1 17 .3 4.9 4.8 7 9.8 6.4s11.8-6.5 11.8-6.5l-2.4-2.9s-6.8 2.3-8.4.4 5.5-10.4 4.4-12.1-11.1-3.6-13.1-2.3z" transform="translate(843.119 846.706)"/>
					<path class="st10" d="M.2-497c.6 3.3-6.1 13.3-7.2 15.5s-4.3 10.4-4.6 11.5c-1.5.6-3.1.4-4.4-.6 0 0 1.7-12.6 2.1-15.4s3.8-10.4 3.8-10.4" transform="translate(843.191 849.475)"/>
					<path class="st11" d="M-10.7-497c2.3 1.5 3.7 6.3 3.1 7.8s-4.2 4.2-4.2 4.2-.5 2-1.6 2.3-2.9-.5-2.5-1.3c.4-.8 2.6-1.6 3.1-2s2.5-4.7-2.1-7.4c.7-1.6 4.2-3.6 4.2-3.6z" transform="translate(859.455 838.583)"/>
					<path class="st12" d="M-.8-497c-3.2.3-6.4 1.2-9.2 2.8-1.3.8-6 7.4-6 7.4s1.1 3.2 3.3 3.7c1.3.3 2.5.4 3.8.4L2-493.1-.8-497z" transform="translate(838.506 827.544)"/>
					<path class="st12" d="M-12.9-497l8.4 7.8s-.9 4.6-3.4 6c-1.1.6-2.3 1.2-3.5 1.6l-4.7-8.9" transform="translate(854.813 827.979)"/>
					<path class="st12" d="M-13.3-492.1s0 9-.5 10.6-2.1 5.3-2.1 5.3c1 .5 2 .7 3.1.6 2.1.2 4.2.5 6.3.9 1.8.2 6 1.1 6 1.1 0-1.3-.2-2.7-.5-4-.4-1.5.2-13-.5-14.5s-.1-4.6-2.7-4.9-8.2 2-9.1 4.9z" transform="translate(844.495 826.865)"/>
					<path class="st11" d="M-16-497l.8 3.8v.5s.2.5 1.6.4 2.8-.3 2.4-1-2-2-2.6-2.9c-.3-.5-.5-.8-.5-.8H-16z" transform="translate(850.638 824.796)"/>
					<g>
						<path class="st9" d="M-16-497l.8 3.8c.8-.5.9-2.1 1.4-3-.3-.5-.5-.8-.5-.8H-16z" transform="translate(850.638 824.796)"/>
					</g>
					<g>
						<path class="st11" d="M-8.4-481.2c-2.6 0-4.6-9.9-5.9-11.2s-2.7-4.7-.8-4.6 2.3 3.3 2.9 4.1 4.9 6.7 5.2 9.5-1.4 2.2-1.4 2.2z" transform="translate(832.966 826.288)"/>
					</g>
					<g>
						<path class="st11" d="M-15.6-489.4c.5 1.9 1.6 3.5 2.6 3.5 2.8 0 6.8-4.2 6.6-5.6s-1.1-5.7-5.9-5.6c-1.3 0-2.6.7-3.2 1.9-.6 2-.7 4-.1 5.8z" transform="translate(845.462 816.594)"/>
						<path class="st13" d="M-7.1-497c2.9 0 5.7 1.9 5.7 5.1 0 1.4-.9 4.5-2.7 4.5-1.7 0-1.1-4.6-3.4-4.6-3.2 0-4.1 2.5-5.6 2.5s-2.8-2.5-2.8-3.9.5-3.7 1.7-3.7 1.5 1.1 2.6 1.1 1-1 4.5-1z" transform="translate(842.514 814.865)"/>
						<path class="st11" d="M-16-495.8c0-.5.4-1 .9-1.1.9-.3 1.3 2.3.4 2.5-.4.2-.8 0-.9-.4 0-.1-.1-.2-.1-.3" transform="translate(852.242 820.449)"/>
						<path class="st11" d="M-15.7-497s1.2 1.7 1.1 2-1.5.6-1.5.6l.4-2.6z" transform="translate(845.678 823.469)"/>
					</g>
				</g>
				<g>
					<path class="st7" d="M-16-497H7.3v21.1H-16z" transform="translate(835.509 685.977)"/>
				</g>
				<g>
					<path class="st7" d="M-3.8-440.9c7.5 0 15.7-9.9 15.7-16.5s-14-39.6-14-39.6-15 29.9-13.7 39.6 5.8 16.5 12 16.5z" transform="translate(716.853 751.695)"/>
					<path class="st7" d="M-13.1-495c-3.7 1.9-3.5 6.3-1.2 9.5s3.6 4.4 4.5 6.6.5 2.9 1 6.5 7.5 2.4 9.4 6.5 2.2 2.3 4.2 1.5 1.2-3.6.8-5 5.6-8.4 3.2-11-5.9-2.6-6.2-4.8 1.1-5.6-.5-7.9-7.1-6.2-15.2-1.9z" transform="translate(700.762 773.009)"/>
					<path class="st9" d="M-4.3-496.9c5 .4 10.4 4.9 9.7 9.6s-2.8 3.3-2.6 6.1 3.2 3.4 4.6 7.5-6.7 6.8-6.5 12.3-1 3.7-3.7 4-3.3-3.2-3.6-4.9-10.7-5.8-9.6-10 7.6-6.6 6.6-9.1-6.5-4-6.1-7.4 3.8-8.8 11.2-8.1z" transform="translate(709.294 765.384)"/>
					<path class="st10" d="M30.9-479.2c4.1-4.6 5.1-12.6 0-12s-5.2 1.9-10.5 2.9-8.3-8.3-17.1-8.7-4.6 7.4-8.6 8.1-4.7-2.2-9.1-1.2 1.6 10.9 1.6 10.9h43.7z" transform="translate(711.9 789.998)"/>
				</g>
				<g>
					<path class="st14" d="M-16-497h38v2h-38z" transform="translate(770.622 805.773)"/>
				</g>
				<g>
					<path class="st9" d="M-16-497h60v44.2h-60z" transform="translate(771.777 763.585)"/>
					<path class="st7" d="M-16-497h38v37.1h-38z" transform="translate(782.747 770.667)"/>
					<path class="st15" d="M-16-497h2.9v10H-16z" transform="translate(809.817 777.952)"/>
					<path class="st15" d="M-16-497h10v2.9h-10z" transform="translate(806.243 781.526)"/>
					<path class="st15" d="M-16-497h2.9v10H-16z" transform="translate(790.804 777.952)"/>
					<path class="st15" d="M-16-497h10v2.9h-10z" transform="translate(787.23 781.526)"/>
					<g>
						<path class="st9" d="M-16-497h2.9v7.5H-16z" transform="translate(796.753 791.706)"/>
						<path class="st9" d="M-16-497h2.9v7.5H-16z" transform="translate(803.883 791.706)"/>
					</g>
					<g>
						<path class="st15" d="M-16-497h.5v37.1h-.5z" transform="translate(801.534 770.667)"/>
					</g>
				</g>
				<g>
					<path class="st5" d="M141.4-497c.1 2.9-2.2 5.3-5.1 5.3H-10.9c-2.9-.1-5.2-2.4-5.1-5.3h157.4z" transform="translate(723.06 657.02)"/>
				</g>
				<g>
					<path class="st8" d="M-16-497h36v22.9h-36z" transform="translate(441.594 768.549)"/>
					<path class="st7" d="M-16-497H3.1v6.8H-16z" transform="translate(610.756 838.235)"/>
					<path class="st7" d="M-16-497H3.1v6.8H-16z" transform="translate(392.327 845.631)"/>
					<path class="st1" d="M-16-497h294.7v141.4H-16z" transform="translate(360.41 716.437)"/>
					<path class="st8" d="M-16-497h13.3v13.1H-16z" transform="translate(429.686 802.983)"/>
					<path class="st7" d="M-11.6-497c3.4 0 4.1 1.7 4.1 4.2s-1.4 6.4-4.8 6.4-3.8-5.5-3.7-7.2 1-3.4 4.4-3.4z" transform="translate(513.557 789.38)"/>
					<path class="st7" d="M-14.9-497c-.4.7-.8 1.4-1.1 2.2.6.4 1.4.4 2 .1" transform="translate(513.061 794.287)"/>
					<path class="st7" d="M-7.4-496.1c1.5-.2 2.7 2.9 2.3 4.9s-1.2 3.1.1 3.6-1.5 2.3-3.2 1-1.4-3.8-2.9-4.2-4.4-1-4.7-3 .3-3.4 2.3-3c2 .3 4.1.6 6.1.7z" transform="translate(511.981 788.146)"/>
					<path class="st7" d="M-10.7-496.9c4 .5 7.7 2.9 8.5 10.8s-4.3 24.3-4.3 29.3-4.3 3.7-4.3 3.7-6.7-27.1-5-34.3.5-10.1 5.1-9.5z" transform="translate(511.707 798.289)"/>
					<path class="st16" d="M-16-497h294.7v27.3H-16z" transform="translate(360.41 831.188)"/>
					<path class="st7" d="M-16-497h76v6.7h-76z" transform="translate(502.95 814.097)"/>
					<path class="st7" d="M-16-497h76v14.1h-76z" transform="translate(502.95 825.37)"/>
					<path class="st8" d="M-16-497H9.8v4.7H-16z" transform="translate(513.217 820.831)"/>
					<path class="st7" d="M-16-497h70.1v18.7H-16z" transform="translate(505.202 817.202)"/>
					<path class="st7" d="M-9.6-497c4.9 0 5.9 2.5 5.9 6.1s-2 9.4-7 9.4-5.6-8-5.4-10.4 1.6-5.1 6.5-5.1z" transform="translate(611.405 804.382)"/>
					<path class="st7" d="M-14.4-497c-.6 1-1.1 2.1-1.6 3.2 0 0 1.7 1 2.9.2" transform="translate(610.681 811.54)"/>
					<path class="st7" d="M-3.4-495.7c2.2-.2 4 4.3 3.3 7.2s-1.8 4.5.1 5.2-2.2 3.4-4.7 1.5-2.1-5.6-4.3-6.2-6.4-1.5-6.9-4.4.4-5 3.4-4.4 7.7 1.2 9.1 1.1z" transform="translate(609.106 802.582)"/>
					<path class="st7" d="M-8.8-483c2.2-10.6.6-14.7 7.4-13.9 5.9.7 12.6 4.1 12.4 15.7-.1 5.7-3.2 12.1-3.2 12.1l-15 1 2.3-2-7.8 13.3-3.3-.4 4.5-18.2 7.2-2v4.8c0 .1-5.2-6.8-4.5-10.4z" transform="translate(601.872 817.375)"/>
					<path class="st7" d="M-13.4-497h12.3l-4.2 23.8H-16l2.6-23.8z" transform="translate(623.802 820.955)"/>
					<g>
						<path class="st7" d="M-10-497c-4.9 0-6 2.5-6 6.1s2 9.4 7 9.4 5.6-8 5.4-10.4-1.5-5.1-6.4-5.1z" transform="translate(396.95 803.199)"/>
						<path class="st7" d="M-14.7-497c.6 1 1.1 2.1 1.6 3.2 0 0-1.7 1-2.9.2" transform="translate(407.142 810.357)"/>
						<path class="st7" d="M-12-495.7c-2.2-.2-4 4.3-3.3 7.2s1.8 4.5-.1 5.2 2.2 3.4 4.7 1.5 2.1-5.6 4.3-6.2 6.4-1.5 6.9-4.4-.4-5-3.4-4.4-7.7 1.2-9.1 1.1z" transform="translate(395.098 801.399)"/>
						<path class="st7" d="M3.8-483c-2.2-10.6-.6-14.7-7.4-13.9-5.9.7-12.6 4.1-12.4 15.7.1 5.7 3.2 12.1 3.2 12.1l15 1-2.3-2 7.8 13.3 3.3-.4-4.5-18.2-7.2-2v4.8c0 .1 5.2-6.8 4.5-10.4z" transform="translate(391.884 816.192)"/>
						<g>
							<path class="st7" d="M-3.7-497H-16l4.2 23.8h10.7L-3.7-497z" transform="translate(382.049 820.517)"/>
						</g>
					</g>
					<g>
						<path class="st8" d="M-16-497h13.3v13.1H-16z" transform="translate(429.686 768.106)"/>
					</g>
					<g>
						<path class="st8" d="M-16-497h13.3v13.1H-16z" transform="translate(429.686 785.544)"/>
					</g>
					<g>
						<path class="st8" d="M-16-497h27.5v53.1H-16z" transform="translate(461.547 778.1)"/>
					</g>
					<g transform="translate(494.334 791.337)">
						<circle class="st8" cx="-10" cy="-491" r="6"/>
					</g>
					<g>
						<path class="st16" d="M-16-497h27.5v12.5H-16z" transform="translate(461.547 822.511)"/>
					</g>
					<g>
						<path class="st6" d="M-16-497v152.8h116.6v-74.1h69.1v74.1h115V-497H-16zm96.6 138.4H2.4v-84.6h78.2v84.6zm185.7 0h-78.2v-84.6h78.2v84.6z" transform="translate(358.277 706.125)"/>
					</g>
					<g>
						<path class="st17" d="M-16-497h300.7v25.2H-16z" transform="translate(358.277 706.125)"/>
					</g>
					<g>
						<path class="st5" d="M-16-497h318v16.5H-16z" transform="translate(351.047 706.125)"/>
					</g>
					<g>
						<path class="st1" d="M-16-497h40.2v31.1H-16z" transform="translate(489.962 736.479)"/>
					</g>
					<g>
						<path class="st5" d="M-16-497h88.9v10H-16z" transform="translate(465.636 774.773)"/>
					</g>
					<g>
						<path class="st17" d="M-16-497h118.8v9.9H-16z" transform="translate(356.053 849.013)"/>
					</g>
					<g>
						<path class="st17" d="M-16-497h118.8v9.9H-16z" transform="translate(543.997 849.013)"/>
					</g>
					<g>
						<path fill="#686686" d="M-16-497h70.7v4.4H-16z" transform="translate(474.432 854.615)"/>
					</g>
					<g>
						<path class="st9" d="M-16-497h.9v74.6h-.9z" transform="translate(509.333 784.355)"/>
					</g>
					<g>
						<path transform="rotate(-45.001 1131.694 -574.046)" class="st19" d="M-23.8-477.5h55.6v.9h-55.6z"/>
						<path transform="rotate(-45.001 1156.72 -560.949)" class="st20" d="M-23.8-477.5h55.6v.9h-55.6z"/>
					</g>
					<g>
						<path transform="rotate(-45.001 1225.437 -805.85)" class="st19" d="M-23.8-477.5h55.6v.9h-55.6z"/>
						<path transform="rotate(-45.001 1250.464 -792.752)" class="st20" d="M-23.8-477.5h55.6v.9h-55.6z"/>
					</g>
					<g>
						<path class="st21" d="M-16-497h6.7v7.5H-16z" transform="translate(498.945 820.878)"/>
						<path class="st21" d="M-16-497h6.7v7.5H-16z" transform="translate(513.958 820.878)"/>
					</g>
					<g>
						<path class="st9" d="M-15.9-445c.3 2.6.9 5.2 1.7 7.7h32.5c1.3-2.4 2-5 2.2-7.7 0-4.7-5.3-19.2-10.2-31.8C6.1-487.6 2.1-497 2.1-497s-4 8.1-8.3 18.1c-5.2 12.1-10.6 27-9.7 33.9z" transform="translate(330.829 799.134)"/>
						<g class="st22">
							<path class="st15" d="M-15.9-463c.3 2.6.9 5.2 1.7 7.7h31.6c-.1-4.6-1.6-10.4-3.2-16.5-3.7-14.7-12.4-26.1-20.5-25.1-5.1 12-10.5 26.9-9.6 33.9z" transform="translate(330.829 817.158)"/>
						</g>
						<path class="st6" d="M-16-497h1.4v47.4H-16z" transform="translate(348.421 811.484)"/>
						<path class="st7" d="M-15.9-453.7c.2 1.4.4 2.8.8 4.1h28.8c.5-1.3.8-2.7.8-4.1C14.4-461-.9-497-.9-497s-1.6 3.2-3.8 7.9c-1.3 2.9-2.8 6.3-4.3 9.9-3.9 9.4-7.6 20.2-6.9 25.5z" transform="translate(345.87 811.484)"/>
						<g class="st22">
							<path class="st11" d="M-15.9-471.5c.2 1.4.4 2.8.8 4.1H7.6c1.5-2.5 2.1-5.9 1.4-10C7.5-484.9-1.8-496-9-497c-3.9 9.5-7.6 20.3-6.9 25.5z" transform="translate(345.87 829.248)"/>
						</g>
						<path class="st9" d="M-16-497h1.4v38.5H-16z" transform="translate(360.399 820.395)"/>
					</g>
					<g>
						<path class="st9" d="M20.4-445c-.3 2.6-.9 5.2-1.7 7.7h-32.6c-1.3-2.4-2-5-2.2-7.7 0-4.7 5.3-19.2 10.2-31.8 4.3-10.9 8.2-20.2 8.2-20.2s4 8.1 8.3 18.1c5.3 12.1 10.8 27 9.8 33.9z" transform="translate(646.1 799.134)"/>
						<g class="st22">
							<path class="st15" d="M17.3-463c-.3 2.6-.9 5.2-1.7 7.7H-16c.1-4.6 1.6-10.4 3.2-16.5 3.7-14.7 12.4-26.1 20.5-25.1 5.1 12 10.6 26.9 9.6 33.9z" transform="translate(649.204 817.158)"/>
						</g>
						<path class="st6" d="M-16-497h1.4v47.4H-16z" transform="translate(663.693 811.484)"/>
						<path class="st7" d="M14.3-453.7c-.2 1.4-.4 2.8-.8 4.1h-28.8c-.5-1.3-.8-2.7-.8-4.1C-16-461-.7-497-.7-497s1.6 3.2 3.8 7.9c1.3 2.9 2.8 6.3 4.3 9.9 3.9 9.4 7.6 20.2 6.9 25.5z" transform="translate(637.186 811.484)"/>
						<g class="st22">
							<path class="st11" d="M9.2-471.5c-.2 1.4-.4 2.8-.8 4.1h-22.7c-1.5-2.5-2.1-5.9-1.4-10C-14.3-485-5-496 2.3-497c3.9 9.5 7.6 20.3 6.9 25.5z" transform="translate(642.29 829.248)"/>
						</g>
						<path class="st9" d="M-16-497h1.4v38.5H-16z" transform="translate(651.715 820.395)"/>
					</g>
				</g>
				<g class="zoom-right">
					<path class="st4" d="M105.2-436c0 40.5-75.4 62.6-91.6 62.6S-16-399.8-16-436s14.8-61 31.1-61 90.1 20.5 90.1 61z" transform="translate(658.169 526.656)"/>
					<g transform="translate(654.369 522.856)">
						<defs>
							<path id="SVGID_1_" d="M105.2-436c0 40.5-75.4 62.6-91.6 62.6S-16-399.8-16-436s14.8-61 31.1-61 90.1 20.5 90.1 61z"/>
						</defs>
						<clipPath id="SVGID_2_">
							<use xlink:href="#SVGID_1_" overflow="visible"/>
						</clipPath>
						<g clip-path="url(#SVGID_2_)">
							<path fill="#9391a9" d="M-16-497h168.1v28.8H-16z" transform="translate(-29.452 78.838)"/>
							<path class="st9" d="M-16-497h168.1v100.3H-16z" transform="translate(-31.799 -15.745)"/>
							<path class="st13" d="M57.2-473.8H-16v-1.2c0-12.1 9.9-22 22-22h51.2v23.2zm-70.9-2.2h68.6v-18.7H6c-10.5 0-19.1 8.2-19.7 18.7z" transform="translate(33.104 90.454)"/>
							<path class="st4" d="M-8.6-497v83.8H-16v-82.3l7.4-1.5z" transform="translate(33.63 21.023)"/>
							<path class="st14" d="M-8.6-497v27l-7.4 1v-28h7.4z" transform="translate(33.63 33.059)"/>
							<path class="st14" d="M-8.6-497v11.7l-7.4 1V-496l7.4-1z" transform="translate(33.63 62.449)"/>
							<path class="st4" d="M34.7-457.1l-50.7 6.6.5-39.9 50.7-6.6-.5 39.9z" transform="translate(11.758 16.388)"/>
							<path class="st4" d="M22.6-485.2l-38.6 5 .4-11.8 38.6-5-.4 11.8z" transform="translate(18.275 59.306)"/>
							<g>
								<g transform="translate(16.199 19.858)">
									<defs>
										<path id="SVGID_3_" d="M26.9-463.1l-42.9 5.6.4-34 42.9-5.5z"/>
									</defs>
									<clipPath id="SVGID_4_">
										<use xlink:href="#SVGID_3_" overflow="visible"/>
									</clipPath>
									<g clip-path="url(#SVGID_4_)">
										<path class="st9" d="M54-446.3l-70 9.1.6-50.7 70-9.1-.6 50.7z" transform="translate(-15.001 -9.543)"/>
										<path class="st5" d="M-3.7-496.9c-4.9.6-8.8 2.5-10.3 7.5s-3.5 10.9-.4 13.7c3.1 2.9 15.6 10.8 19.3 1 2.1-5.4-2-10.1-2-13.8s.2-9.3-6.6-8.4z" transform="translate(10.347 7.525)"/>
										<path class="st26" d="M-16-476.8c1.9-.3 4.8-3.5 6.1-8.2 2.4-8.4 1.7-9.1 3.1-9.4 2.2-.4 3.8-.8 4-1.5.2-.7-.6-1.4-4.2-1.1-1 .1-1.9.6-2.4 1.3-2.3 2.1-4 5.4-6.2 8.8" transform="translate(25.531 26.956)"/>
										<path class="st17" d="M-8.4-497s2 3.1 4 4.2c1.6 2-3.4 13.6-5.4 13.6-7.5 0-7.3-5.7-3.7-11.7 1.4-2.2 3.2-4.3 5.1-6.1z" transform="translate(21.929 31.684)"/>
										<path class="st5" d="M-14.7-497l-1.3 11.4 8.2 1.2 1.6-11.6-8.5-1z" transform="translate(34.558 23.381)"/>
										<path class="st7" d="M-14.6-497l-1.4 9.8 7.9 1 1.5-10-8-.8z" transform="translate(34.437 24.519)"/>
										<path class="st26" d="M-16-495.8c.6-.4 1.2-.7 1.9-1.1.6-.1 1.2-.2 1.7-.2.1.3-.1.6-.4.7h-.1c-.6.1-1.3.2-1.3.6 0 .4-1.7.5-1.7.5" transform="translate(33.475 26.117)"/>
										<path d="M1.6-493.5l-.6 9.4-16.2 4.1-.8-17 17.6 3.5z" fill="#342f89" transform="translate(11.278 48.191)"/>
										<path class="st26" d="M-10.8-494.9c.4-1.8-3.6-2.6-3.7-1.7-.3 1.7-.8 3.4-1.5 4.9 0 0 2.7 2 5.2.4v-3.6z" transform="translate(17.853 18.947)"/>
										<path class="st17" d="M2-487.3s1.2 17 .1 22.4-17.3 4.4-17.3 4.4-1.8-21.1.1-26.8c-.4-4.8 5.8-9.7 5.8-9.7l3.8.3 2.3-.3c2.3 2.9 4.1 6.2 5.2 9.7z" transform="translate(10.7 23.582)"/>
										<path class="st26" d="M-15.8-494.7s-.3-1.4-.1-1.7c.5-.3 1-.5 1.6-.6.3-.2-.4 1.8-1.5 2.3z" transform="translate(20.765 30.831)"/>
										<path class="st16" d="M-16-496.8c-.1.4.3.5.5.5s.6-.7.6-.7l-1.1.2z" transform="translate(21.013 31.347)"/>
										<path transform="rotate(-6.486 268.128 -653.882)" class="st13" d="M-16-496.6h6.2v.5H-16z"/>
										<path class="st11" d="M-13.4-490.2c-1 0-1.8-1.1-2.3-2.9-.4-1.4-.6-3.6.2-3.9l.2.4c-.3.1-.4 1.6.1 3.4.2.6.8 2.7 1.9 2.6 1.8-.2 2.7-.2 2.9-.2.3-.2 1.6-1.5 0-5.9l.4-.2c1.9 5.2-.2 6.4-.3 6.4h-.2c-1 0-2 .1-2.9.2.1.1.1.1 0 .1z" transform="translate(17.42 23.2)"/>
										<path class="st26" d="M-14-497c1.9 2.4 2 4.2 2 4.6 0 .6-.6 1.1-1.2 1-.2 0-.4-.1-.5-.2-1.3-.5-2.3-3.3-2.3-3.3l2-2.1z" transform="translate(11.963 56.735)"/>
										<path class="st17" d="M-.4-497s-6.3 3-8 4.8c-1.7 1.8-6.8 16.3-7.6 19.4s9.4 13.6 9.9 13.6 4.9-5.7 4.5-6.6c-.4-.8-4.9-5.3-4.8-6.6s4.4-12.9 4.1-14.9S-.4-497-.4-497z" transform="translate(1.855 23.582)"/>
										<path class="st26" d="M-15.6-478.1c1.9.2 5.5-2.1 8.1-6.2 4.6-7.4 5.3-8.9 6.2-9.9 1.4-1.7 1.9-1.3 1.6-2-.3-.7-.5-1.6-3.3.8-5.1 4.4-10.8 5.4-13 8.3" transform="translate(7.531 31.504)"/>
										<path class="st17" d="M-5-497s1.1 3.5 2.7 5.1c1 2.3-6.9 12.2-8.8 11.6-7.2-2-5.5-7.5-.4-12.2 2-1.7 4.2-3.2 6.5-4.5z" transform="translate(3.927 34.981)"/>
										<g>
											<path class="st26" d="M-6.8-491c.1-2.2-.4-6.5-3.4-6-4.7.7-5.3 4-4.9 6.9-.3 0-.7.1-.8.4-.3.8 0 1.8.8 2.2.4.1.6 0 .7-.1.1.2.1.3.2.4.1.3.2.5.4.7 1.5 2.1 4.9 2.4 6.2 1.9 1.1-.1.7-4.2.8-6.4z" transform="translate(18.081 8.698)"/>
											<path class="st4" d="M-15.9-497h.3l.4 1.2s-.5.1-.7-.1c-.2-.1 0-1.1 0-1.1z" transform="translate(18.936 18.122)"/>
											<path class="st13" d="M-13.7-495.7c0 .1-.2.2-.5.2-.7-.1-1.3-.4-1.8-.8.4.2 1.9-.6 2.2-.6.3 0 .3.1.3.2-.1.4-.2.3-.3.5-.1.2.2.2.1.5z" transform="translate(25.131 18.722)"/>
											<path d="M-16-496.7h.1c.5 0 .9-.1 1.4-.2 0 .2 0 .3-.1.5-.3.1-.7 0-1 0-.1-.2-.3-.3-.4-.3z" fill="#fdeef6" transform="translate(25.666 19.241)"/>
											<path d="M-15.8-494.2c.6.3 1.7-.3 1.5-.7-.3-.5-1.1-2-1.5-2.1-.4-.1 0 2.8 0 2.8z" fill="#aba5d2" transform="translate(26.913 15.166)"/>
											<path class="st5" d="M-7.5-497c-6 .8-5-.4-7.6 3.2s1 4.5 3.6 5.2c2.6.7 4.5-5.3 4.9-6.8s-.9-1.6-.9-1.6z" transform="translate(16.47 7.786)"/>
											<g>
												<path class="st5" d="M-9.4-497c-2.4.3-4.4 1.8-5.4 4-.9 2.4-1.3 5-1.1 7.6 4.3-1 4.7-6.9 5.7-7.5.9-.6 3.1-2.1.8-4.1z" transform="translate(19.618 8.343)"/>
											</g>
										</g>
										<g>
											<path class="st5" d="M-15.7-488.7s-1.7-4.2 3-6.8c3-1.7 10.2-2 11.4-.4 1.2 1.6-5.6 5.1-5.6 5.1l-8.8 2.1z" transform="translate(12.089 7.156)"/>
										</g>
										<g>
											<path class="st13" d="M-14.1-496.7l-.2 2.2s-1.3.2-1.7-.7l.6-1.8c.4.2.9.3 1.3.3z" transform="translate(11.508 14.994)"/>
										</g>
									</g>
								</g>
							</g>
							<g transform="translate(32.35 10.626)">
								<circle class="st4" cx="-12.8" cy="-493.8" r="3.2"/>
								<path class="st4" d="M-9.3-494.8l-4-2.2-2.7 5.7 3.3 1.8 3.4-5.3z" transform="translate(1.649 .26)"/>
								<path class="st7" d="M-12.4-494.5l-.2.4-3.3-1.8 1.4-1.1 2.1 2.5z" transform="translate(1.648 4.907)"/>
								<path class="st7" d="M-16-497c.1 0 3 2.9 3 2.9l-.1 3.3-2.8-1.5-.1-4.7z" transform="translate(6.381 2.194)"/>
								<circle class="st17" cx="-12.8" cy="-493.8" r="3.2" transform="translate(3.079 1.692)"/>
								<circle class="st5" cx="-14" cy="-495" r="2" transform="translate(4.273 2.886)"/>
								<circle class="st14" cx="-15.1" cy="-496.1" r=".9" transform="translate(4.402 3.015)"/>
							</g>
							<g class="st32">
								<path class="st1" d="M9.3-497l-15.8 35.9-9.5 1.2 15.8-35.9 9.5-1.2z" transform="translate(16.199 22.188)"/>
								<path class="st1" d="M2.5-497v1.1l-15.3 34.8-3.2.4 15.8-35.9 2.7-.4z" transform="translate(40.974 19.858)"/>
								<path class="st1" d="M2.5-497v1.1l-15.3 34.8-3.2.4 15.8-35.9 2.7-.4z" transform="translate(40.974 19.858)"/>
							</g>
							<g>
								<path class="st19" d="M-15.9-457.3l-.1-.4 42.7-5.5.4-33.7h.5l-.4 34.1H27l-42.9 5.5z" transform="translate(16.17 19.855)"/>
								<path class="st11" d="M-15.5-457.3h-.5l.4-34.1h.2l42.9-5.5.1.4-42.7 5.5-.4 33.7z" transform="translate(15.973 19.634)"/>
							</g>
							<g>
								<path d="M-13.9-497c-2.1 0-2.8 1.6-1.4 1.9 1.3.3 2.8-1.9 1.4-1.9z" fill="#e9e9ee" transform="translate(98.409 51.729)"/>
								<path class="st34" d="M13.9-485.1c-2.5 2.6-29.2 7.5-29.5 4.7-.3-2.8-2-7.3 4.4-8.2 2.5-.4 11.1-1.5 14.9-2.1 1.2-.3 2.3-.9 3.2-1.8 1.6-1.5 3.2-3.4 7-4.3.3-.1.6-.1.9-.2-.1 0 1.6 9.4-.9 11.9z" transform="translate(80.527 102.798)"/>
								<path d="M41.4-496.5c-4.5-1.2-13.1 0-21.4 0s-17.4-2.1-20.1 2.9S-16-457.1-16-450.1s50.2 8.5 50.2 8.5l7.2-54.9z" fill="#211e4d" transform="translate(64.571 42.888)"/>
								<path class="st13" d="M57.2-474.9h-2.3v-19.8H6.1c-12.1.7-20.3 8.8-19.8 19.7v.1H-16v-.1c-.3-5.6 1.7-11.2 5.7-15.2 4-4.1 9.6-6.4 16.3-6.8h51.2v22.1z" transform="translate(34.108 66.777)"/>
								<path class="st34" d="M12.7-488.9l-17.3 53.3s-11.3-2.1-11.3-9c0-18 10.4-17.9 14.4-29.6 4.4-12.9 2.4-21.6 4.6-22.6 4.1-1.8 9.6 7.9 9.6 7.9z" transform="translate(100.065 42.649)"/>
								<path class="st19" d="M-8.4-496.9s-5.3-.8-5.3 3.4c0 1.6.9 4.7.5 6.4-.4 1.7-2.6 2.2-2.8 3.8-.3 1.6.6 3.1 2.2 3.4.2 0 .3.1.5.1 2.2.2 10.3.4 10.7-3.5.5-3.9 3.4-12.7-5.8-13.6z" transform="translate(76.889 36.454)"/>
								<path d="M-13.8-493.6H-16l.3-3.4h1.1l.8 3.4z" fill="#e54096" transform="translate(87.337 46.033)"/>
								<path class="st37" d="M15.1-496.9c4.9 1.4 1.6 12.6-2 14.1-3.7 1.5-10.8 10.4-15.8 9.6-1.9-.3-4.8-3.5-6.1-8.2-2.4-8.4-1.7-9.1-3.1-9.4-2.2-.4-3.8-.8-4-1.5-.2-.7.6-1.4 4.2-1.1 1 .1 1.9.6 2.4 1.3 2.3 2.1 4 5.4 6.2 8.8.7 1.1 1.2 2.8 1.6 2.8.2 0 1.1-1.7 2-2.7 3.5-3.9 10-15 14.6-13.7z" transform="translate(52.384 56.444)"/>
								<path class="st16" d="M4.4-495.7c4.2.3 14.4.8 14.3 5.6-.5 13.8-8 15.4-8.8 21.5-.7 5.1.6 8.4.6 12.7S9.2-448 7-448s1.2-9.1-3.3-9.3c-3.6-.2-10.4 3.1-15.5 1.6-6.1-1.8-4.8-9-.6-9.5 3.6-.5 5.7-3.4 5.5-7.5-.3-5.9-3.8-23.8 1.3-24.2 1.9-.3 10 1.2 10 1.2z" transform="translate(71.972 55.686)"/>
								<path class="st10" d="M74.4-489.8c-4.9-2.8-11.3-7.5-17-7.2-12.7.6-35.8 6.2-52.1 14.3C-17.9-471-16-470.1-16-470.1l40.8 49.2s83.7-40.8 78.1-48.8c-3.9-5.3-19.2-14.7-28.5-20.1z" transform="translate(-7.748 80.243)"/>
								<path class="st13" d="M-13.7-462.9H-16V-475c-.3-5.6 1.7-11.2 5.7-15.2 4-4.1 9.6-6.4 16.3-6.8h51.2v22.1h-2.3v-19.8H6.1c-12.1.7-20.3 8.8-19.8 19.7v12.1z" transform="translate(45.649 87.813)"/>
								<path class="st16" d="M1.2-496.9c-2.6-.3-4.3-.8-10.9 6.8s-6.4 7.6-6.4 7.6 4 8.1 5.9 8.1 14.3-9 14.3-9l-2.9-13.5z" transform="translate(67.164 55.667)"/>
								<path class="st37" d="M-15.8-495.6c-.1 0-.4-1.4.2-1.4s-.1 1.3 1.6 2-1.4.5-1.4.5l-.4-1.1z" transform="translate(82.666 72.906)"/>
								<path class="st37" d="M-12.2-484c-3.3 0-4.5-2-3.4-3.4.9-1.1.3-3.5 0-5.3-.6-3.5 6-4.3 6-4.3-.3 1.8-.3 3.7-.2 5.5.5 4.8 1.2 4.7 1.2 5.5 0 .9-2.4 2-3.6 2z" transform="translate(87.063 47.391)"/>
								<path d="M-3.9-497c-5.5 0-11.9 4.4-12 9.7-.1 5.4-.2 9.2 1.6 9.5 2.1.3 17.6 1.2 17.6-11.9 0-6.3-4-7.3-7.2-7.3z" fill="#847cb9" transform="translate(81.739 32.659)"/>
								<path d="M-15.3-495.6c-.1 0-.2-.1-.2-.2s0-.1.1-.2c.3-.1.6-.3.8-.6-.5.1-1.2.2-1.2.2-.1 0-.2-.1-.2-.1 0-.1.1-.2.1-.2.5-.1 1.1-.2 1.6-.3.1 0 .2 0 .2.1v.1c-.2.5-.6.9-1.2 1.2.1 0 0 0 0 0z" fill="#382f89" transform="translate(82.127 48.738)"/>
								<path d="M-14.2-497c-.6 1.2-1.2 2.4-1.8 3.7-.2.8 1.8.6 1.8.6.3-.1.5-.5.5-.8l-.5-3.5z" fill="#766ba6" transform="translate(80.053 42.634)"/>
								<path class="st19" d="M6.2-489.3c0 5.1 3.8 4.2 3.8 8.2 0 2.1-1.2 4.9-5.9 4.9-3.4 0-3.3-1.2-3.3-1.2l1.8-.6s-.3 4.8-6.1 4.8c-5.1 0-5-3.6-5-4.5 0-3 1.4-3.5 1.4-5.5 0-1.4-.2-1.8-1.2-1.8s-.5 2.2-1.7 2.2c-2.2 0-1.6-4.4-3.4-4.6s-2.9-1-2.4-2.7c.6-2 2.3-2.5 4.1-3.4 1.9-.9 2.8-3.5 6-3.5s5.9 2.8 8.1 2.8c2.1 0 3.8 1.3 3.8 4.9z" transform="translate(80.157 30.277)"/>
								<path d="M-16-494.3s.2-2.7 1.3-2.7c.9.1 1.5.7 1.6 1.6 0 1.5-.9 3.5-2.4 3.7" fill="#847dba" transform="translate(86.676 41.653)"/>
								<path class="st37" d="M9.6-497c-2.4 0-4.5 3.8-4.7 8.7s1.5 8.3.8 9.5c-.6.9-2.6-.7-6.3-1.4-3.7-.8-7.2-2.1-10.6-3.7 0 0-4-1.8-4.6-.3s1.2 2.6 4.3 3c4.3.6 5.2 7.3 14 8.6 7.4 1 9.9-2.4 9.9-5.6 0-3.3 3.4-18.8-2.8-18.8z" transform="translate(78.512 61.224)"/>
							</g>
							<g>
								<path class="st16" d="M-11.9-496.9c3.2-.5 5.9 1.7 7.5 4.2s.2 13.7.2 13.7-8.9-1.1-10.4-1.7-2-6.5-.8-9.9c.9-2.2 2-4.4 3.5-6.3z" transform="translate(97.403 59.236)"/>
							</g>
							<g>
								<path class="st4" d="M-16-497c.1 0 3.1 1.7 3.1 1.7l-.2 4.5-2.8-1.5-.1-4.7z" transform="translate(32.35 13.789)"/>
							</g>
						</g>
					</g>
					<path class="st19" d="M-15.5-450.3h-.5l.5-40.1h.2l50.7-6.6.1.4-50.5 6.5-.5 39.8z" transform="translate(665.901 539.02)"/>
					<path transform="matrix(.9988 -.0481 .0481 .9988 714.543 570.41)" class="st20" d="M-16-496.9h3v1.1h-3z"/>
					<path class="st26" d="M-16-494.1s1.1-1.5 1.3-1.8c1-.4 2-.8 3.1-1.1 0 .3-.2.6-.5.7-.8.2-1.5.6-2.2 1l-1.1 1.3" transform="translate(691.489 572.783)"/>
					<path class="st26" d="M-16-496.3c.2-.4 1.5-.7 1.7-.7s.4.7.3.9-.2 1-.2 1-.3.1-.2-.3c0-.3 0-.5-.1-.8l.3.3c-.2.3-.5.6-.9.8-.6.3-.9-1.2-.9-1.2z" transform="translate(693.207 573.73)"/>
				</g>
				<g>
					<path class="st21" d="M-12.7-496c1 3.1 1 5.6 2.5 7.1 1.5 1.6-5.7 2.3-5.8 1s2-5.8 1.6-8.1 1.7 0 1.7 0z" transform="translate(177.74 891.087)"/>
					<path class="st6" d="M-14.6-496.6c-.4.4-1.6 1-1.4 1.6.3 1.5.7 2.9 1.4 4.3.6 1.1 1.4 1.8 1.9 1.5s-.3-4.3.4-5.7c.4-.7.1-1.5-.5-1.9-.7-.3-1.3-.2-1.8.2z" transform="translate(131.625 924.451)"/>
					<path class="st11" d="M4.7-473.3c-3.7 1.6-19.1-3.7-20-4.9-.6-.9-.8-2.1-.6-3.2h.4c2.2.1 12.6.3 11.8-1.7l-3.2-7.7-1.3-3.1c3.1-4.1 10-4.4 12 .3s4.6 18.8.9 20.3z" transform="translate(132.805 907.441)"/>
					<path class="st21" d="M-2.5-494.2c-1.1.7-1.5.2-2.2.9s-.7 3.9-1 5.9c-.3 1.9-2.4 5.3-4.2 5.3-1.1-.2-2.1-.8-2.8-1.7-1.3-1.3-2.4-2.8-3.1-4.4-.4-1.1-.2-4 0-6.2.1-1.4.3-2.6.3-2.6.4 0 .9.8 1.4 2 .6 1.2 1.2 2.8 1.8 4.2.8 1.8 1.5 3.3 2 3.3 1.1 0 4-6.2 5-7 .9-.9 2.6-2.4 3.6-2.4s.3 1.9-.8 2.7z" transform="translate(153.73 886.058)"/>
					<g class="st32">
						<path class="st9" d="M-12.7-485.8c-1.3-1.3-2.4-2.8-3.1-4.4-.4-1.1-.2-4 0-6.2.5-.4 1.1-.6 1.7-.6.6 1.2 1.2 2.8 1.8 4.2-.1 2.4-.4 5.4-.4 7z" transform="translate(153.73 888.018)"/>
					</g>
					<path class="st6" d="M-15.9-495c.2.5.5 1.8 1.2 1.8 1.5.2 3 .1 4.5-.1 1.2-.3 2.1-.8 2-1.4s-4.2-1-5.3-2c-.5-.6-1.4-.6-2-.1-.5.6-.6 1.2-.4 1.8z" transform="translate(158.256 921.009)"/>
					<path class="st11" d="M-4.7-476.1c-.1.3-.1.4-.1.4 1 .5 2.1.6 3.2.3 1.4-.6 10.6-16.7 8.7-20.2s-15.6.4-20.1 2.8-3.5 9.2.8 12l2.9-1.6 8.5-3.3-2.4-1.3-1.5 10.9z" transform="translate(146.962 901.163)"/>
					<path class="st6" d="M2.7-472.6c-1.7 1.8-4 3-6.5 3.2-1 .1-2 .4-2.9.6-.7.2-1.4.4-2.1.7-.4.1-.7.2-1 .4-2.7 1-4.9 2.1-4.9 2.1-.7-5.4-1.1-10.8-1.2-16.3 0-7.6 4-15 10.7-15 6.1 0 7.2 5 7.2 8 0 1.5-.2 2.9-.5 4.3v.2c-.2 1-.3 2.1-.3 3.2s.1 2.2.3 3.3c.1 1.7.5 3.5 1.2 5.3z" transform="translate(138.396 883.025)"/>
					<path class="st21" d="M-10.7-497s-5 10.2-5.3 12.7 3.6 6.6 4 9.2c.1.8-.4 1.1.2 2 1 1.8 1.7 2.8 1.7 2.8s.8 1 1.5-.4c.5-1.3.3-2.8-.4-4-.5-.8-2.5-1.6-2.5-1.6l1.8 2.9-2.2-10.3-1.5 1.2.9 2.1 6-10.5-4.2-6.1z" transform="translate(135.129 890.315)"/>
					<path class="st21" d="M-8.9-489.5c0 .7-1.9 2.5-4.5.4-.8-.6-1.7-1.1-2.6-1.4 0 0 3-1 2.7-2.3-.5-1.5-1.2-2.9-2-4.2 0 0 2.9.4 3.9 2 .3.4.4.8.3 1.3-.1 1.1.2 2.2 1 3 .6.5 1.2.9 1.2 1.2z" transform="translate(145.598 877.775)"/>
					<g class="st32">
						<path class="st9" d="M-14.1-492.2c-1.1 0-1.6-1-1.9-1.7s1.3-2.3 1.3-2.3c0-.5-.7-.6-.3-.8.3.4.4.8.3 1.3-.1 1.1.2 2.2 1 3 .2.3.1.5-.4.5z" transform="translate(149.135 879.725)"/>
					</g>
					<path class="st21" d="M-6.3-493.5c.1.4.2.8.3 1.1 0 .2 0 .3.1.5.1.7.1 1.4.1 2.1 0 .7-.1 1.4-.2 2-.2 1.2-.6 2.2-1.4 2.4-1.4.5-4.7-.7-6.7-2.6-.7-.6-1.2-1.3-1.5-2.1-1-3 .2-6 2.5-6.8 2-.6 4.1 0 5.6 1.4.5.7.9 1.3 1.2 2z" transform="translate(145.618 870.089)"/>
					<g class="st32">
						<path class="st9" d="M-15.3-497c0 .7-.1 1.4-.2 2h-.1c-.4-.1-.4-.9-.4-1.3.1-.3.4-.6.7-.7z" transform="translate(154.968 877.396)"/>
					</g>
					<g class="st32">
						<path class="st9" d="M-6.3-493.5c.1.4.2.8.3 1.1-.2.1-.4.1-.6.2-1.6.1-2.3-1.7-3.7-1.4s.8 4.4-.4 4.5-1.9-2.3-2.6-2.2c-.6.1-.5 2.4-.8 3.5-.7-.6-1.2-1.3-1.5-2.1-1-3 .2-6 2.5-6.8 2-.6 4.1 0 5.6 1.4.5.5.9 1.1 1.2 1.8z" transform="translate(145.618 870.089)"/>
					</g>
					<path class="st9" d="M-13.4-495.9c-1.8.6-3.1 3.6-2.4 5.7s1.5 3.6 1.4 4.1-1.2 1-.5 1.4c1.1.3 2.3.2 3.2-.4.5-.6-.6-3.8.1-4.1s2 1.9 3.1 1.5-2.1-3.8-.8-4.4 2.4 1 3.9.5 2.1-3.7 1.2-4.4-1.9.7-2.6.5-.7-1.4-1.8-1.5c-.8 0-1.6.1-2.4.5-.7.2-1.6.3-2.4.6z" transform="translate(144.494 868.781)"/>
					<path class="st9" d="M-14.9-497c-.6-.2-1.6.6-.9.8s1.8-.6.9-.8z" transform="translate(143.802 878.97)"/>
					<path class="st21" d="M-13.6-495.6c.2.6 0 .9-.4 1-.7.2-1.9-.9-2-1.3s.4-.9.9-1c.5-.3 1.4.8 1.5 1.3z" transform="translate(147.958 876.618)"/>
					<path class="st5" d="M-14.2-494.8c.2.2-1 .6-1.6.6-.6 0-.1-2.7.3-2.8.3-.1.3 1 1.3 2.2z" transform="translate(154.966 876.139)"/>
					<path class="st9" d="M-16-489.4v34.7s1 .2 1.7-1.3c.6-1.2.8-3.8 1.3-5.2 1.2-3.2 5.2-31.9 5.2-31.9l6.3 19.4 18.7 6.1.8-1.4s-9.6-7.7-15.6-9.3c-2.5-6-4.4-12.2-5.8-18.6l-12.6 7.5z" transform="translate(209.784 889.006)"/>
					<path class="st9" d="M-11.3-497c3.1.3 4.7 3 4.8 6.7s-3 6.5-4.5 6.5-5-3.2-5-7.1 1.7-6.4 4.7-6.1z" transform="translate(207.243 845.725)"/>
					<path class="st9" d="M-6.3-497c-.5 3.7 0 6.5 1.9 7.3s3.9.8 5.5 2.4-2.7 8.3-3 11-1.1 9.1-.2 11.3.7 7.3-2.7 9.1-10.2 1.3-9.3-6.3c.6-4.1.6-8.3-.1-12.4 0 0-2.7-4.7-1.4-7.9s1.7-3.7 1.8-4.7 5-.2 5.6-2.2-2.7-6.2-2.7-6.2l4.6-1.4z" transform="translate(206.911 851.703)"/>
					<path class="st5" d="M-5.9-485.5c1.4.5 2.2-4.6 1.1-6.9s-3.5-4.5-5-4.5-4.6.4-5.6 3.7c-.7 2.4-.9 5-.3 5.2.5.1 4.1-1.7 4.9-3.8.8 1.1 2.5 1.5 4.1 2.2s-.7 3.5.8 4.1z" transform="translate(206.605 844.424)"/>
					<path class="st5" d="M-4.7-496.9c2.5.9 0 6.3 0 6.3l-1.1-1.7c1-.3 2.1-.2 3.1.3 1.7.9.2 5.6-2.2 6.2s-6.3 1.7-7.6.9-1.6-3.2-1.6-3.2l1 1c-1.2 0-2.3-.6-2.8-1.6-.7-1.7 3.1-2.2 3.1-2.2l-.9 1.4s-1.4-4.4 1.2-5.6 5.7 1.2 5.7 1.2l-2.1.7c-.1.3 1.4-4.7 4.2-3.7z" transform="translate(204.987 836.65)"/>
					<g>
						<path class="st9" d="M-2.2-497l-7.4 16.7-6.4 10.1 1.8 1.4s12.2-7.4 16.4-17S-2.2-497-2.2-497z" transform="translate(195.267 861.534)"/>
					</g>
					<g>
						<path class="st9" d="M-15.5-497c3.2.3 7 3.3 9.4 6.4s4.4 9.5 4.4 9.5l-3.1-.8s6.1-8.4 8-9.1 5.3-.8 5.4.6-3.7.8-4.7 2.1-6.4 12.3-7.3 12.8-11.8-10.7-12.4-13.9c-.3-2.6-.2-5.1.3-7.6z" transform="translate(219.201 859.363)"/>
					</g>
					<g>
						<path class="st5" d="M16.6-471.2c.6-8.9-13.6-13.7-18.4-21.9s-11.5-1-11.5-1c.1 1-1.6 12.1-2.6 22.9-.4 5.2 0 10.5 1.1 15.6 2.8-1.6 5.9-2.8 9-3.5 5.6-1.3 22.1-7.1 22.4-12.1z" transform="translate(206.383 877.925)"/>
					</g>
					<g>
						<path class="st21" d="M-12.4-497c-3.4 0-5.9 6.4-.4 7s6.8.4 6.1-2.4-2.3-4.6-5.7-4.6z" transform="translate(174.579 886.405)"/>
						<path class="st21" d="M-4.7-497c-2.9.3-3.6 3.7-6.1 8.6s-5.9 11.3-5.1 11.4 9-4.6 11.2-9.4 0-10.6 0-10.6z" transform="translate(167.997 897.456)"/>
						<path class="st21" d="M-16-491.5l2.5 9.8 1.5 6.1h2.6s-.4-16.6-1.9-20.4-4.7 4.5-4.7 4.5z" transform="translate(181.542 911.926)"/>
						<path class="st21" d="M-16-497v20.5l3.9-.4 1.7-18.3-5.6-1.8z" transform="translate(175.415 912.784)"/>
						<path class="st11" d="M-3.4-472l-12.6.6s.4-10.7 1.1-15.9c.4-2.9 1.9-6.7 3.1-9.7l5.2.3c.8 2.7 1.8 5.9 2.6 8.3 1.5 4.8.6 16.4.6 16.4z" transform="translate(174.58 896.078)"/>
					</g>
					<g>
						<path transform="rotate(-13.712 3627.583 -833.467)" class="st6" d="M-11.5-497.5h.5v38h-.5z"/>
					</g>
					<g>
						<path class="st5" d="M-16-497c.4 2.2.5 3 1.6 3.8.7.5 1.4.9 2.2 1.2.2-1.3.1-2.6-.2-3.8-.6-1.5-3.6-1.2-3.6-1.2z" transform="translate(211.701 848.963)"/>
					</g>
					<g>
						<path class="st5" d="M-13.5-495.4c3.8-.3 7.6-.9 11.3-1.6-.4 3.7-1.6 7.2-.6 11.8 0 6.5-.8 10.7.6 12.6s.1 8.3-6.4 9.4-7.9-2.2-7.3-4.5.9-14.8.8-16.7 1.6-11 1.6-11z" transform="translate(208.045 859.362)"/>
					</g>
					<g>
						<path class="st6" d="M-16-495.5c1.8.9 3.7 1.6 5.7 2.2 1.5.2.4-2.1-1.5-3.4-1.9-.6-2.4-.1-2.9.4-.4.3-.8.6-1.3.8z" transform="translate(239.698 915.674)"/>
					</g>
					<g>
						<path class="st6" d="M-13-496.8s-3.3 3-3 3.2 3.7.1 4.5-.5c.2-.5.6-2.9.6-2.9l-2.1.2z" transform="translate(207.078 928.567)"/>
					</g>
					<g>
						<path class="st9" d="M-3.1-497c0 3.6-.2 6.6-.2 6.6l-12.6.6s.1-2.7.3-6l12.5-1.2z" transform="translate(174.58 914.48)"/>
					</g>
					<g>
						<path class="st21" d="M-15.6-485.7c1.7-2.1 9.7-4.7 11.9-9.1s2-1 1.9.3-8.4 17.1-11.9 18-1.9-9.2-1.9-9.2z" transform="translate(180.988 886.19)"/>
					</g>
					<g>
						<path class="st9" d="M-10.4-496.4c2.5-1.7 6.1 1 6.1 1l-3.3 3.6 3.2 3.1s-2.4 3.1-5.9 2.9c-2.1-.1-4-.8-5.7-2 0-.1 3.3-7.1 5.6-8.6z" transform="translate(169.815 885.103)"/>
					</g>
					<g>
						<path class="st6" d="M-3.1-497c0 3.6-.2 6.6-.2 6.6l-12.6.6s.1-2.7.3-6l12.5-1.2z" transform="translate(174.58 914.48)"/>
					</g>
					<g>
						<path class="st9" d="M-16-497v3.6h3.9l1.7-.7-1.4-3-4.2.1z" transform="translate(175.416 930.322)"/>
					</g>
					<g>
						<path class="st9" d="M-16-497h3.3l3.1 2.1.6 1.2-6.9.3-.1-3.6z" transform="translate(184.814 930.322)"/>
					</g>
					<g>
						<path class="st5" d="M-16-497c.7.2 1.4.7 1.9 1.2.1.3-.6.7-.9.8s-1-2-1-2z" transform="translate(182.115 887.71)"/>
					</g>
					<g>
						<path class="st5" d="M-15.2-497c.5.1 1 .3 1.5.5l-.6 1-1.7-.7.8-.8z" transform="translate(172.283 887.594)"/>
					</g>
					<g>
						<path class="st6" d="M-10.3-497c-2.2 2.1-5.7 10.9-5.7 10.9 1 2.1 2.9 3.6 5.1 4 3.6.6 4.7-3.7 4.7-3.7l-.6-9.9" transform="translate(136.578 886.248)"/>
					</g>
					<g>
						<path class="st13" d="M14.2-484.7L2.9-469l-15.7-11.3c-3.5-2.5-4.3-7.4-1.8-10.9s7.4-4.3 10.9-1.8l3.1 2.2 2.2-3.1c2.5-3.5 7.4-4.3 10.9-1.8s4.3 7.5 1.7 11z" transform="translate(169.835 828.888)"/>
					</g>
				</g>
				<g>
					<path class="st15" d="M-16-497v103.9h205.1V-497H-16z" transform="translate(119.17 668.21)"/>
					<path class="st11" d="M-16-497h32.2v17.2H-16z" transform="translate(123.925 745.547)"/>
					<path class="st11" d="M-16-497h32.2v17.2H-16z" transform="translate(199.255 745.547)"/>
					<path class="st11" d="M-16-497h32.2v17.2H-16z" transform="translate(242.21 745.547)"/>
					<path class="st11" d="M-16-497h32.2v17.2H-16z" transform="translate(283.555 745.547)"/>
					<path class="st15" d="M-16-497h42.5v10.4H-16z" transform="translate(250.431 659.556)"/>
					<path class="st15" d="M-16-497H5.3v10.4H-16z" transform="translate(127.843 659.556)"/>
					<path class="st1" d="M-16-497v12.3H8.8V-497H-16z" transform="translate(291.014 680.794)"/>
					<path class="st1" d="M-16-497v12.3H8.8V-497H-16z" transform="translate(291.014 701.866)"/>
					<path class="st1" d="M-16-497v12.3H8.8V-497H-16z" transform="translate(291.014 722.939)"/>
					<path class="st3" d="M-13.3-497h3.3c1.5 0 2.7 1.2 2.7 2.7H-16c0-1.5 1.2-2.7 2.7-2.7z" transform="translate(293.511 690.362)"/>
					<path class="st3" d="M-16-497h5.7v2.8H-16z" transform="translate(295.058 688.286)"/>
					<path class="st3" d="M-16-497h6v10.8h-6z" transform="translate(307.423 682.297)"/>
					<path class="st3" d="M-13.3-497h3.3c1.5 0 2.7 1.2 2.7 2.7H-16c0-1.5 1.2-2.7 2.7-2.7z" transform="translate(293.511 711.435)"/>
					<path class="st3" d="M-16-497h5.7v2.8H-16z" transform="translate(295.058 709.359)"/>
					<path class="st3" d="M-16-497h6v10.8h-6z" transform="translate(307.423 703.37)"/>
					<path class="st3" d="M-16-497h6v10.8h-6z" transform="translate(294.903 724.442)"/>
					<path class="st1" d="M-16-497v12.3H8.8V-497H-16z" transform="translate(225.649 680.794)"/>
					<path class="st1" d="M-16-497v12.3H8.8V-497H-16z" transform="translate(225.649 701.866)"/>
					<path class="st1" d="M-16-497v12.3H8.8V-497H-16z" transform="translate(225.649 722.939)"/>
					<path class="st3" d="M-13.3-497h3.3c1.5 0 2.7 1.2 2.7 2.7H-16c0-1.5 1.2-2.7 2.7-2.7z" transform="translate(228.146 690.362)"/>
					<path class="st3" d="M-16-497h5.7v2.8H-16z" transform="translate(229.693 688.286)"/>
					<path class="st3" d="M-16-497h6v10.8h-6z" transform="translate(242.058 682.297)"/>
					<path class="st3" d="M-16-497h6v10.8h-6z" transform="translate(242.059 703.37)"/>
					<path class="st3" d="M-13.3-497h3.3c1.5 0 2.7 1.2 2.7 2.7H-16c0-1.5 1.2-2.7 2.7-2.7z" transform="translate(230.991 732.507)"/>
					<path class="st3" d="M-16-497h5.7v2.8H-16z" transform="translate(232.538 730.431)"/>
					<path class="st3" d="M-16-497h6v10.8h-6z" transform="translate(242.058 724.442)"/>
					<path class="st3" d="M-15.3-497c-.6 0-.7.3-.7.7s.2 1.1.8 1.1.6-.9.6-1.2-.2-.6-.7-.6z" transform="translate(227.579 726.417)"/>
					<path class="st3" d="M-15.8-497c.1.1.1.2.2.4-.1.1-.2.1-.3 0" transform="translate(228.744 727.235)"/>
					<path class="st3" d="M-15.5-496.9c-.3 0-.5.5-.4.8.1.3.2.5 0 .6-.2.1.3.4.5.2s.2-.6.5-.7.7-.2.8-.5 0-.6-.4-.5c-.4.1-.7.1-1 .1z" transform="translate(227.367 726.211)"/>
					<path class="st3" d="M-14.6-497c-.7.1-1.3.5-1.4 1.8-.1 1.3.7 4.1.7 4.9s.7.6.7.6 1.1-4.5.8-5.7 0-1.7-.8-1.6z" transform="translate(226.987 727.902)"/>
					<path class="st1" d="M-16-497v12.3H8.8V-497H-16z" transform="translate(192.966 680.794)"/>
					<path class="st1" d="M-16-497v12.3H8.8V-497H-16z" transform="translate(192.966 701.866)"/>
					<path class="st3" d="M-15.3-497c.6 0 .7.3.7.7s-.2 1.1-.8 1.1-.6-.9-.6-1.2c0-.3.2-.6.7-.6z" transform="translate(209.754 705.345)"/>
					<path class="st3" d="M-15.8-497c-.1.1-.1.2-.2.4.1.1.2.1.3 0" transform="translate(209.671 706.163)"/>
					<path class="st3" d="M-14.6-496.9c.3 0 .5.5.4.8s-.2.5 0 .6-.3.4-.5.2-.2-.6-.5-.7-.7-.2-.8-.5c-.1-.3 0-.6.4-.5.3.1.7.1 1 .1z" transform="translate(209.491 705.139)"/>
					<path class="st3" d="M-15.1-497c.7.1 1.3.5 1.4 1.8s-.7 4.1-.7 4.9-.7.6-.7.6-1.1-4.5-.8-5.7c.2-1.2 0-1.7.8-1.6z" transform="translate(209.445 706.83)"/>
					<path class="st1" d="M-16-497v12.3H8.8V-497H-16z" transform="translate(192.966 722.939)"/>
					<g>
						<path class="st3" d="M-13.3-497h3.3c1.5 0 2.7 1.2 2.7 2.7H-16c0-1.5 1.2-2.7 2.7-2.7z" transform="translate(195.463 690.363)"/>
						<path class="st3" d="M-16-497h5.7v2.8H-16z" transform="translate(197.01 688.286)"/>
						<path class="st3" d="M-16-497h6v10.2h-6z" transform="translate(209.375 682.885)"/>
					</g>
					<g>
						<path class="st3" d="M-13.3-497h3.3c1.5 0 2.7 1.2 2.7 2.7H-16c0-1.5 1.2-2.7 2.7-2.7z" transform="translate(195.463 711.435)"/>
						<path class="st3" d="M-16-497h5.7v2.8H-16z" transform="translate(197.01 709.359)"/>
					</g>
					<g>
						<path class="st3" d="M-13.3-497h3.3c1.5 0 2.7 1.2 2.7 2.7H-16c0-1.5 1.2-2.7 2.7-2.7z" transform="translate(206.212 732.507)"/>
						<path class="st3" d="M-16-497h5.7v2.8H-16z" transform="translate(207.759 730.431)"/>
					</g>
					<g>
						<path class="st1" d="M-16-497v12.3H8.8V-497H-16z" transform="translate(160.283 680.794)"/>
						<path class="st1" d="M-16-497v12.3H8.8V-497H-16z" transform="translate(160.283 701.866)"/>
						<path class="st1" d="M-16-497v12.3H8.8V-497H-16z" transform="translate(160.283 722.939)"/>
						<path class="st3" d="M-13.3-497h3.3c1.5 0 2.7 1.2 2.7 2.7H-16c0-1.5 1.2-2.7 2.7-2.7z" transform="translate(162.78 690.362)"/>
						<path class="st3" d="M-16-497h5.7v2.8H-16z" transform="translate(164.327 688.286)"/>
						<path class="st3" d="M-16-497h6v10.8h-6z" transform="translate(176.692 682.297)"/>
						<g>
							<path class="st3" d="M-13.3-497h3.3c1.5 0 2.7 1.2 2.7 2.7H-16c0-1.5 1.2-2.7 2.7-2.7z" transform="translate(162.78 711.435)"/>
							<path class="st3" d="M-16-497h5.7v2.8H-16z" transform="translate(164.327 709.359)"/>
							<path class="st3" d="M-16-497h6v10.8h-6z" transform="translate(176.692 703.37)"/>
						</g>
						<g>
							<path class="st3" d="M-13.3-497h3.3c1.5 0 2.7 1.2 2.7 2.7H-16c0-1.5 1.2-2.7 2.7-2.7z" transform="translate(162.78 732.507)"/>
							<path class="st3" d="M-16-497h5.7v2.8H-16z" transform="translate(164.327 730.431)"/>
							<path class="st3" d="M-16-497h6v10.8h-6z" transform="translate(176.692 724.442)"/>
						</g>
					</g>
					<path class="st1" d="M-16-497v12.3H8.8V-497H-16z" transform="translate(127.601 680.794)"/>
					<g>
						<path class="st3" d="M-13.3-497h5.1c1.5 0 2.7 1.2 2.7 2.7H-16c0-1.5 1.2-2.7 2.7-2.7z" transform="translate(130.689 690.362)"/>
						<path class="st3" d="M-16-497h1.5v4.5H-16z" transform="translate(130.689 688.645)"/>
						<path class="st3" d="M-15.2-497h1.6c.4 0 .8.3.8.8 0 .4-.3.8-.8.8h-1.6c-.4 0-.8-.3-.8-.8s.3-.8.8-.8z" transform="translate(130.689 689.284)"/>
					</g>
					<g>
						<path class="st1" d="M-16-497v12.3H8.8V-497H-16z" transform="translate(127.601 701.866)"/>
					</g>
					<g>
						<path class="st1" d="M-16-497v12.3H8.8V-497H-16z" transform="translate(127.601 722.939)"/>
					</g>
					<g>
						<path class="st3" d="M-13.3-497h5.1c1.5 0 2.7 1.2 2.7 2.7H-16c0-1.5 1.2-2.7 2.7-2.7z" transform="translate(130.825 732.507)"/>
						<path class="st3" d="M-15.3-497c-.6 0-.7.3-.7.7s.2 1.1.8 1.1.6-.9.6-1.2-.2-.6-.7-.6z" transform="translate(136.143 726.417)"/>
						<path class="st3" d="M-15.8-497c.1.1.1.2.2.4-.1.1-.2.1-.3 0" transform="translate(137.308 727.235)"/>
						<path class="st3" d="M-15.5-496.9c-.3 0-.5.5-.4.8.1.3.2.5 0 .6-.2.1.3.4.5.2s.2-.6.5-.7.7-.2.8-.5 0-.6-.4-.5c-.4.1-.7.1-1 .1z" transform="translate(135.931 726.211)"/>
						<path class="st3" d="M-14.6-497c-.7.1-1.3.5-1.4 1.8-.1 1.3.7 4.1.7 4.9s.7.6.7.6 1.1-4.5.8-5.7 0-1.7-.8-1.6z" transform="translate(135.551 727.902)"/>
						<g>
							<path class="st3" d="M-16-497h1.5v4.5H-16z" transform="translate(130.098 730.79)"/>
						</g>
						<g>
							<path class="st3" d="M-15.2-497h1.6c.4 0 .8.3.8.8 0 .4-.3.8-.8.8h-1.6c-.4 0-.8-.3-.8-.8s.3-.8.8-.8z" transform="translate(131.859 731.429)"/>
						</g>
					</g>
					<g>
						<path class="st3" d="M-16-497h6v10.8h-6z" transform="translate(144.01 682.297)"/>
					</g>
					<g>
						<path class="st3" d="M-13.3-497h3.3c1.5 0 2.7 1.2 2.7 2.7H-16c0-1.5 1.2-2.7 2.7-2.7z" transform="translate(130.098 711.435)"/>
						<path class="st3" d="M-16-497h5.7v2.8H-16z" transform="translate(131.645 709.359)"/>
						<path class="st3" d="M-16-497h6v10.8h-6z" transform="translate(144.01 703.37)"/>
					</g>
					<g>
						<path class="st3" d="M-16-497h6v10.8h-6z" transform="translate(144.01 724.442)"/>
					</g>
					<g>
						<path class="st1" d="M-16-497v12.3H8.8V-497H-16z" transform="translate(258.331 680.794)"/>
						<path class="st1" d="M-16-497v12.3H8.8V-497H-16z" transform="translate(258.331 701.866)"/>
						<path class="st1" d="M-16-497v12.3H8.8V-497H-16z" transform="translate(258.331 722.939)"/>
						<path class="st3" d="M-7.2-494.3H-16c0-1.5 1.2-2.7 2.7-2.7h3.3c1.6 0 2.8 1.2 2.8 2.7z" transform="translate(271.957 690.362)"/>
						<path class="st3" d="M-16-497h5.7v2.8H-16z" transform="translate(273.503 688.286)"/>
						<path class="st3" d="M-16-497h6v10.8h-6z" transform="translate(260.828 682.297)"/>
						<g>
							<path class="st3" d="M-13.3-497h3.3c1.5 0 2.7 1.2 2.7 2.7H-16c0-1.5 1.2-2.7 2.7-2.7z" transform="translate(260.828 711.435)"/>
							<path class="st3" d="M-13.3-497h5.1c1.5 0 2.7 1.2 2.7 2.7H-16c0-1.5 1.2-2.7 2.7-2.7z" transform="translate(227.865 711.435)"/>
							<path class="st3" d="M-16-497h5.7v2.8H-16z" transform="translate(262.375 709.359)"/>
							<path class="st3" d="M-16-497h6v10.8h-6z" transform="translate(274.741 703.37)"/>
						</g>
						<g>
							<path class="st3" d="M-13.3-497h3.3c1.5 0 2.7 1.2 2.7 2.7H-16c0-1.5 1.2-2.7 2.7-2.7z" transform="translate(260.828 732.507)"/>
							<path class="st3" d="M-16-497h5.7v2.8H-16z" transform="translate(262.375 730.431)"/>
							<path class="st3" d="M-16-497h6v10.8h-6z" transform="translate(274.74 724.442)"/>
						</g>
					</g>
					<g>
						<path class="st3" d="M-16-497h1.5v4.5H-16z" transform="translate(227.138 709.718)"/>
					</g>
					<g>
						<path class="st3" d="M-15.2-497h1.6c.4 0 .8.3.8.8 0 .4-.3.8-.8.8h-1.6c-.4 0-.8-.3-.8-.8s.3-.8.8-.8z" transform="translate(228.899 710.356)"/>
					</g>
					<g>
						<path class="st3" d="M-13.3-497h5.1c1.5 0 2.7 1.2 2.7 2.7H-16c0-1.5 1.2-2.7 2.7-2.7z" transform="translate(303.847 732.507)"/>
					</g>
					<g>
						<path class="st3" d="M-16-497h1.5v4.5H-16z" transform="translate(303.12 730.79)"/>
					</g>
					<g>
						<path class="st3" d="M-15.2-497h1.6c.4 0 .8.3.8.8 0 .4-.3.8-.8.8h-1.6c-.4 0-.8-.3-.8-.8s.3-.8.8-.8z" transform="translate(304.881 733.711)"/>
					</g>
					<g>
						<path transform="rotate(-45.001 877.91 -312.428)" class="st4" d="M-17.3-493.6h9.8v.5h-9.8z"/>
						<path transform="rotate(-45.001 886.549 -322.625)" class="st4" d="M-16.7-495h5.7v.5h-5.7z"/>
					</g>
					<g>
						<path transform="rotate(-45.001 937.399 -384.232)" class="st4" d="M-17.3-493.6h9.8v.5h-9.8z"/>
						<path transform="rotate(-45.001 946.037 -394.429)" class="st4" d="M-16.7-495h5.7v.5h-5.7z"/>
					</g>
					<g>
						<path transform="rotate(-45.001 943.813 -471.657)" class="st4" d="M-17.3-493.6h9.8v.5h-9.8z"/>
						<path transform="rotate(-45.001 952.451 -481.855)" class="st4" d="M-16.7-495h5.7v.5h-5.7z"/>
					</g>
					<g>
						<path transform="rotate(-45.001 1010.37 -489.272)" class="st4" d="M-17.3-493.6h9.8v.5h-9.8z"/>
						<path transform="rotate(-45.001 1019.007 -499.469)" class="st4" d="M-16.7-495h5.7v.5h-5.7z"/>
					</g>
					<g>
						<path class="st10" d="M52.7-485.3H-16c.2-2.2-.4-6.6 4.6-6.3s4.9 2.4 10.5 2.4 9.3-5.8 16-5.8 10.6 3.8 14.7 3.8 6.6-5.8 11.7-5.8c10.2 0 11.2 11.7 11.2 11.7z" transform="translate(209.714 760.459)"/>
					</g>
					<g>
						<path class="st10" d="M-15.7-488.3c-.8-2.6-.2-9.3 3.5-8.6s2.1 4.1 5.6 4.1 4.8-2.3 8.1-2.2 3.8 5.2 3.3 6.8h-20.5z" transform="translate(113.411 763.44)"/>
					</g>
					<g>
						<path class="st1" d="M-16-497h13.2v18.8H-16z" transform="translate(169.359 753.289)"/>
					</g>
					<g>
						<path class="st10" d="M-16-497h210.9v7.3H-16z" transform="translate(116.252 666.188)"/>
					</g>
					<g>
						<path class="st10" d="M-16-497h210.9c0 1.8-1.5 3.3-3.3 3.3H-12.7c-1.8 0-3.3-1.5-3.3-3.3z" transform="translate(116.252 695.658)"/>
					</g>
					<g>
						<path class="st10" d="M-16-497h210.9c0 1.8-1.5 3.3-3.3 3.3H-12.7c-1.8 0-3.3-1.5-3.3-3.3z" transform="translate(116.252 716.871)"/>
					</g>
					<g>
						<path class="st10" d="M-16-497h210.9c0 1.8-1.5 3.3-3.3 3.3H-12.7c-1.8 0-3.3-1.5-3.3-3.3z" transform="translate(116.252 738.653)"/>
					</g>
					<g>
						<path class="st9" d="M-16-497v72.3H4.9v-21.9h23.4v21.9h20V-497H-16z" transform="translate(143.289 699.822)"/>
						<path class="st1" d="M-16-497v9.8h45.7v-9.8H-16z" transform="translate(152.393 711.64)"/>
						<path class="st1" d="M-16-497v9.8h45.7v-9.8H-16z" transform="translate(152.393 732.712)"/>
						<path class="st9" d="M-16-497h30.5v6.4H-16z" transform="translate(149.811 697.306)"/>
						<path class="st9" d="M-16-497h9.2v6.4H-16z" transform="translate(191.084 697.306)"/>
					</g>
					<g>
						<path class="st7" d="M-16-497h.5v18h-.5z" transform="translate(175.743 753.289)"/>
						<path class="st14" d="M-16-497h13.2v1.6H-16z" transform="translate(169.359 770.496)"/>
					</g>
					<g>
						<path class="st7" d="M-16-497h1.3v3.6H-16z" transform="translate(176.617 760.675)"/>
						<path class="st7" d="M-16-497h1.3v3.6H-16z" transform="translate(174.042 760.675)"/>
					</g>
					<g>
						<path class="st3" d="M-15.5-497c-.5.1-.5.4-.4.8.1.4.4.9.9.8s.4-.9.3-1.2-.3-.5-.8-.4z" transform="translate(305.664 729.159)"/>
						<path class="st3" d="M-16-497c.1.1.2.2.2.3-.1.1-.2.1-.3.1" transform="translate(306.83 729.766)"/>
						<path class="st3" d="M-15.8-496.6c-.2 0-.3.5-.2.8.1.3.3.4.1.5s.3.3.5 0 .1-.6.3-.7.6-.3.6-.6-.2-.5-.5-.4c-.2.2-.5.3-.8.4z" transform="translate(305.521 728.85)"/>
						<path class="st3" d="M-15.1-492.8l1.5-.4c0-.9-.2-1.7-.4-2.6-.5-1-.4-1.4-1.1-1.2-.6.2-1 .7-.8 1.9.1.8.4 1.6.8 2.3z" transform="translate(305.736 730.394)"/>
					</g>
					<g>
						<path class="st3" d="M-15.3-497c.6 0 .7.3.7.7s-.2 1.1-.8 1.1-.6-.9-.6-1.2.2-.6.7-.6z" transform="translate(271.766 705.345)"/>
						<path class="st3" d="M-15.8-497c-.1.1-.1.2-.2.4.1.1.2.1.3 0" transform="translate(271.683 706.163)"/>
						<path class="st3" d="M-14.6-496.9c.3 0 .5.5.4.8s-.2.5 0 .6-.3.4-.5.2-.2-.6-.5-.7-.7-.2-.8-.5 0-.6.4-.5c.3.1.7.1 1 .1z" transform="translate(271.503 705.139)"/>
						<path class="st3" d="M-15.1-497c.7.1 1.3.5 1.4 1.8s-.7 4.1-.7 4.9-.7.6-.7.6-1.1-4.5-.8-5.7 0-1.7.8-1.6z" transform="translate(271.457 706.83)"/>
					</g>
					<g>
						<path class="st7" d="M-15.7-497c-.4 1.3-.4 2.6 0 3.9.4 1 .9.4.9.4l.1-1.3.6-2.8-1.6-.2z" transform="translate(187.007 759.626)"/>
						<path class="st10" d="M-13.9-497c-1.7-.2-2 2.4-2.1 2.9-.1.5 1.8 1.1 2.4.5s.7-3.3-.3-3.4z" transform="translate(186.946 757.464)"/>
						<path class="st21" d="M-11.9-497l.4 12.8-.2.6-.4-.1-.1-1.9.5 1.1-.4.2-1.7-6.4-.5-4.3h1.5l-1.4 4.6.2 2-.6 3.7-1 .4-.2-.4.9-1 .1.5-.4.1-.5-5.9-.4-5.3 4.2-.7z" transform="translate(189.093 763.036)"/>
						<path class="st7" d="M-14.5-497c-.7-.1-1.4.4-1.5 1.1v.3c0 .7-.1 1.4.4 1.4s1-.2 1.3-.5c.5-.6 1.4-2.2-.2-2.3z" transform="translate(189.854 753.409)"/>
						<path class="st10" d="M-12.3-497s2.6 1.3 3 2.3-.8 3.8-1 4.2.1 1.3-.2 2.5c-.3 1.2-4.6.1-4.8-1s-1.3-5.4-.5-6.2c.9-.9 3.5-1.8 3.5-1.8z" transform="translate(187.895 756.167)"/>
						<path class="st7" d="M-14.5-494.9l-.4-2.1-.6.4-.5 2c0 .4.3.4.6.3.4-.1.7-.4.9-.6z" transform="translate(190.665 754.621)"/>
						<path class="st7" d="M-10.7-496.4l-.8 2.9s-3.9 2.1-4.2 2.4-.6 1.1 0 .9c.6-.2 5.1-1.2 5.7-2.1.7-1.1 1.1-2.4 1.2-3.7 0-.6-.5-1-1.1-1-.3 0-.6.3-.8.6z" transform="translate(187.721 758.942)"/>
						<path class="st10" d="M-14.3-497c-1.7 0-1.7 2.6-1.7 3.2 0 .5 1.9.9 2.5.3s.2-3.5-.8-3.5z" transform="translate(192.525 757.981)"/>
						<path class="st7" d="M-16-496.1c.5 1 .9 2.1 1.1 3.2.3 1 .7.9 1.1.9s-.3-2.2-.6-2.8c-.2-.7-.4-1.5-.6-2.2l-1 .9z" transform="translate(187.291 762.609)"/>
						<path class="st15" d="M-14.1-495.6c.1-.2.5-.2.5.1s-.2.6-.4.6-.1.4-.1.4l.3.2c.1-.3.3-.5.5-.8.2-.3.4-1.2.1-1.5s-2-.6-2.4-.2c-.4.4-.6.5-.1.6.5.1 1.4-.3 1.2.1s-.2.6 0 .6c.1-.1.3-.1.4-.1z" transform="translate(189.644 753.265)"/>
						<path class="st10" d="M-14.1-495.9c-.7 0-1.9-.2-1.9-.4 0-.4.3-.6.7-.7.7 0 2 .4 2 .8s-.5.3-.8.3z" transform="translate(190.036 752.763)"/>
						<path class="st15" d="M-15.9-496.5s-.3-.4 0-.5c.3 0 .6 0 .7.1s-.3.4-.3.4h-.4z" transform="translate(190.295 753)"/>
						<path class="st10" d="M-15.7-497c-.3 0-.3.1-.2.2.1.1.5.1.5.1.8 0 1.6.1 2.3.3.4.1.1-.3-.1-.5-.8-.1-1.7-.1-2.5-.1z" transform="translate(189.756 753.431)"/>
					</g>
				</g>
				<g class="zoom-left">
					<path class="st4" d="M46.3-376.4c-40.3 0-62.3-75-62.3-91.2 0-12.1 30.4-29.4 62.3-29.4 35.9 0 62.3 13.2 62.3 29.4s-22 91.2-62.3 91.2z" transform="translate(294.724 578.064)"/>
					<g transform="translate(290.924 574.263)">
						<defs>
							<path id="SVGID_5_" d="M46.3-376.4c-40.3 0-62.3-75-62.3-91.2 0-12.1 30.4-29.4 62.3-29.4 35.9 0 62.3 13.2 62.3 29.4s-22 91.2-62.3 91.2z"/>
						</defs>
						<clipPath id="SVGID_6_">
							<use xlink:href="#SVGID_5_" overflow="visible"/>
						</clipPath>
						<g clip-path="url(#SVGID_6_)">
							<path class="st9" d="M-16-497h175.9v123.8H-16z" transform="translate(-28.949 -1.732)"/>
							<path class="st10" d="M-16-497h4v5.6h-4z" transform="translate(73.539 79.341)"/>
							<path class="st5" d="M-7.5-470.4c-1.6 0-3.2-.5-4.6-1.3-1.1-.7-2.5-1.2-3.9-1.2v-.5c1.4 0 2.9.5 4.1 1.2 1.3.8 2.8 1.3 4.4 1.3.4 0 .7-.1.9-.4 1.5-1.6 1.2-7.5.7-14.4-.2-3.7-.5-7.5-.5-11.3h.5c0 3.8.2 7.6.5 11.3.5 7.3.8 13-.8 14.7-.4.4-.9.6-1.3.6z" transform="translate(75.992 59.678)"/>
							<path class="st10" d="M-16-497h95.2v33.2H-16z" transform="translate(20.918 89.94)"/>
							<path class="st5" d="M-16-497h74.8v52.8H-16z" transform="translate(45.152 14.748)"/>
							<g transform="translate(52.561 16.925)">
								<defs>
									<path id="SVGID_7_" d="M-16-497h60v48h-60z"/>
								</defs>
								<clipPath id="SVGID_8_">
									<use xlink:href="#SVGID_7_" overflow="visible"/>
								</clipPath>
								<g clip-path="url(#SVGID_8_)">
									<path class="st14" d="M-16-497H85.3v77.8H-16z" transform="translate(-19.238 -11.192)"/>
									<path class="st21" d="M-1.4-497c2.6 0 2.9 2.5 4.4 3.9 1.5 1.5 4 .5 5.7 4.4s-3.4 5.2-3.4 5.2l.6-2.2s2.5 3.9 1.5 6c-1.6 3.5-8.6 2.9-11.8 2.6s-11.6-2.8-11.6-7.4 2.6-4.7 3.1-5.8c.5-1.1-.1-4.1 2.4-5.2 1.8-.8 3.4.4 4.6 0s.6-1.5 4.5-1.5z" transform="translate(22.707 -1.766)"/>
									<path d="M3.9-494c.1 2-.3 4-1.1 5.8h-17.5s-2.2-5.5-1-6.9 14.1-4 19.6 1.1z" fill="#201c58" transform="translate(20.86 39.302)"/>
									<path class="st46" d="M-12.7-495c-1-1-2.6-2.6-3.1-1.8s.1 3.3 2.4 4.4.7-2.6.7-2.6z" transform="translate(9.661 15.1)"/>
									<path class="st46" d="M-15.6-495.5c.1-.6.3-1.5.7-1.5s-.1 1 .2 1.7-1.4.7-1.4.7" transform="translate(11.574 15.377)"/>
									<path class="st5" d="M8.1-490.1c-.3-4.2-3.2-7.5-7.5-6.8-4.2.7-4.5 3.5-7.9 3.7-4.5.3-6.9-1.6-6.9-1.6-.5.7-1.1 1.4-1.7 2-.6.4 3.3 4.8 8.2 5.1 7 .4 7.8 2.3 13 .5s2.8-2.9 2.8-2.9z" transform="translate(11.155 14.858)"/>
									<path class="st5" d="M-15.9-470.5c2.6 1.1 12 .8 15.4.3.6-.1 1.2-.1 1.8-.1 1.9.1 2.4.9 2.4.9.3-1.9.5-13.4-1.8-20-.3-1-.7-1.9-1.3-2.7-.9-1.4-.3-3.7-3.2-4.5-2.9-.8-6.7.2-6.7.2s.4 4-1.5 6-.4 5.5-.8 8.7-5.1 10.9-4.3 11.2z" transform="translate(21.139 14.767)"/>
									<path class="st4" d="M-16-497h3.7v11.7H-16z" transform="translate(22.171 25.578)"/>
									<path d="M-4.7-482.9H-15l-1-14.1h10.3l1 14.1z" fill="#eb63aa" transform="translate(19.394 26.934)"/>
									<g class="st48">
										<path class="st5" d="M-14.8-484.8c.4 2.4-1.2 5.1.4 7.1 1.4.1 2.8.4 4.1.8.3-1.9.5-13.4-1.8-20h-.4c-5.8.7-2.8 9-2.3 12.1z" transform="translate(35.023 22.279)"/>
									</g>
									<path class="st5" d="M-16-497c3.6 0 11.7 1.8 11.7 13.4s-9.3 9.3-9.3 9.3l-.8-1.6s3.9-.4 3.9-6.7c.1-2.6-1-5.1-3.1-6.6" transform="translate(32.731 14.923)"/>
									<path class="st46" d="M-11.2-496.6c-.7-.3-1.5-.4-2.2-.4-.8.1-2.6.6-2.6 1.1s2.4 1 3.6 1.2c.7.1 1.4 0 2.1-.2l-.9-1.7z" transform="translate(29.505 35.584)"/>
									<path class="st46" d="M-14.3-497c-.4 0-1.7 3.8-1.7 7 0 1.8 1.4 3.3 3.2 3.4l-.6-1.2v3.5s1.6.8 2.3 0c-.1-1.3-.4-3.6-.4-3.6l-.6 1.5s3.4.1 3.4-2.8 1.3-7.8-5.6-7.8z" transform="translate(27.823 2.232)"/>
									<path class="st21" d="M-16-495.7c0 .1.6 2.8 2.3 3.3 1.1.3 2.3.3 3.4 0l-1.1-1.1s.1 2 .1 3.2 1.2-.2 1.5 1-3 3.1-2.7 6.2 5.9.6 5.9.6 3.8-13.9-.5-13.9-8.1-1.9-8.9.7z" transform="translate(28.526 .841)"/>
									<path class="st11" d="M-14.8-497c-.5 1.1-1.6 2.5-1.1 2.6.5.1.9.2 1.4.2l-.3-2.8z" transform="translate(27.113 6.733)"/>
									<g class="st48">
										<path class="st4" d="M21.6-480.8v21.4L-16-497H5.4l16.2 16.2z" transform="translate(22.425 -.003)"/>
									</g>
									<g class="st48">
										<path class="st4" d="M29.3-451.7H-.9L-16-466.8V-497l45.3 45.3z" transform="translate(-.001 2.712)"/>
									</g>
									<g class="st50">
										<path class="st4" d="M-16-497l17 17H-.9L-16-495.1v-1.9z" transform="translate(-.001 30.999)"/>
									</g>
									<g class="st50">
										<path class="st4" d="M29.3-451.7H16l-32-32V-497l45.3 45.3z" transform="translate(0 2.712)"/>
									</g>
									<g class="st50">
										<path class="st4" d="M21.6-480.8v21.4L-16-497H5.4l16.2 16.2z" transform="translate(22.425 -.003)"/>
									</g>
								</g>
							</g>
							<path class="st21" d="M-16-497h12v4.2h-12z" transform="translate(76.552 9.812)"/>
							<circle class="st5" cx="-14.7" cy="-495.7" r="1.3" transform="translate(81.268 10.64)"/>
							<g>
								<path class="st16" d="M-16-497s2.9 3.6 3.8 4.6-3.8 2.5-3.8 2.5v-7.1z" transform="translate(35.513 27.941)"/>
								<path class="st7" d="M-6.8-497c-9 0-9.8 8.9-8.9 16.2s11 7.6 14.7 7 4.6-5.6 4-11.5S.2-497-6.8-497z" transform="translate(17.568 17.797)"/>
								<path class="st7" d="M21.7-443c-1.5-16.1-7.5-20-2.1-33.4.1-.3.2-.6.2-1 .2-4.5-4.9-9.3-11.8-9.3-7.2 0-6.6-.6-6.6-7.3 0-4.9-2.2-2.7-3.5-1.1-.5.6-.7 1.4-.7 2.2.3 5.8-3.9 5.3-6.5 5.9-2.8.6-4 13.8-1.7 20.2 2.1 5.9-3.2 10.6-5 25.2-.2 1.8 1.1 3.5 2.9 3.7h.5l31-1.5c1.8-.1 3.2-1.7 3.2-3.5.1 0 .1-.1.1-.1z" transform="translate(12.703 35)"/>
								<path class="st5" d="M7.6-495.2c-2.9 2.8-5.6 5.7-8.1 8.8-3.1 3.9-13.7 7.1-13.7 7.1s-4.2-5.1 0-9.1S3.7-497 3.7-497l3.9 1.8z" transform="translate(-25.974 138.124)"/>
								<path class="st5" d="M-11.4-495.7l-3.7 9.7s-1.6 7.6-.5 7.8c1.8.6 3.7.9 5.6 1 4.8 0 11.6-5.2 11.6-9.9 0-1.1.2-2.3-3.3-2.3-1.4 0-8.3 4.4-8.3 4.4l2.1 1.4 5.8-13.3-9.3 1.2z" transform="translate(12.298 146.32)"/>
								<path class="st7" d="M16.2-497c-8.3 2.5-17.6 22.2-23.7 35.3s-10.7 21.5-7.3 21.5S-.6-461.9 7-466.3s17.4-3.6 17.9-12.9-8.7-17.8-8.7-17.8z" transform="translate(-12.766 45.029)"/>
								<path class="st19" d="M-10.7-497c2.6.1.2 2.7 4.6 1.9s5.1.5 5.4 4-4.4 6.8-1.9 10.6c1.4 2.2-2.6 2.2-5.1 1.9s-3.4 2.4-7-3.3 1-15.2 4-15.1z" transform="translate(14.733 19.774)"/>
								<path class="st7" d="M-12.9-496.5c-.8-.6-1.9-.6-2.6 0-1.4 1 .6 4.3 2.6 4.4" transform="translate(25.587 30.093)"/>
								<path class="st13" d="M-13-496.4c-1.4 9.9-4.1 14.8-2.6 17.5s9.2 3.9 9.4 6.3-4.1 20-6 26.7-1.5 8.7-1.6 9.3 15.2 1.8 17.3-1.8 15.6-28.2 19.5-35.5 6.1-17 1.4-20.8-37.4-1.7-37.4-1.7z" transform="translate(10.145 90.167)"/>
								<path class="st12" d="M9.3-497s-6.8 23.8-8.1 26.7S-16-455.4-16-455.4s3.5 6.4 7 6.2 24-12.1 27.1-19.4 5.3-12.7 5.3-12.7L9.3-497z" transform="translate(-12.766 97.845)"/>
								<path class="st6" d="M-5.7-497s-9.9 1.4-7 12.2c0 0-1 19.5-1.8 25.5s-2 17.4-1.5 17.9 6.3 5 20.7 5.6 18.5-.7 20.3-4.2-1.9-30.5-4.6-33.7" transform="translate(11.365 42.35)"/>
								<path class="st7" d="M-9.9-497c10.5 1.8 16 18.1 18.4 21.1s6.3-12.2 11.5-13.4-3.8 18.3-7.5 24.5-28.1-2.3-28.5-10S-9.9-497-9.9-497z" transform="translate(33.762 45.675)"/>
								<path class="st6" d="M5.1-497c-6.4 3.9-18.5 21.6-21 27.2-.2 4.9 2.2 15.4 4.5 17.3s7.4-9.2 11.2-12S7-471.8 7-481.9 5.1-497 5.1-497z" transform="translate(-1.702 43.07)"/>
								<path class="st6" d="M-5.5-468.4c.2 5.1 15.5 10.8 15.5 10.8s16.3-14.3 7.6-23.8c-6.7-7.3-10.1-13.5-14.8-14S-16-497-16-497l10.5 28.6z" transform="translate(21.703 43.01)"/>
							</g>
						</g>
					</g>
				</g>
			</g>
		</svg>
	</div>
</div>


<?php if ( get_field( 'would_you_like_to_show_the_who_we_serve_block' ) == 1 ) : ?>
	<?php get_template_part( 'template-parts/components/page-who_we_serve' ); ?>
<?php endif; ?>
