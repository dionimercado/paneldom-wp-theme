<?php

// Set content width value based on the theme's design
if ( ! isset( $content_width ) )
	$content_width = 1140;

// Register Theme Features
function paneldom_theme_setup()  {

	// Add theme support for Featured Images
	add_theme_support( 'post-thumbnails' );

	// Add theme support for HTML5 Semantic Markup
	add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption' ) );

	// Add theme support for document Title tag
	add_theme_support( 'title-tag' );

  // Add support for two custom navigation menus.
  register_nav_menus( array(
      'primary'   => __( 'Primary Menu', 'paneldom' ),
      'footer-links' => __('Footer Links', 'paneldom' )
  ) );
}
add_action( 'after_setup_theme', 'paneldom_theme_setup' );

// Register Styles and Scripts
function paneldom_scripts() {

	wp_enqueue_style( 'paneldom', get_template_directory_uri() . '/assets/css/paneldom.css', array( 'bootstrap' ), uniqid() );
	wp_enqueue_style( 'bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css', false, '4.1.3' );
  wp_enqueue_style( 'google-fonts', 'https://fonts.googleapis.com/css?family=Oswald:400,600', array(), null, 'all' );
  wp_enqueue_style( 'fontawesome', 'https://use.fontawesome.com/releases/v5.2.0/css/all.css', array(), null, 'all' );


  wp_enqueue_script( 'popper', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js', array( 'jquery'), '1.14.3', true );
  wp_enqueue_script( 'bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js', array( 'popper' ), '4.1.3', true );



}
add_action( 'wp_enqueue_scripts', 'paneldom_scripts' );

// Register Custom Navigation Walker
require_once get_stylesheet_directory() . '/inc/class-wp-bootstrap-navwalker.php';

?>
