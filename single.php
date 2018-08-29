<!doctype html>
<html <?php language_attributes() ?>>
  <head>
    <meta charset="<?php bloginfo('charset') ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?php wp_head() ?>
  </head>
  <body <?php body_class() ?>>

    <section class="mt-5 pt-5">
      <div class="container">
        <div class="page-header">
          <h1><?php the_title() ?></h1>
        </div>
        <div class="row">
          <div class="col-12">
            <?php while( have_posts() ) : the_post() ?>
              <?php the_content() ?>
            <?php endwhile; ?>
          </div>
        </div>
      </div>
    </section>
    <?php wp_footer() ?>
  </body>
</html>
