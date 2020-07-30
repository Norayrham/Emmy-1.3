<?php
      ########## EMMY 1.1.3 ###############
      ##########  ARCHIVE ################## ?>

<?php get_header(); ?>
<div class="container-fluid main-div d-flex flex-column">
<main class="main-flex">           
  <div class="row main">     
    <div class="col-lg-9 col-md-9 col-sm-9">  
            <?php
        if ( have_posts() ) : ?>
            <div>
                    <?php
                    the_archive_title( '<h1 class="page-title">', '</h1>' );
                    the_archive_description( '<div class="archive-description">', '</div>' );
                    ?>
            </div>
                    <?php           
                    while ( have_posts() ) : the_post();
                     get_template_part( 'template-parts/content', 'posts', get_post_format() );
                    endwhile;
                                 the_post_navigation( array(
                        'prev_text' => __( '%title <<< Previous','emmy' ),
                        'next_text' => __( 'Next >>> %title','emmy' ),
                          ) );
                    else :
                    get_template_part( 'template-parts/content', 'none' );
                    endif; ?>
    </div> 
             <?php get_sidebar(); ?>         
  </div>
            <?php get_footer(); ?>
</main>