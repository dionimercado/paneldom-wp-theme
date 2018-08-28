<?php get_header() ?>

<section class="section-portfolio">
  <div class="container">
    <div class="page-header left-skew">
      <h1><?php _e('Nuestros Trabajos') ?></h1>
    </div>
    <div class="row">
      <?php
      $portfolio = new WP_Query(array('post_type' => 'portfolio'));
      while($portfolio->have_posts()) : $portfolio->the_post();
      $img_src = wp_get_attachment_image_url( get_post_thumbnail_id($post->ID), 'full' );
            // $img_srcset = wp_get_attachment_image_srcset( get_post_thumbnail_id($post->ID), 'full' );
      ?>
        <div class="col-md-4">
          <div class="portfolio-item mb-3">
            <?php if( has_post_thumbnail() ) : ?>
              <figure>
                <a data-toggle="modal" data-target="#portfolio-<?php echo get_the_ID() ?>" href="javascript:;" class="overlay"></a>
                <img class="img-fluid w-100" src="<?php echo esc_url( $img_src ); ?>&amp;resize=300,200" alt="<?php the_title() ?>">
                <figcaption>
                  <h3><a data-toggle="modal" data-target="#portfolio-<?php echo get_the_ID() ?>" href="javascript:;"><?php the_title() ?></a></h3>
                </figcaption>
              </figure>
            <?php endif; ?>
          </div>
          <!-- Modal -->
          <div class="modal fade" id="portfolio-<?php echo get_the_ID() ?>" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h2 class="modal-title" id="exampleModalLabel"><?php the_title() ?></h2>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <?php the_content() ?>
                </div>
              </div>
            </div>
          </div>
        </div>
      <?php endwhile; wp_reset_postdata() ?>
    </div>
  </div>
</section>

<?php get_footer() ?>
