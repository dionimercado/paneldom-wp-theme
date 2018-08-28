<?php get_header() ?>

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

<?php get_footer() ?>
