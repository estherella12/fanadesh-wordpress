<?php
function add_css()
{
   wp_register_style('first', get_template_directory_uri() . '/assets/css/style.css', false,'1.1','all');
   wp_enqueue_style( 'first');

   wp_register_style('second', get_template_directory_uri() . '/assets/css/bootstrap.css', false,'1.1','all');
   wp_enqueue_style( 'second');

   wp_register_style('third', get_template_directory_uri() . '/assets/css/responsive.css', false,'1.1','all');
   wp_enqueue_style( 'third');
}
add_action('wp_enqueue_scripts', 'add_css');

function add_script()
{
   wp_register_script('js-script', get_template_directory_uri() . '/assets/js/jquery-3.4.1.min.js', array ( 'jquery' ), 1.1, true);
   wp_enqueue_script( 'js-script');
   
   wp_register_script('bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.js', array ( 'jquery' ), 1.1, true);
   wp_enqueue_script( 'bootstrap');
}
add_action('wp_enqueue_scripts', 'add_script');

add_theme_support ( 'menus' ) ;
