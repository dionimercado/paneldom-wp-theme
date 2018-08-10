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



// Register Custom Post Type
function portfolio_post_type() {

	$labels = array(
		'name'                  => _x( 'Portfafolios', 'Post Type General Name', 'paneldom' ),
		'singular_name'         => _x( 'Portafolio', 'Post Type Singular Name', 'paneldom' ),
		'menu_name'             => __( 'Portafolio', 'paneldom' ),
		'name_admin_bar'        => __( 'Post Type', 'paneldom' ),
		'archives'              => __( 'Item Archives', 'paneldom' ),
		'attributes'            => __( 'Item Attributes', 'paneldom' ),
		'parent_item_colon'     => __( 'Parent Item:', 'paneldom' ),
		'all_items'             => __( 'All Items', 'paneldom' ),
		'add_new_item'          => __( 'Add New Item', 'paneldom' ),
		'add_new'               => __( 'Add New', 'paneldom' ),
		'new_item'              => __( 'New Item', 'paneldom' ),
		'edit_item'             => __( 'Edit Item', 'paneldom' ),
		'update_item'           => __( 'Update Item', 'paneldom' ),
		'view_item'             => __( 'View Item', 'paneldom' ),
		'view_items'            => __( 'View Items', 'paneldom' ),
		'search_items'          => __( 'Search Item', 'paneldom' ),
		'not_found'             => __( 'Not found', 'paneldom' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'paneldom' ),
		'featured_image'        => __( 'Featured Image', 'paneldom' ),
		'set_featured_image'    => __( 'Set featured image', 'paneldom' ),
		'remove_featured_image' => __( 'Remove featured image', 'paneldom' ),
		'use_featured_image'    => __( 'Use as featured image', 'paneldom' ),
		'insert_into_item'      => __( 'Insert into item', 'paneldom' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'paneldom' ),
		'items_list'            => __( 'Items list', 'paneldom' ),
		'items_list_navigation' => __( 'Items list navigation', 'paneldom' ),
		'filter_items_list'     => __( 'Filter items list', 'paneldom' ),
	);
	$args = array(
		'label'                 => __( 'Portafolio', 'paneldom' ),
		'description'           => __( 'Post Type Description', 'paneldom' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-portfolio',
		'show_in_admin_bar'     => false,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => 'portafolio',
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'portfolio', $args );

}
add_action( 'init', 'portfolio_post_type', 0 );
