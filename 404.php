<?php ############# EMMY 1.1.3 ###############
        ##########  404 ################## ?>
<?php get_header(); ?>
    <main class="main-flex">           
    	<div class="row main">
    		<div class="col-lg-9 col-md-9 col-sm-9">
       			 <h1><?php echo esc_html__( "Sorry. It looks like nothing was  at this location. Would you like to go to the Home page.", 'emmy' ); ?>       			 	
       			 </h1>
            <h1 class="text-center"><a href="<?php echo esc_url( home_url( '/' ) ); ?>"> HOME</a></h1>
    		</div>
    		<?php get_sidebar(); ?>
		</div>
	</main>
<?php get_footer(); ?>
