<?php

  function emmy_styles() {
 	
  wp_enqueue_style( 'bootstrap', get_template_directory_uri().'/css/bootstrap.css',array());

  wp_enqueue_style( 'emmy-main', get_template_directory_uri().'/css/emmy-main.css',array());	

}

