<?php ############# EMMY 1.1.3 ###############
        ##########  FOOTER ################## ?>
 <?php # Footer for Front Page      ?>

            <footer id="for-front-p" class="container-fluid text-center">
                <div class="row"> 
                    <div class="col-lg-12 col-md-12 container p-3 my-3 bg-dark text-white" id="footer-front">

                     <?php wp_nav_menu ( array(
                    'theme_location' => 'menu-footer',
                     'container' => '',
                     'menu_class' => 'footer-class'
                         )); ?>   
                                    
                        <p style="text-align:center;">Copyright &nbsp; &copy; <?php echo esc_html(date_i18n(__('Y', 'emmy'))).' '; bloginfo( 'name' ); ?> | <a href="<?php echo esc_url( __( 'https://wordpress.org/', 'emmy' ) ); ?>"><?php 
             /* translators: %s: Proudly powered by WordPress */
             printf( esc_html__( 'Proudly powered by %s', 'emmy' ), 'WordPress' ); ?> | </a><?php 
             /* translators: %1$s: Author of the Theme */
             printf( esc_html__( 'Theme by %1$s', 'emmy' ),  '<a href="'.esc_url('https://www.facebook.com/norayrham').'">Norayr</a>' ); ?>
                        </p>
                    </div>
                </div>          
            </footer>    
        </div> <!-- end flex -->   
        <?php wp_footer(); ?>
    </body>
</html>