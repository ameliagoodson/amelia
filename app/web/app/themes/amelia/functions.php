<?php

function ag_register_styles()
{

  wp_enqueue_style('ag-styles', get_template_directory_uri() . '/assets/css/style.css');
}

add_action('wp_enqueue_scripts', 'ag_register_styles');

function ag_features()
{
  add_theme_support('title-tag');
  add_theme_support('menus');
  register_nav_menus(array(
    "header" => "Header",
    "footer" => "Footer"
  ));
}

add_action('after_setup_theme', 'ag_features');
