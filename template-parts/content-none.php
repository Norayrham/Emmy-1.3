<?php ############# EMMY 1.1.3 ###############
##########  Content None ################## ?>

    <h1 class="page-title">
      <?php esc_html_e( 'Nothing Found', 'emmy' ); ?>        
    </h1>
    <?php
    if ( is_home() && current_user_can( 'publish_posts' ) ) : ?>
      <p> <?php printf(  wp_kses(
            /* translators: 1: link to WP admin new post page. */
            __( 'Ready to publish your first post? <a href="%1$s">Get started here</a>.', 'emmy' ),['a' => ['href' => [],],]),
          esc_url( admin_url( 'post-new.php' ) )
        ); ?>          
      </p>
          <?php elseif ( is_search() ) : ?>
      <div class="container p-3 my-1 border"><?php esc_html_e( 'Sorry. It looks like nothing was found at this location. Would you like to make a new search using another keyword. ', 'emmy' ); ?>        
      </div>
      <?php endif; ?>

