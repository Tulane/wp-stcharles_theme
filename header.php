<?php
// =====================================================================
// HEADER
// =====================================================================
// The standard WordPress header.
// =====================================================================
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?> >
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <?php wp_head();?>    
    
  </head>
  
  <body <?php body_class(); ?>>

   <?php
    // Tulane Attribution Header
    the_tulane_attribution_header();

    // Set Menu ID
    if(has_nav_menu('header_menu'))
      $menu_id = wp_get_nav_menu_object( get_nav_menu_locations()['header_menu'] );
    ?>
    
    <div class="header <?php if(!has_nav_menu('header_menu') || get_field('menu_alignment', $menu_id) == 'below_title') echo 'below_title';?>">  
        
        <?php        
        // Set Up Image Variables
        $img_src = wp_get_attachment_image_url( get_theme_mod( 'theme_logo' ), 'small' );
          
        // Logo from Customizer 
        if(get_theme_mod( 'theme_logo' ) ):

          // Set Logo Variables
          $img_srcset =  wp_get_attachment_image_srcset( get_theme_mod( 'theme_logo' ) );
          $img_sizes = '322px';  

          // The Logo
          echo '<div class="header-logo"> <a class="logo-link" href="'.get_home_url().'"><img class="link-image" src="'.esc_url($img_src).'" srcset="'.esc_attr($img_srcset).'" sizes="'.$img_sizes.'" alt="logo"></a></div>';

        // If no logo exists, get title and description
        else:
        ?>

        <a class="header-title_and_tagline" href="<?php echo get_home_url();?>">
          <div class="title_and_tagline-title" id="site_title">

            <?php bloginfo('title'); ?>

          </div>

          <?php
          // Tagline
          if( !empty( get_bloginfo('description') ) )
            echo '<div class="title_and_tagline-tagline" id="site_tagline">' . get_bloginfo('description') . '</div>'; 
          ?>

        </a>

        <?php
        // End logo or title/description
        endif;

        // Begin Header Menu
        if(has_nav_menu('header_menu')):
        ?>
        
          <a class="header-toggle" id="header_menu_toggle"><span class="toggle-icon"></span></a>
          
          <?php
          // Header Menu
          wp_nav_menu('menu_id=header_menu&container=&menu_class=header-menu&theme_location=header_menu&depth=2');

          // Button Addon
          if(get_field('menu_addons', $menu_id) == 'button')
            echo '<a class="header-button_addon" href="'.get_field('button_url', $menu_id).'">'.get_field('button_text', $menu_id).'</a>';
          
          // Begin Search Form Addon
          if(get_field('menu_addons', $menu_id) == 'search_form'):
          ?>
          
          <form class="header-search_form" id="searchform" action="<?php echo get_site_url();?>" method="get">
            <input class="search_form-input" type="text" name="s" id="s" placeholder="Search.." value="<?php the_search_query(); ?>"> 
            <button class="search_form-submit">
              <img class="submit-icon" src="<?php echo get_template_directory_uri();?>/images/icon-search.svg">
            </button>
          </form>
            
          <?php
          // End Search Form Addon
          endif;

          // Signup/Dashboard Button (requires tu-core-functions plugin)
          if(is_main_site())
            tu_signup_or_dashboard_button('header-signup_or_dashboard_button');

        // End Header Menu
        endif;
        ?>

      </div>
    </div>