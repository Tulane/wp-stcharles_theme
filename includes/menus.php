<?php
//======================================================================
// MENUS
//======================================================================
// Register custom menus.
// =====================================================================

function register_theme_menu() {
  register_nav_menu('header_menu',__( 'Header Menu' ));
  register_nav_menu('footer_menu',__( 'Footer Menu' ));
}
add_action( 'init', 'register_theme_menu' );
?>