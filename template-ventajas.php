<?php

/* Template Name: Ventajas */
get_header();

?>

<section class="page-ventajas mt-5 pt-5">
  <div class="container">
    <div class="page-header">
      <h1><?php the_title() ?></h1>
    </div>
    <div class="row">
      <?php while( have_rows('ventajas') ): the_row(); ?>
        <div class="col-md-6 mb-5">
          <h2><?php echo get_sub_field('title') ?></h2>
          <?php echo wpautop(get_sub_field('description')); ?>
        </div>
      <?php endwhile; ?>
    </div>
  </div>
</section>

<?php get_footer() ?>
