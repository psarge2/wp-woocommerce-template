<?php
/**
 * Functions and definitions
 *
 */

  //SCRIPTS
 function load_stylesheets(){

  wp_register_style('stylesheet', get_template_directory_uri() . './style.css', '', 1, 'all');
  wp_enqueue_style('stylesheet');

  wp_register_style('custom', get_template_directory_uri() . '../../woocommerce-theme/assets/sass/style.css', '', 1, 'all');
  wp_enqueue_style('custom');

 }

 add_action('wp_enqueue_scripts',  'load_stylesheets');

 function load_javascript(){

  wp_register_script('custom', get_template_directory_uri() . '../../woocommerce-theme/assets/js/app.js', 'jquery', 1, true);
  wp_enqueue_script('custom');

 }

 add_action('wp_enqueue_scriptes', 'load_javascript');


function woocommercetheme_register_styles(){

  $version = wp_get_theme()->get( 'Version' );
  wp_enqueue_style('woocommercetheme-bootstrap', "https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css", array(), '4.4.1', 'all');
  wp_enqueue_style('woocommercetheme-fontawesome', "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css", array(), '5.13.0', 'all');


}

add_action( 'wp_enqueue_scripts', 'woocommercetheme_register_styles' );


function woocommercetheme_register_scripts(){

  $version = wp_get_theme()->get( 'Version' );
  
  wp_enqueue_style('woocommercetheme-jquery', "https://code.jquery.com/jquery-3.4.1.slim.min.js", array(), '3.4.1', 'true');
  wp_enqueue_style('woocommercetheme-popper', "https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js", array(), '1.16.0', 'true');
  wp_enqueue_style('woocommercetheme-bootstrap', "https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js", array(), '4.4.1', 'true');



}

//MENUS
function woocommercetheme_menus(){

  $locations = array(
    'primary' => "Top Menu",
    'footer' => "Footer Menu Items"
  );

  register_nav_menus($locations);
}

add_action('init', 'woocommercetheme_menus');

//Add Support
add_theme_support('post-thumbnails');

//Add image sizes
add_image_size('post_image', 1100, 550, false);

// Add a widget
//SIDEBAR
register_sidebar(
  array(
    'name' => 'Page Sidebar',
    'id' => 'page-sidebar',
    'class' => '',
    'before_title' => '<h4>',
    'after_title' => '</h4>'
  )
);

//BLOG SIDEBAR
register_sidebar(
  array(
    'name' => 'Blog Sidebar',
    'id' => 'blog-sidebar',
    'class' => '',
    'before_title' => '<h4>',
    'after_title' => '</h4>'
  )
);

function mytheme_add_woocommerce_support() {
  add_theme_support( 'woocommerce' );
}

add_action( 'after_setup_theme', 'mytheme_add_woocommerce_support' );
