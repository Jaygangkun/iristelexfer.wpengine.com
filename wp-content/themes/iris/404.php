<?php get_header(); ?>

    <section id="notFoundWrap" role="main">

      <div class="container">
        <div class="row">
          <div class="col-xs-12">

            <article id="post-0" class="post not-found">

              <div class="outline-wrap">
                <span>404</span>
              </div>

              <section class="entry-content">
                <header class="header">
                  <h1 class="sr-only">Page not found</h1>
                </header>

                <p><?php _e( 'Whoops, something went wrong.' ); ?></p>

                <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="btn btn-white">Back home</a>

              </section>

            </article>

          </div>
        </div>
      </div>

    </section>

<?php get_footer(); ?>
