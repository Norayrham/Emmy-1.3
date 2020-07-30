<?php ############# EMMY 1.1.3 ###############
        ##########  FRONT-PAGE-4 ################## ?>
<?php get_header(); ?>
<?php if ( get_theme_mod ( 'emmy-parallax' ) == true ) { ?>

<div class="parall-img-1" style="background-image:url(<?php echo esc_url ( wp_get_attachment_url(  get_theme_mod ( 'emmy-parallax-img1' ) ) ); ?>) ">
  <div id="header-title" class="text-section">
 
            <?php if (display_header_text()): 
            $emmy_headertextcolor = "color:#". get_header_textcolor(); ?>
        <div >  
          <h1 class="site-title" style="<?php echo  esc_attr ( $emmy_headertextcolor );?>">
              <?php bloginfo('name'); ?>
          </h1> 
          <h2 class="site-description"> <?php bloginfo('description'); ?> 
          </h2> 
        </div>
            <?php endif; ?>

  </div>
</div>

<div class="parallax-text">

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

<div class="parall-img-2" style="background-image:url(<?php echo esc_url ( wp_get_attachment_url(  get_theme_mod ( 'emmy-parallax-img2' ) ) ); ?>) "> </div>


<?php } ?>







  

  







