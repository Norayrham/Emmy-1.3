<?php ############# EMMY 1.1.3 ###############
        ##########  FRONT-PAGE-3 ################## ?>
<?php get_header(); ?>
<?php get_template_part('contents/slider'); ?>
                
    <main class="main-flex">              
         <div class="row"> 
            <div class="col-lg-9 col-md-9 col-sm-9">  
                <?php
                while ( have_posts() ) : the_post();
                 get_template_part( 'template-parts/content', 'page' );
            // If comments are open or we have at least one comment, load up the comment template.
                if ( comments_open() || get_comments_number() ) :
                 comments_template();
                endif;
                endwhile; // End of the loop.
                ?>
            </div>             
          <?php get_sidebar(); ?>
        </div>
    </main>           
			
    









