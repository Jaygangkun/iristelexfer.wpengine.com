<?php
/*
 * Template Name: Gated Landing
 * Template Post Type: page
 */
?>

<?php get_header('gated-landing'); ?>

<main id="content" class="clear-header gated-landing-page" role="main">

	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<section class="gated-landing-hero">
			<div class="inner">
				<div class="flex-row">
					<div class="col-50">
						<div>
							<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="logo" aria-label="Home">
								<?php if ( get_field( 'footer_-_logo_dark', 'option' ) ) { ?>
									<img class="logo-dark" src="<?php the_field( 'footer_-_logo_dark', 'option' ); ?>" alt="Telepsychiatry Companies" />
								<?php } ?>
							</a>
						</div>
						<div class="category-pill-wrap">
							<span class="category-pill" style="background-color:<?php the_field('category_pill_background_color')?>"><?php the_field('category_pill_text')?></span>
						</div>
						<h3 class="gated-landing-hero__subtitle"><?php the_field('subtitle')?></h3>
						<h1 class="gated-landing-hero__title"><?php the_field('title')?></h1>
						<p class="gated-landing-hero__date"><?php the_field('date')?></p>
					</div>
					<div class="col-50 gated-landing-hero-col-img">
						<?php
						$img = get_field('image');
						if($img){
							?>
							<img class="gated-landing-hero__img" src="<?php echo $img['url']?>" alt="<?php echo $img['alt']?>">
							<?php
						}

						?>
					</div>
				</div>
			</div>
			<div class="gated-landing-hero-wave"></div>
		</section>
		<section class="gated-landing-content">
			<div class="inner">
				<div class="flex-row">
					<div class="col-50">
						<div class="gated-landing-content-wrap"><?php the_field('content')?></div>
					</div>
					<div class="col-50">
						<div class="gated-landing-form-container">
							<div class="gated-landing-form-head" style="background-color: <?php the_field('form_title_background_color')?>">
								<h2 class="gated-landing-form-title"><?php the_field('form_title')?></h2>
							</div>
							<div class="gated-landing-form-body">
								<?php the_field('form_iframe_embed')?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
	<?php endwhile; endif; ?>

</main>

<?php get_footer('gated-landing'); ?>