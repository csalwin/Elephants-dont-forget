<?php
/**
 * Created by PhpStorm.
 * User: Chris
 * Date: 11/07/2016
 * Time: 12:05
 */
//

// Load the Artcore main stylesheet.
wp_enqueue_style( 'slickSlider', get_stylesheet_directory_uri() . '/assets/js/slick/slick.css', array(), '1.0' );

// Load JS file

wp_enqueue_script( 'progressBar', get_stylesheet_directory_uri() . '/assets/js/progressBar.js', array('jquery'), '1.0' , true);
wp_enqueue_script( 'site', get_stylesheet_directory_uri() . '/assets/js/site.js', array('jquery'), '1.0' , true);
wp_enqueue_script( 'slick', get_stylesheet_directory_uri() . '/assets/js/slick/slick.js', array('jquery'), '1.0' , false);

// This theme uses wp_nav_menu() in one locations.
register_nav_menus(array(
    'footer_menu' => __('Footer Menu', 'artcore'),
));




