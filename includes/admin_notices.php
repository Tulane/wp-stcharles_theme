<?php
// =====================================================================
// ADMIN NOTICES
// =====================================================================
// These are different notices that are displayed
// in the WordPress dashboard. All notices should
// be directly referencing something to do with 
// the theme.
// =====================================================================
function theme_admin_notices() {

	// Gutenberg Notice
	$gutenberg = ! ( false === has_filter( 'replace_editor', 'gutenberg_init' ) );
	$block_editor = version_compare( $GLOBALS['wp_version'], '5.0-beta', '>' );
	if( !$gutenberg && !$block_editor ) {
		$class = 'notice notice-error gutenberg';
		$message = __( '<strong>No block editor!</strong> Please contact tech support immediately to resolve the issue.', 'tu-boilerplate-gutenberg' );
		printf( '<div class="%1$s"><p>%2$s</p></div>', $class, $message ); 
	}

	// ACF Notice
  if( !class_exists('acf') ) {
  	$class = 'notice notice-error acf';
  	$message = __( '<strong>ACF is missing!</strong> Please contact tech support immediately to resolve the issue.', 'tu-boilerplate-gutenberg' );
  	printf( '<div class="%1$s"><p>%2$s</p></div>', $class, $message ); 
	}

	// Core Functions Notice
  if( !function_exists('get_tulane_attribution_map') ) {
  	$class = 'notice notice-error core-functions';
  	$message = __( '<strong>Core Tulane Network functions are missing!</strong> Please contact tech support immediately to resolve the issue.', 'tu-boilerplate-gutenberg' );
  	printf( '<div class="%1$s"><p>%2$s</p></div>', $class, $message ); 
	}

}
add_action( 'admin_notices', 'theme_admin_notices' );
?>