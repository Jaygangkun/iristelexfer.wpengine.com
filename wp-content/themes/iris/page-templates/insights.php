<?php
/*
 * Template Name: Insight Center
 * Template Post Type: page
 */
?>

<?php
get_header();

$categories = get_terms( [
	'taxonomy' => 'insight_categories',
] );

$topics = get_terms( [
	'taxonomy' => 'insight_topics',
] );

?>

<main id="content" class="clear-header " role="main">
	
<section class="post-featured-section intro dark insights-header">
	<div class="inner">
		<div class="post-featured">
			<div class="post-featured-title">
				<h1 class="h2"><?php the_field('header_title'); ?></h1>
				<p><?php the_field('header_subtitle'); ?></p>
			</div><!-- end .post-featured-title -->

			<div class="post-featured-image img-fluid">
				<img src="<?php the_field('header_image') ?>" />
			</div><!-- end .post-featured-image -->
		</div><!-- end .post-featured -->
	</div><!-- end .inner -->

	<div class="post-section-wave"></div>
</section>

<section class="insights-filter">
	<div class="inner">
		<div class="filter">
			<p>Filter</p>
			<select class="insight-cat">
				<option selected value="">By Category</option>
				<?php foreach($categories as $c): ?>
					<option value="<?=$c->slug;?>"><?=$c->name;?></option>
				<?php endforeach; ?>
			</select>
			
			<select class="insight-topic">
				<option selected value="">By Topic</option>
				<?php foreach($topics as $t): ?>
				<option value="<?=$t->slug;?>"><?=$t->name;?></option>
				<?php endforeach; ?>
			</select>
		</div><!-- end .filter -->
	</div><!-- end .inner -->
</section>

<section class="posts-grid-section insights-posts">
	<div class="inner">
		<div class="posts-grid">
		</div><!-- end .posts-grid -->
	</div>
</section>

</main>

<?php get_footer(); ?>