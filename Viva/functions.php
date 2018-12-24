<?php
require_once(get_template_directory().'/inc/initalization.php');

function admin_style() {
  wp_enqueue_style('Flaticon', get_template_directory_uri().'/fonts/flaticon/font/flaticon.css' );
}
add_action('admin_enqueue_scripts', 'admin_style');
function Viva_scripts_method() {

 //************************script enqueue**************************\\ 

}
add_action( 'wp_enqueue_scripts', 'Viva_scripts_method' );

// add_action( 'after_setup_theme', 'Viva_theme_setup' );
// function Viva_theme_setup() {
//     add_image_size( 'small-thumb', 350, 218 ); 
//     add_image_size( 'fresh-thumb', 534, 390 ); 
//     add_image_size( 'sidebar-thumb', 363, 162);
//     add_image_size('inner-slide-thumb',848, 565);
//     add_image_size('banqute_slide-thumb',1140,760);
//     add_image_size('single_page-thumb',1140,560);
//     add_image_size('banqute-thumb',1140,760);
//     add_image_size('service-cover-thumb', 1140, 377);
//     add_image_size('service-cover-thumb', 360,240);
//     add_image_size('related-thumb', 263, 222);
//     add_image_size('gall-big-thumb', 350, 320);
//     add_image_size('gall-big-thumb', 350, 197);
// }

add_action( 'widgets_init', 'Viva_widgets_init' );
function Viva_widgets_init() 
  {
    register_sidebar( array(
        'name' => __( 'Footer widget', 'VivaOR' ),
        'id' => 'sidebar-1',
        'description' => __( 'Widgets in this area will be shown on all posts and pages.', 'theme-slug' ),
        'before_widget' => '<div class="col-md-3 col-md-push-1">',
     'after_widget'  => '</div>',
     'before_title'  => '<h4>',
      'after_title'   => '</h4>',
    ) );
    register_sidebar( array(
        'name' => __( 'Footer widget', 'VivaOR' ),
        'id' => 'sidebar-2',
        'description' => __( 'Widgets in this area will be shown on all posts and pages.', 'theme-slug' ),
        'before_widget' => '<div class="col-md-3 col-md-push-1">',
     'after_widget'  => '</div>',
     'before_title'  => '<h4>',
      'after_title'   => '</h4>',
    ) );
    register_sidebar( array(
        'name' => __( 'Footer widget', 'VivaOR' ),
        'id' => 'sidebar-3',
        'description' => __( 'Widgets in this area will be shown on all posts and pages.', 'theme-slug' ),
        'before_widget' => '<div class="col-md-3 col-md-push-1">',
     'after_widget'  => '</div>',
     'before_title'  => '<h4>',
      'after_title'   => '</h4>',
    ) );
    register_sidebar( array(
        'name' => __( 'Footer widget', 'VivaOR' ),
        'id' => 'sidebar-4',
        'description' => __( 'Widgets in this area will be shown on all posts and pages.', 'theme-slug' ),
        'before_widget' => '<div class="col-md-3 col-md-push-1">',
     'after_widget'  => '</div>',
     'before_title'  => '<h4>',
      'after_title'   => '</h4>',
    ) );
  }

  ?>