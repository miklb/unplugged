<?php
/**
 * Unplugged Theme functions and definitions.
 *
 * @package unplugged
 * @since unplugged 1.0
 */

/**
 * Set up supported theme features.
 */

 function unplugged_setup() {
   
  add_theme_support( 'custom-background' );
  add_theme_support( 'custom-header' );
  add_theme_support( 'custom-logo' );
  add_theme_support( 'post-thumbnails' );
  add_theme_support( 'post-formats' );
  add_theme_support( 'post-thumbnails' );
  add_theme_support( 'title-tag' );
	 
  add_theme_support( 'html5', array(
 		'search-form',
 		'comment-form',
 		'comment-list',
 		'gallery',
 		'caption',
 	) );

 }

 add_action( 'after_setup_theme', 'unplugged_setup' );

 function unplugged_scripts() {
	 wp_enqueue_style('unplugged-style', get_template_directory_uri() . '/style.css');

	 if (
		is_singular()
		&& get_option( 'thread_comments' )
)
		wp_enqueue_script( 'comment-reply' );
 }
 
 add_action( 'wp_enqueue_scripts', 'unplugged_scripts' );

 /**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';