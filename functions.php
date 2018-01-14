<?php 

//removes margin-top from header
add_filter('show_admin_bar', '__return_false');


function add_theme_scripts() {

  //********** Enqueue Styles ************//

  //Materialize CSS
  wp_enqueue_style( 'materialize-css', 'https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css', array(), null, 'all');
  wp_enqueue_style( 'materialize-css-icon', 'https://fonts.googleapis.com/icon?family=Material+Icons', array(), null, 'all');

  wp_enqueue_style( 'style', get_stylesheet_uri() );

  // // //Enqueue Scripts
  wp_enqueue_script( 'materialize-css-js', 'https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js', array('jquery'), '', true);
  wp_enqueue_script( 'headroom-js', 'https://unpkg.com/headroom.js@0.9.4/dist/headroom.js', null, '', true);
  wp_enqueue_script( 'cover-banner', get_template_directory_uri() . '/assets/js/cover-banner.js', null, '', true);
  wp_enqueue_script('scrollreveal', 'https://unpkg.com/scrollreveal/dist/scrollreveal.min.js', '', null, true);
  wp_enqueue_script( 'main', get_template_directory_uri() . '/assets/js/main-js.js', array('jquery'), '', true);
}

add_action( 'wp_enqueue_scripts', 'add_theme_scripts' );

?>