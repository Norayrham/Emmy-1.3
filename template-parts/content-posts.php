<?php
/**############# EMMY 1.1.3 ###############
Post, Archive, Index
 */

?>

<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  <header class="entry-header">
    <?php
    if ( is_single() ) :
      the_title( '<h1><b>&#10003 ', '</b></h1>' );
    else :
      the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
    endif;
    if ( 'post' === get_post_type() ) : ?>
    <div class="entry-meta">
      <?php 
$time_string = '<time class="entry-date published updated" datetime="%1$s">%2$s</time>';
  if ( get_the_time( 'U' ) !== get_the_modified_time( 'U' ) ) {
        $time_string = '<time class="entry-date published" datetime="%1$s">%2$s</time>';
  }

  $time_string = sprintf( $time_string,
    esc_attr( get_the_date( 'c' ) ),
    esc_html( get_the_date() )
  );

  $posted_on = sprintf(
    esc_html_x( 'Posted on %s', 'post date', 'emmy' ),
    '<a href="' . esc_url( get_permalink() ) . '" rel="bookmark">' . $time_string . '</a>'
  );

  $byline = sprintf(
    esc_html_x( 'by %s', 'post author', 'emmy' ),
    '<span class="author vcard"><a class="url fn n" href="' . esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ) . '">' . esc_html( get_the_author() ) . '</a></span>'
  );

  echo '<span class="posted-on">' . $posted_on . '</span> | <span class="byline"> ' . $byline . '</span>'; // WPCS: XSS OK.


       ?>
    </div><!-- .entry-meta -->
    <?php
    endif; ?>
  </header><!-- .entry-header -->
  <div class="entry-content  container p-3 my-1 border">
    <?php

                      if(has_post_thumbnail()){ ?> 
                <div class="post-thumbnail">
                    <?php  the_post_thumbnail('thumbnail'); ?> 
                </div>
                      <?php } 
      
      the_content();

      wp_link_pages( array(
        'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'emmy' ),
        'after'  => '</div>',
      ) );
    ?>
  </div><!-- .entry-content -->

  <div class="entry-footer">
    <?php 
// Hide category and tag text for pages.
  if ( 'post' === get_post_type() ) {
    /* translators: used between list items, there is a space after the comma */
    $categories_list = get_the_category_list( esc_html__( ', ', 'emmy' ) );
    
      printf( '<span class="cat-links">' . esc_html__( 'Posted in %1$s', 'emmy' ) . '</span>', $categories_list ); // WPCS: XSS OK.
    
}
    /* translators: used between list items, there is a space after the comma */
    $tags_list = get_the_tag_list( '', esc_html__( ', ', 'emmy' ) );
    if ( $tags_list ) {
      printf( ' | <span class="tags-links">' . esc_html__( 'Tagged %1$s', 'emmy' ) . '</span>', $tags_list ); // WPCS: XSS OK.
    }

     ?>

          <?php ############## Edit Link ################ ?>
          <?php if ( get_edit_post_link() ) : ?> 
          <button type="button" class="btn btn-secondary">
          <?php  edit_post_link(sprintf( wp_kses(            
              __( 'Edit <span class="screen-reader-text">%s</span>', 'emmy' ),            
            get_the_title() ), '<span class="">', '</span>'  )); ?>
          </button>      
          <?php endif; ?>
     
  </div><!-- .entry-footer -->
</div><!-- #post-## -->
         