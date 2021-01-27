<?php

function ffg_menus() {
  $locations = array (
    'primary' => "The Main menu",
    'footer' => "Footer menu items"
  );

  register_nav_menus($locations);
}

add_action ('init', 'ffg_menus');

function ffg_register_styles() {
  $version = wp_get_theme()->get( 'Version' );
  wp_enqueue_style('ffg_style', get_template_directory_uri() . "/style.css", array('ffg_bootstrap', 'ffg_additional'), $version, 'all');
  wp_enqueue_style('ffg_bootstrap', get_template_directory_uri() . "/ffg_bootstrap.css", array(), $version, 'all');
  wp_enqueue_style('ffg_additional', get_template_directory_uri() . "/ffg_additional.css", array(), $version, 'all');
}

add_action('wp_enqueue_scripts', 'ffg_register_styles');

function ffg_register_scripts() {
  
  wp_enqueue_script('ffg_popper_min', get_template_directory_uri() . "/assets/javascript/popper.min.js", array(), '2.0', 'all');
  wp_enqueue_script('ffg_jquery_min', get_template_directory_uri() . "/assets/javascript/jquery-3.4.1.min.js", array(), '3.4.1', 'all');
  wp_enqueue_script('ffg_bootstrap_min', get_template_directory_uri() . "/assets/javascript/bootstrap.min.js", array(), '4.4.1', 'all');
}

add_action('wp_enqueue_scripts', 'ffg_register_scripts');

function ffg_wp_author () {
  $author_id = get_the_author_meta( 'ID' );
  echo get_the_author_meta( 'nicename', $author_id );
}

?>