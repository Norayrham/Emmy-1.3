<?php ############# EMMY 1.1.3 ###############
        ##########  HEADER ################## 
?><!DOCTYPE html>
    <html <?php language_attributes(); ?>>
      <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
                        <?php wp_head(); ?> 
      </head>
      <body <?php body_class(); ?>>
          <?php  if ( ! function_exists( 'wp_body_open' ) ) {
                 function wp_body_open() {
                 do_action( 'wp_body_open' );
                    }
                  }  ?>
        <a class="skip-link screen-reader-text" href="#content">
          <?php _e( 'Skip to content', 'emmy' ); ?></a>          
        <header>
          <nav class="navbar main-menu main-navigation navbar-expand-md navbar-dark fixed-top bg-dark" id="navv" >
            <!-- logo -->
            <?php if (has_custom_logo()) { 
            $emmy_custom_logo = get_theme_mod ('custom_logo');
            $emmy_logo_img = wp_get_attachment_image_src ($emmy_custom_logo, 'full'); ?>                       
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
            <img  src="<?php echo esc_url($emmy_logo_img [0]); ?>" height="<?php echo esc_attr($emmy_logo_img [2]); ?>" width="<?php 
            echo esc_attr($emmy_logo_img [1]); ?>" alt="<?php esc_attr_e( 'Logo image', 'emmy' ); ?>" id="logo-img"/>
            </a><?php } ?>
            <!-- End of logo -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">           
              <?php  wp_nav_menu ( [
              'theme_location' => 'menu-top', 
              'container' => 'false',
              'menu_class'=>'main-menu',
              'echo'=> true,
              'fallback_cb' => 'wp_page_menu']); ?> 
            </div>  
              <?php get_search_form(); ?>               
          </nav>
        </header>
        