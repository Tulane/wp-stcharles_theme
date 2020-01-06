<?php
//======================================================================
// THEME FUNCTIONS
//======================================================================
// All of the theme functions are kept in the "includes/"
// folder. IMPORTANT: Theme functions should only impact
// style of this particular theme. Any universal functions
// should probably be loaded as a plug-in.
// =====================================================================

// Default Width, Title Tag, and Other Setup Functions
require_once('includes/theme_setup.php' );

// Update Customizer
require_once('includes/customizer.php' );

// Block Setup
require_once('includes/block_setup.php' );

// Menus
require_once('includes/menus.php' );

// Admin Notices
require_once('includes/admin_notices.php' );

// ACF Settings
require_once('includes/acf_settings.php' );

// Widget Settings
require_once('includes/widget_settings.php' );

?>