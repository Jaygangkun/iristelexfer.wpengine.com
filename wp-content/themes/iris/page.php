<?php get_header(); ?>

  <main id="content" <?php post_class(); ?> role="main">

    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

      <section class="default-page">

        <div class="inner">
          <div class="flex column">

              <header class="title-only clear-header">
                <h1><?php the_title(); ?></h1>
              </header>

              <article class="post-content">

                <?php the_content(); ?>

              </article>

            </div><!-- end .flex -->

          </div><!-- end .inner -->

      </section>

    <?php endwhile; endif; ?>

  </main>

<?php get_footer(); ?>
