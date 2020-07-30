<?php /**
 * 
 * for woocommerce
 *
 *  EMMY 1.1.3
 */ ?>

<?php get_header(); ?>
<main class="main-flex">           
    <div class="row main">
      <div class="col-lg-9 col-md-9 col-sm-9">
        <?php          
            woocommerce_content();  
        ?>
                               
      </div>
        <?php get_sidebar(); ?>
    </div>     
</main>
        <?php get_footer(); ?>