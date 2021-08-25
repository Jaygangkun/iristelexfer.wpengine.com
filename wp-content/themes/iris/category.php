<?php get_header(); ?>

  <main id="content" <?php post_class(); ?> role="main">

    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

      <section class="default-page">

        <div class="container">
          <div class="row">

            <div class="col-xs-12 col-sm-9 col-md-8">

              <header class="title-only clear-header">
                <h1 class="entry-title">
                  <span><?php _e( 'Category: ', 'blankslate' ); ?></span>
                  <?php single_cat_title(); ?>
                </h1>
                <?php if ( '' != category_description() ) echo apply_filters( 'archive_meta', '<p class="archive-meta">' . category_description() . '</p>' ); ?>
              </header>

              <article class="post-content">

                <?php the_content(); ?>

              </article>

            </div>

            <div class="col-xs-12 col-sm-3 col-md-4">

              <aside>

                <?php get_sidebar(); ?>

              </aside>

            </div>

          </div>
        </div>

      </section>

    <?php endwhile; endif; ?>

  </main>

<?php get_footer(); ?>
