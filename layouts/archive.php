<?php
// =====================================================================
// ARCHIVE
// =====================================================================
// The archive layout for posts, search results, and everything else 
// the archive catches.
// =====================================================================

// Begin Archive Layout
if( is_home() || is_archive() || is_search() || is_date() ):
?>

<div class="layout-archive">

  <?php
  // Set content depending on archive type
  if( is_category() || is_tag() ){
    $archive_title       = get_queried_object()->name;
    $archive_description = get_queried_object()->description;
    $subcategories       = get_categories( array('child_of' => get_queried_object()->term_id) );
  }elseif(is_author()){
    $archive_title       = get_queried_object()->display_name;
    $archive_description = get_the_author_meta('description', get_queried_object()->ID);
  }elseif(is_search()){
    $archive_title       = 'Search Results: "' . get_search_query() . '"';
  }
  ?>

  <div class="archive-content">

    <?php
    // Begin Masthead
    if( !empty($archive_title) || !empty($archive_description) || !empty($subcategories) ):
    ?>

    <div class="content-masthead">

      <?php
      // Masthead Content
      if(!empty($archive_title))
        echo '<div class="masthead-title">' . $archive_title . '</div>';
      if(!empty($archive_description))
        echo '<div class="masthead-description">' . $archive_description . '</div>';
      if(!empty($subcategories)){
        echo '<div class="masthead-subcategories">';
        foreach($subcategories as $subcategory) { 
          echo '<a class="subcategories-link" href="' . get_category_link( $subcategory->term_id ) . '" title="' . sprintf( __( "View all posts in %s" ), $subcategory->name ) . '" ' . '>' . $subcategory->name.'</a> ';
        }
        echo '</div>';      
      }
      ?>

    </div>
    
    <?php
    // End Masthead
    endif;

    // Begin Loop
    if( have_posts() ):
    ?>

    <div class="content-loop">
      
      <?php 
      // Single Post List
      while(have_posts()): the_post();
      ?>

      <div class="loop-listed_post">

        <?php  
        // Begin Responsive Image
        if(has_post_thumbnail()):
        ?>

        <a class="listed_post-image" href="<?php the_permalink(); ?>">    
        
          <?php        
          // Set Up Image Variables
          $img_src = wp_get_attachment_image_url( get_post_thumbnail_id(), 'medium' );
          $img_srcset =  wp_get_attachment_image_srcset( get_post_thumbnail_id(), 'medium' );;
          $img_sizes = '672px';
          
          // The Image
          echo '<img class="image-the_image" src="'.esc_url($img_src).'" srcset="'.esc_attr($img_srcset).'" sizes="'.$img_sizes.'">';
          ?>
        
        </a>
        
        <?php
        // End Responsive Image
        endif;
        ?>
        
        <div class="listed_post-post">    
          <div class="post-meta"><?php the_category(', ');?></div>
          <a href="<?php the_permalink(); ?>" class="post-title"><?php the_title();?></a>
            <div class="post-excerpt"><?php echo get_the_excerpt();?></div>
          </div>
      </div>

      <?php
      // End Single Post List
      endwhile;

      // Standard Pagination
      wp_link_pages();

      // Start Pagination
      $prev_link = get_previous_posts_link(__('&laquo; Older Entries', 'tu-boilerplate-gutenberg'));
      $next_link = get_next_posts_link(__('Newer Entries &raquo;', 'tu-boilerplate-gutenberg'));
      if ($prev_link || $next_link):
      ?>

      <div class="loop-page">
        
        <?php
        // Page Navigation 
        echo paginate_links( array(
          'base' => str_replace( 99999900000, '%#%', esc_url( get_pagenum_link( 99999900000 ) ) ),
          'format' => '?paged=%#%',
          'current' => max( 1, get_query_var('paged') ),
          'total' => $wp_query->max_num_pages
        ) );
        ?>
        
      </div>

      <?php
      // End Pagination
      endif;
      ?>
    
    </div>

  <?php
  // If no posts exist..
  else:
  ?>

    <div class="content-error">
      <div class="error-title">Sorry!</div>
      <div class="error-body">No content exists.</div>
    </div>
    
  <?php
  // End Archive Loop
  endif;
  ?>

  </div>
</div>

<?php
// End Archive Layout
endif;
?>