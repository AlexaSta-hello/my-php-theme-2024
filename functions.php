<?php


function myphp2024_stylesheets() {
    wp_enqueue_style( 'style', get_stylesheet_uri());
}
add_action( 'wp_enqueue_scripts', 'myphp2024_stylesheets' );

// Register Menus
function register_my_menus() {
  register_nav_menus(
    array(
        'main-menu' => __( 'Main Menu' ),
        'mobile-menu' => __( 'Mobilmenü' ),
        'secondary-menu' => __( 'Footer Menu' ),
        'extra-menu' => __('Zusatz Menu')
        )
   );
 }
 add_action( 'init', 'register_my_menus' );

 // Register Widgets
 function register_my_widgets() {

  register_sidebar (array (
    'name'    => 'Header Widgets',
    'id'      => 'header-widgets',
    'before_widget'   => '<div>',
    'after_widget'    => '</div>',
  ));
    
  register_sidebar (array (
      'name'    => 'Footer Widgets',
      'id'      => 'footer-widgets',
      'before_widget'   => '<div>',
      'after_widget'    => '</div>',
  ));

  register_sidebar (array (
    'name'    => 'Sidebar Widgets',
    'id'      => 'side-widgets',
    'before_widget'   => '<div>',
    'after_widget'    => '</div>',
  ));
}

add_action ('widgets_init', 'register_my_widgets');

/* bewirkt, dass unter Beitrag bearbeiten ein Button angezeigt wird,
mit dem ich ein Beitragsbild (Startseite) festlegen kann, 
das aber nicht im Beitrag auftaucht. Damit das Beitragsbild auch 
angezeigt wird -> function in ondex.php aufrufen*/
add_theme_support('post-thumbnails'); // auf der index