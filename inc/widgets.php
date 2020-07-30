<?php ############# EMMY 1.1.2  ############### ?>
<?php

	 	function emmy_widget() 
    {
	
        register_sidebar(array(
            'name' => esc_html__('Front Page 1', 'emmy'),
            'id' => 'sidebar-one',
			'description'   => esc_html__('This will be shown on Front Page Pattern 2.', 'emmy'),
            'before_widget' => '<span id="%1$s" class="widget %2$s">',
            'after_widget' => '</span>',
            'before_title' => '<h2 class="widget-title">',
            'after_title' => '</h2>',
        ));

        register_sidebar(array(
            'name' => esc_html__('Front Page 2', 'emmy'),
            'id' => 'sidebar-two',
			'description'   => esc_html__('This will be shown on Front Page Pattern 2.', 'emmy'),
            'before_widget' => '<div id="%1$s" class="widget %2$s col-lg-4 col-md-4 col-sm-4 container p-3 my-1 border">',
            'after_widget' => '</div>',
            'before_title' => '<h2 class="widget-title">',
            'after_title' => '</h2>',
        ));

register_sidebar(array(
            'name' => esc_html__('Front Page 3', 'emmy'),
            'id' => 'sidebar-three',
            'description'   => esc_html__('This will be shown on Front Page Pattern 2.', 'emmy'),
            'before_widget' => '<div id="%1$s" class="widget %2$s col-lg-4 col-md-4 col-sm-4 container p-3 my-1 border">',
            'after_widget' => '</div>',
            'before_title' => '<h2 class="widget-title">',
            'after_title' => '</h2>',
        ));

register_sidebar(array(
            'name' => esc_html__('Front Page 4', 'emmy'),
            'id' => 'sidebar-four',
            'description'   => esc_html__('This will be shown on Front Page Pattern 2.', 'emmy'),
            'before_widget' => '<div id="%1$s" class="widget %2$s col-lg-4 col-md-4 col-sm-4 container p-3 my-1 border">',
            'after_widget' => '</div>',
            'before_title' => '<h2 class="widget-title">',
            'after_title' => '</h2>',
        ));

register_sidebar(array(
            'name' => esc_html__('Front Page 5', 'emmy'),
            'id' => 'sidebar-five',
            'description'   => esc_html__('This will be shown on Front Page Pattern 2.', 'emmy'),
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget' => '</div>',
            'before_title' => '<h2 class="widget-title">',
            'after_title' => '</h2>',
        ));

register_sidebar(array(
            'name' => esc_html__('Single', 'emmy'),
            'id' => 'sidebar-single',
            'description'   => esc_html__('This will be shown on Front Page Pattern 3 and on Pages and on Posts.', 'emmy'),
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget' => '</div>',
            'before_title' => '<h2 class="widget-title">',
            'after_title' => '</h2>',
        ));




          }

