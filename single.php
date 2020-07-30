<?php ############# EMMY 1.1.3 ###############
      ##########  SINGLE ################## ?>

<?php get_header(); ?>
<div class="container-fluid main-div d-flex flex-column">
<main class="main-flex">  
    <div class="row main">
      <div class="col-lg-8 col-md-8 col-sm-8">
        <?php
   
        while ( have_posts() ) : the_post(); 
        get_template_part( 'template-parts/content', 'posts', get_post_type() );  

the_post_navigation( array(
            'prev_text' => __( 'Previous Post','emmy' ),
            'next_text' => __( 'Next Post','emmy' ),
        ) );

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
        <?php get_footer(); ?>