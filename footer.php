<?php
// =====================================================================
// FOOTER
// =====================================================================
// The standard WordPress footer.
// =====================================================================
?>

  <div class="footer">
  
    <?php
    // Footer Navigation
    if( has_nav_menu('footer_menu') )
      wp_nav_menu('menu_id=header_navigation&container=&menu_class=footer-menu&theme_location=footer_menu&depth=1');

    // Footer Attribution
    the_tulane_attribution_footer();

    // Footer Copyright Info
    if( get_theme_mod('theme_copyright_info') ) 
      echo '<div class="footer-copyright_info">' . get_theme_mod( 'theme_copyright_info' ) . '</div>';
    ?>

  </div>
</body>

<?php wp_footer();?>