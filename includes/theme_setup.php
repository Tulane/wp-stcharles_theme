<?php
// =====================================================================
// THEME SETUP
// =====================================================================
// Global theme settings.
// =====================================================================
if ( ! function_exists( 'theme_setup' ) ) :

  // Setup Theme Defaults
  function theme_setup() {
  	 
  	// Add default posts and comments RSS feed links to head.
  	add_theme_support( 'automatic-feed-links' );
  	  
  	// Let WordPress manage the document title.
  	add_theme_support( 'title-tag' );
      
    // Support custom post thumbnails
    add_theme_support('post-thumbnails');
  
  }

endif;
add_action( 'after_setup_theme', 'theme_setup' );  

// Set the content width in pixels, based on the theme's design and stylesheet.
function theme_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'content_width', 580 );
}
add_action( 'after_setup_theme', 'theme_content_width', 0 );

// Add responsive container to embeds
function alx_embed_html( $html ) {
  return '<div class="video-container">' . $html . '</div>';
}
add_filter( 'embed_oembed_html', 'alx_embed_html', 10, 3 );

// Enqueue Styles & Scripts
function theme_scripts_and_styles() {
  
  // Styles
	wp_enqueue_style( 'theme-style', get_stylesheet_uri(), $deps = '', $ver = '0.0.1' );	
	
	// Scripts
  wp_enqueue_script( 'theme_header_navigation', get_template_directory_uri().'/scripts/themeHeaderNavigation.js', array( 'jquery' ) );
  if ( is_singular() ) 
    wp_enqueue_script( 'comment-reply' );

}
add_action( 'wp_enqueue_scripts', 'theme_scripts_and_styles' );
?>