<!doctype html>

<!--[if lt IE 7]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8 lt-ie7"><![endif]-->
<!--[if (IE 7)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9"><![endif]-->
<!--[if gt IE 8]><!--> <html <?php language_attributes(); ?> class="no-js"><!--<![endif]-->

	<head>

		<meta charset="utf-8">

		<?php // force Internet Explorer to use the latest rendering engine available ?>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">

		<meta name="HandheldFriendly" content="True">
		<meta name="MobileOptimized" content="320">
		<meta name="viewport" content="width=device-width, initial-scale=1"/>
		<meta name="theme-color" content="#ffffff">

		<?php wp_head(); ?>
		
		<!-- Font Awesome -->
		<script src="https://kit.fontawesome.com/0fa7312826.js" crossorigin="anonymous"></script>
		
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-61079838-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-61079838-1');
</script>
		
	</head>

	<body <?php body_class('c5-body'); ?>>
		<header id="header" role="banner">

			<?php $announcement = get_field( 'announcements_-_banner_text', 'option' ); ?>
			<?php if ( $announcement ) { ?>
				<?php $banner_text = get_field( 'announcements_-_banner_text', 'option' ); ?>
				<?php $banner_location = get_field( 'announcements_-_only_show_on_homepage', 'option' ); ?>
				<?php $banner_color = get_field( 'announcements_-_banner_background_color', 'option' ); ?>
				<?php $banner_link = get_field( 'announcements_-_banner_link', 'option' ); ?>
				<?php if ( $banner_location == "Homepage" && is_front_page() ) { ?>
					<a id="announcement" href="<?php echo $banner_link['url']; ?>" target="<?php echo $banner_link['target']; ?>" 
						style="background-color: <?php echo $banner_color; ?>;">
							<?php echo $banner_text; ?>
					</a>
				<?php } elseif ( $banner_location == "All pages" ) { ?>
					<a id="announcement" href="<?php echo $banner_link['url']; ?>" target="<?php echo $banner_link['target']; ?>" 
						style="background-color: <?php echo $banner_color; ?>;">
							<?php echo $banner_text; ?>
					</a>
				<?php } ?>
			<?php } ?>

			<div class="header-container">

				<div class="site-logo">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="logo" aria-label="Home">
						<?php if ( get_field( 'footer_-_logo', 'option' ) ) { ?>
							<img class="logo-light" src="<?php the_field( 'footer_-_logo', 'option' ); ?>" alt="Telepsychiatry Companies" />
						<?php } ?>
						<?php if ( get_field( 'footer_-_logo_dark', 'option' ) ) { ?>
							<img class="logo-dark" src="<?php the_field( 'footer_-_logo_dark', 'option' ); ?>" alt="Telepsychiatry Companies" />
						<?php } ?>
					</a>
				</div>

				<div class="nav-container">

					<div class="main-nav">

						<div id="menu">
							<?php
								wp_nav_menu( array(
									'theme_location' => 'main-menu',
									'container'		 => 'nav'
								) );
							?>
						</div>

					</div>

				</div>

				<div id="toggle">
					<div></div>
					<div></div>
					<div></div>
				</div>

			</div>

		</header>

		<div id="mobile-menu">
			<div class="flex">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="logo" aria-label="Home">
					<?php if ( get_field( 'footer_-_logo_dark', 'option' ) ) { ?>
						<img class="logo-dark" src="<?php the_field( 'footer_-_logo_dark', 'option' ); ?>" alt="Telepsychiatry Companies" />
					<?php } ?>
				</a>
				<img class="menu-close" src="<?php echo get_template_directory_uri(); ?>/assets/img/icon-x.svg" alt="Telepsychiatry Companies" />
			</div>
			<?php
				wp_nav_menu( array(
					'theme_location' => 'main-menu',
					'container'		 => 'nav'
				) );
			?>
		</div>
