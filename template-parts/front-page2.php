<?php ############# EMMY 1.1.3 ###############
        ##########  FRONT-PAGE-2 ################## ?>
<?php get_header(); ?>
<?php get_template_part('contents/slider'); ?>
        <main class="main-flex">             
             
                <div class="col-lg-12 col-md-12 col-sm-12" id="header-title">

  					<?php #### display Site Title & Tagline or  not ### ?>        
						<?php if (display_header_text()): 
						$emmy_headertextcolor = "color:#". get_header_textcolor(); ?>
				 
 					<h1 class="site-title" style="<?php echo  esc_attr ( $emmy_headertextcolor );?>">
 							<?php bloginfo('name'); ?>
					</h1> 
					<h2 class="site-description"> <?php bloginfo('description'); ?> 
					</h2> 				
						<?php endif; ?>
				</div>		
				<div class="row">
					<?php get_sidebar('front'); ?>
				
		</main>
                     
		
    








