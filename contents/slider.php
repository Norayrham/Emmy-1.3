<?php ############# EMMY 1.1.3 ############### 
      ############### SLIDER ################ ?>

	<?php if ( get_theme_mod ( 'emmy-slider-display' ) == true ) { ?>
<main role="main">
	<div id="myCarousel" class="carousel slide" data-ride="carousel">
 <!-- Carousel indicators -->		
			<ol class="carousel-indicators">
				<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
				<li data-target="#myCarousel" data-slide-to="1"></li>
				<li data-target="#myCarousel" data-slide-to="2"></li> 
			</ol>
<!-- Carousel items -->
			<div class="carousel-inner"> 
				<div class="carousel-item active">
					<img class="bd-placeholder-img slider-img" src=" <?php echo esc_url ( wp_get_attachment_url(  get_theme_mod ( 'emmy-slider-imag' ) ) ); ?> ">
					<div class="container">
						<div class="carousel-caption text-center">
							<h2> <?php echo esc_html (get_theme_mod ( 'emmy-slider-text' )); ?> 
							</h2>  
 						</div>
				    </div>
                </div>
				<div class="carousel-item">
					<img class="bd-placeholder-img slider-img" src=" <?php echo esc_url ( wp_get_attachment_url( get_theme_mod ( 'emmy-slider-image1' ) ) ); ?> ">
					<div class="container">
						<div class="carousel-caption text-center">
							<h2><?php echo  esc_html (get_theme_mod ( 'emmy-slider-text1' )); ?>
							</h2>   
						</div>
				    </div>
                </div>
				<div class="carousel-item">
					<img class="bd-placeholder-img slider-img" src=" <?php echo esc_url ( wp_get_attachment_url ( get_theme_mod ( 'emmy-slider-image2' ) ) ); ?> ">
					<div class="container">
						<div class="carousel-caption text-center">
							<h2><?php echo esc_html (get_theme_mod ( 'emmy-slider-text2' )); ?>		
							</h2>  
						</div>
				    </div>
                </div>
            </div>
			<a  class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
				<span class="carousel-control-prev-icon" aria-hidden="true"></span>
				<span class="sr-only"></span>
			</a>
			<a  class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
				<span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only"></span>
			</a>
        </div>
</main>    
<?php } ?>
