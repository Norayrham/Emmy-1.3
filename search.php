     <?php ############# EMMY 1.1.3 ###############
        ##########  SEARCH ################## ?>

<?php get_header(); ?>
<div class="container-fluid main-div d-flex flex-column">
<main class="main-flex">           
  <div class="row main">
  	<div class="col-lg-9 col-md-9 col-sm-9">
  		    <?php if (have_posts()): ?>          
          <h1><b>&#10003 </b><?php  
              /* translators: %s: Search */
          printf(esc_html__('Search Results for: %s', 'emmy'),esc_html( get_search_query() ));?>
          </h1>      
          
            <div class="container p-3 my-1 border">
                  <?php   while (have_posts()): the_post(); 
                      if(has_post_thumbnail()){ ?> 
                <div class="post-thumbnail">
                    <?php  the_post_thumbnail('thumbnail'); ?> 
                </div>
                      <?php } ?>
                 <h3>
                    <a href="<?php the_permalink(); ?>">
                        <?php the_title(); ?>                
                    </a>
                 </h3>    	
    				     <p><?php the_excerpt(); ?></p>
    	
 						     <?php endwhile; ?>
            </div>
                   <?php  the_post_navigation( array(
                        'prev_text' => __( '%title <<< Previous Results','emmy' ),
                        'next_text' => __( 'Next Results >>> %title','emmy' ),
                          ) ); ?>      
         
                  <?php  else:
                       get_template_part( 'template-parts/content', 'none', get_post_type() ); 
                       endif; ?>
    </div>            
            <?php get_sidebar(); ?>          
	</div>
</main>
<?php get_footer(); ?>