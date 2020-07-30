<?php ############# EMMY 1.1.3 ###############
        ##########  FRONT-PAGE-1 ################## ?>
<?php get_header(); ?>
		<main class="main-flex">
                    <?php ############## Header Media ################## ?>
              
                  <div class="col-lg-12 col-md-12 col-sm-12 custom-header-media">
                          <?php    the_custom_header_markup(); ?>  
                  </div>              
                    <?php ############## End of Header Media ########## ?>
  					<?php #### display Site Title & Tagline or  not ### ?>                        

						<?php if (display_header_text()): 
						$emmy_headertextcolor = "color:#". get_header_textcolor(); ?>
				<div class="col-lg-12 col-md-12 col-sm-12" id="header-title">
  
 					<h1 class="site-title" style="<?php echo  esc_attr ( $emmy_headertextcolor );?>">
 							<?php bloginfo('name'); ?>
					</h1> 
					<h2 class="site-description"> <?php bloginfo('description'); ?> 
					</h2> 
				</div>
						<?php endif; ?>
		</main>	
    







