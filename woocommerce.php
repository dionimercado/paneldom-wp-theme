<?php get_header() ?>

<section class="mt-5 pt-5">
  <div class="container">
    <?php if( !is_product() ) : ?>
    <div class="page-header">
      <h1><?php _e('Productos'); ?></h1>
    </div>
    <?php else : ?>
      <div class="page-header right-skew">
        <h1><?php the_title(); ?></h1>
      </div>
    <?php endif; ?>
    <div class="row">
      <div class="col-12">
        <?php woocommerce_content() ?>
      </div>
    </div>
  </div>
</section>

<?php get_footer() ?>
