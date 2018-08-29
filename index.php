<?php

/* Template Name: Home */
get_header();

?>
<section class="section-slider">
  <?php echo do_shortcode('[rev_slider alias="home-slider"]') ?>
</section>
<section class="section-about">
  <div class="container">
    <div class="row">
      <div class="col-md-5 col-lg-4">
        <div class="welcome-box text-dark">
          <h2>Paneldom</h2>
          <p>Somos una empresa a la vanguardia de la tecnologia, implementando nuevas técnicas y productos de construccion para que las estructuras sean mas ligeras y estructuralmente presenten un mejor comportamiento y al mismo tiempo sean más econcónomicas.</p>
          <p>La inminente llegada de nuevos procesos constructivos debido a la necesidad de reducir los costos y aumentar la calidad de las obras ha originado el nacimiento de la compañía PANELDOM.</p>
        </div>
      </div>
      <div class="col-md-7 col-lg-8">
        <div class="row d-none">
          <div class="col-lg-6">
            <img class="img-fluid" src="<?php echo get_template_directory_uri() ?>/assets/images/about.jpg" alt="<?php bloginfo('name') ?>">
          </div>
        </div>
        <div class="row">
          <div class="col-12">
            <?php if( have_rows('highlights') ): ?>

            <div class="highlights-carousel owl-carousel owl-theme">
              <?php while( have_rows('highlights') ): the_row();

            		// vars
            		$image = get_sub_field('image');
            		$title = get_sub_field('title');
            		$content = get_sub_field('description');

            		?>
                <div class="item">
                  <div class="row">
                    <div class="col-lg-6">
                      <div class="highlight-text p-5 arrow">
                        <h3><?php echo $title; ?></h3>
                        <p><?php echo $content; ?></p>
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="grid h-100 bg-white d-flex my-auto">
                        <figure class="effect-cheff">
                          <img class="img-fluid" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'] ?>" />
                        </figure>
                      </div>
                    </div>
                  </div>
                </div>
              <?php endwhile ?>
            </div>
          <?php endif; ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="section-portfolio">
  <div class="container">
    <div class="page-header left-skew">
      <h1><?php _e('Trabajos Recientes') ?></h1>
    </div>
    <div class="row">
      <div class="col-12">
        <div id="carousel" class="portfolio-carousel owl-carousel owl-theme">
          <?php
          $portfolio = new WP_Query(array('post_type' => 'portfolio'));
          while($portfolio->have_posts()) : $portfolio->the_post();
          $img_src = wp_get_attachment_image_url( get_post_thumbnail_id($post->ID), 'full' );
                // $img_srcset = wp_get_attachment_image_srcset( get_post_thumbnail_id($post->ID), 'full' );
          ?>
            <div class="item">
              <div class="portfolio-item">
                <?php if( has_post_thumbnail() ) : ?>
                  <figure>
                    <a data-toggle="modal" data-target="#portfolio-<?php echo get_the_ID() ?>" href="javascript:;" class="overlay"></a>
                    <img class="img-fluid" src="<?php echo esc_url( $img_src ); ?>&amp;resize=300,200" alt="<?php the_title() ?>">
                    <figcaption>
                      <h3><a data-toggle="modal" data-target="#portfolio-<?php echo get_the_ID() ?>" href="javascript:;"><?php the_title() ?></a></h3>
                    </figcaption>
                  </figure>
                <?php endif; ?>
              </div>
            </div>
          <?php endwhile; wp_reset_postdata() ?>
        </div>
      </div>
    </div>
  </div>
  <?php
  $portfolio = new WP_Query(array('post_type' => 'portfolio'));
  while($portfolio->have_posts()) : $portfolio->the_post();
  ?>
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
<?php endwhile; wp_reset_postdata() ?>

</section>

<section id="testimonials" class="testimonials py-5 mb-5 bg-light text-center">
  <header class="block-header">
    <h2><?php _e( 'Testimonials' ) ?></h2>
  </header>
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="testimonials-carousel owl-carousel owl-theme">
          <?php
            $testimonials = new WP_Query( array( 'post_type' => 'jetpack-testimonial', 'showposts' => 3, 'orderby' => 'rand' ) );
            while( $testimonials->have_posts() ) : $testimonials->the_post();
          ?>
          <div>
            <div class="testimonial testimonial-single">
              <div class="author-box">
                <span class="avatar">
                  <?php
                  if ( has_post_thumbnail() ) {
                      the_post_thumbnail();
                  }
                  else {
                      echo '<img src="' . get_bloginfo( 'stylesheet_directory' ) . '/assets/images/user.png" />';
                  }
                  ?>
                </span>
              </div>
              <div class="testimonial-holder text-center text-lg-left">
                <blockquote>
                  <?php the_content() ?>
                </blockquote>
                <div class="author-info">
                  <h6 class="author-name"><?php the_title() ?></h6>
                </div>
              </div>
            </div>
          </div>
          <?php endwhile; wp_reset_postdata() ?>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="ig-feed">
  <div class="container">
    <div class="page-header left-skew">
      <a class="text-dark float-right mt-2" href="https://www.instagram.com/paneldomrd" target="_blank"><i class="fab fa-instagram"></i> @Paneldom</a>
      <h1><?php _e('Actualizaciones <span class="d-none d-lg-inline-block">Recientes</span>') ?></h1>
    </div>
    <?php echo do_shortcode('[elfsight_instagram_feed id="1"]') ?>
  </div>
</section>

<?php get_footer() ?>
