<?php
// =====================================================================
// WIDGETS
// =====================================================================
// An area to dynamically add widgets
// =====================================================================
?>

<?php
// Begin Footer Widgets (if theme has widgets)
if ( is_active_sidebar( 'widgets' ) ):
?>

<div class="widgets">

  <?php
  // Footer Widgets (sidebar.php)
  dynamic_sidebar( 'widgets' );
  ?>
  
</div>

<?php
// End Footer Widgets
endif;
?>