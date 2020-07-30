<?php
	function emmy_scripts_with_jquery()
{
	wp_register_script( 'bootstrap', get_template_directory_uri() . '/js/bootstrap.js', array( 'jquery' ) );
	wp_enqueue_script( 'bootstrap' );
	wp_register_script( 'bootstrapBund', get_template_directory_uri() . '/js/bootstrap.bundle.js', array( 'jquery' ) );
	wp_enqueue_script( 'bootstrapBund' );
	

	wp_enqueue_style( 'emmy-style', get_stylesheet_uri() );


	wp_enqueue_script('emmy_main_navigation',	get_template_directory_uri() . '/js/dropdown.js',
		array(),'1.0',true);
	wp_enqueue_script( 'emmy_main_navigation' );

		wp_register_script( 'emmy_main', get_template_directory_uri() . '/js/emmy_main.js',[],null, true);
	wp_enqueue_script( 'emmy_main' );

	
		}  	

