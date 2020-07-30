<?php /**
 * 
 * home.php
 *
 *  EMMY 1.1.3
 */ ?>
<?php get_header(); ?>
<div class="container-fluid main-div d-flex flex-column">
<main class="main-flex">           
  <div class="row main">                 
    <div class="col-lg-9 col-md-9 col-sm-9">
      <h1><?php echo __('All Posts','emmy'); ?></h1>
                       <?php if ( have_posts() ) : ?>
        <div class="container p-3 my-1 border">       	
                       <?php while ( have_posts() ) : ?>
                     <?php  the_post(); ?>   
        
        <a href="<?php the_permalink(); ?>">                                    
        <h4>
          <b>&#10003 </b>
          <?php the_title(); ?>
        </h4>
        </a>
                   <?php   if(has_post_thumbnail()){ ?> 
                <div class="post-thumbnail">
                    <?php  the_post_thumbnail('thumbnail'); ?> 
                </div>
                      <?php } ?>

        <p> 
          <?php the_excerpt(); ?>            
        </p>                                            
          <?php endwhile;    
          endif; ?>
        </div>
		        <?php	the_posts_navigation( array(
            'prev_text' => __( 'Previous Post','emmy' ),
            'next_text' => __( 'Next Post','emmy' ),
               ) );
             ?>  
      	
    </div>
       <?php get_sidebar(); ?>                                 
  </div>
</main>          
    <?php get_footer(); ?>