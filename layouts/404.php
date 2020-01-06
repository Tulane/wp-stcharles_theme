<?php
// =====================================================================
// 404 Layout
// =====================================================================
// This is what happens when you discover a page that doesn't exist.
// =====================================================================

// Begin 404 Layout
if( is_404() ):
?>

<div class="layout-404">
  <div class="404-error_message">
    <div class="error_message-title">Sorry!</div>
    <div class="error_message-body">No content exists.</div>
  </div>
</div>

<?php
// End 404 Layout
endif;
?>