<?php
// =====================================================================
// BLOCK SETUP
// =====================================================================
// All the "Gutenberg" block editor related functions.
// =====================================================================
if ( ! function_exists( 'gutenbergtheme_setup' ) ) {

	function gutenbergtheme_setup() {

    // Add support for full and wide align images.
    add_theme_support( 'align-wide' );

    // Add responsive embeds
    add_theme_support( 'responsive-embeds' );

    // Disable custom font sizes
    add_theme_support('disable-custom-font-sizes');

    // Disable custom colors
    add_theme_support( 'disable-custom-colors' );

    // Add Editor Styles
    add_theme_support('editor-styles');
    add_editor_style( 'style.css' );

    // Gradients
    add_theme_support(
      '__experimental-editor-gradient-presets',
      array(
        array(
          'name'     => 'Primary Gradient',
          'gradient' => 'linear-gradient(0deg, rgba(40,92,72,1) 0%, rgba(30,155,88,1) 100%)',
          'slug'     => 'primary'
        ),
        array(
          'name'     => 'Secondary Gradient',
          'gradient' => ' linear-gradient(0deg, rgba(0,65,141,1) 0%, rgba(0,109,185,1) 100%)',
          'slug'     =>  'secondary',
        )
      )
    );

    // Color Pallet
    add_theme_support( 'editor-color-palette', array(
      array(
        'name' => 'primary',
        'slug' => 'primary',
        'color' => '#285C48',
      ),
      array(
        'name' => 'primary-900',
        'slug' => 'primary-900',
        'color' => '#046A38',
      ),
      array(
        'name' => 'primary-700',
        'slug' => 'primary-700',
        'color' => '#1E9B58',
      ),
      array(
        'name' => 'secondary',
        'slug' => 'secondary',
        'color' => '#71C0E8',
      ),
      array(
        'name' => 'secondary-500',
        'slug' => 'secondary-500',
        'color' => '#008BD6',
      ),
      array(
        'name' => 'moss',
        'slug' => 'moss',
        'color' => '#EAF6E3',
      ),
      array(
        'name' => 'black',
        'slug' => 'black',
        'color' => '#000',
      ),
      array(
        'name' => 'gray',
        'slug' => 'gray',
        'color' => '#7C878E',
      ),
      array(
        'name' => 'gray-900',
        'slug' => 'gray-900',
        'color' => '#8F98A1',
      ),
      array(
        'name' => 'gray-50',
        'slug' => 'gray-50',
        'color' => '#F3F3F4',
      ),
      array(
        'name' => 'white',
        'slug' => 'white',
        'color' => '#fff',
      ),
      array(
        'name' => 'translucent',
        'slug' => 'translucent',
        'color' => 'rgba(0,0,0,0.6)',
      ),
    ) );
  }

}
add_action( 'after_setup_theme', 'gutenbergtheme_setup' );
?>