<?php
// =====================================================================
// WIDGET SETTINGS
// =====================================================================
// All sidebar and widget related functions.
// =====================================================================

// Intialize Sidebars
add_action( 'widgets_init', 'theme_widgets_init' );
function theme_widgets_init() {
  register_sidebar( array(
    'name' => __( 'Widget Area', 'tu-boilerplate-gutenberg' ),
    'id' => 'widgets',
    'description' => __( 'These widgets appear before the footer on every page.', 'tu-boilerplate-gutenberg' ),
    'before_widget' => '<div id="%1$s" class="widgets-widget %2$s">',
    'after_widget'  => '</div>',
    'before_title'  => '<div class="widget-title">',
    'after_title'   => '</div>',
  ) );
}
?>