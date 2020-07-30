<?php ############# EMMY 1.1.3 ###############
##########  Content Page ################## ?>

<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <?php the_title( '<h1 class="txt"><b>&#10003 ', '</b></h1>' ); ?>
  <div class="container p-3 my-1 border">
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
  </div> 
          <?php ############## Edit Link ################ ?>
          <?php if ( get_edit_post_link() ) : ?> 
          <button type="button" class="btn btn-secondary">
          <?php  edit_post_link(sprintf( wp_kses(            
              __( 'Edit <span class="screen-reader-text">%s</span>', 'emmy' ),            
            get_the_title() ), '<span class="">', '</span>'  )); ?>
          </button>      
          <?php endif;  ?>
    
</div><!-- #post-<?php the_ID(); ?> -->
