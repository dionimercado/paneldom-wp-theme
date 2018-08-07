<?php get_header() ?>
<section class="section-slider">
  <?php echo do_shortcode('[rev_slider alias="home-slider"]') ?>
</section>
<section class="section-about my-5 py-5">
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <img class="img-fluid" src="<?php echo get_template_directory_uri() ?>/assets/images/about.jpg" alt="<?php bloginfo('name') ?>">
      </div>
      <div class="col-md-6">
        <h2>Bienvenidos a Paneldom</h2>
        <p>Los sistemas modernos de construcción son asociados a tecnologías innovadoras y a los nuevos materiales, sistemas livianos que ofrecen la posibilidad de una mayor rapidez de ejecución por montaje.</p>
        <p>Estas características influyen en gran medida en el aprovechamiento de los materiales y de la mano de obra, ya que la planificación se hace más sencilla, pudiendo cumplir las metas fijadas en cuanto a los recursos económicos y de tiempo.</p>
      </div>
    </div>
  </div>
</section>
<?php get_footer() ?>
