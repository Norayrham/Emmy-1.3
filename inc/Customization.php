<?php ############# EMMY 1.1.2   ############### ?>
<?php
   

function emmy_front_page ($wp_customize) {
    
$wp_customize->add_section('emmy-front-page', [
    'title'=>esc_attr__('Front Page Patterns','emmy'),
    'priority' => 35,
    ]);

$wp_customize->add_setting('emmy-front-page-set', [
    'default'=>false,
    'type'=>'theme_mod',
    'capability'=>'edit_theme_options',
    'sanitize_callback'=>'emmy_radio_sanitize_select'
    ]);  

############################################################################################

class Emmy_Control extends WP_Customize_Control {       


        public function render_content() {
            if ( empty( $this->choices ) ) {
                return;
            }           
            $name =  $this->id;
                    
                 echo '<h2>'.esc_attr( $this->label ).'</h2>'; 
                 if ( ! empty( $this->description ) ) :                 
                 echo '<h2>'.esc_html( $this->description).'</h2>';                   
                 endif; ?>
       
            <div id="input_<?php echo $this->id; ?>">
                <?php foreach ( $this->choices as $value => $label ) : ?>
                    
                    <label class="emmy-cust-radio" for="<?php echo $this->id . $value; ?>">    
                    <input class="image-select" type="radio" value="<?php echo esc_attr( $value ); ?>" id="<?php echo $this->id . $value; ?>" name="<?php echo esc_attr( $name ); ?>" <?php $this->link(); checked( $this->value(), $value ); ?>>
                        
                            <img class="emmy-cust-image-<?php echo $value;?>" src="<?php echo esc_html( $label ); ?>">
                        </label>
                    </input>
                   
                <?php endforeach; ?>
             </div>
<script> jQuery(document).ready(function($) { 
    var emmy_slider = "#customize-control-emmy-slider-display, #customize-control-emmy-slider-imag, #customize-control-emmy-slider-text, #customize-control-emmy-slider-image1, #customize-control-emmy-slider-text1, #customize-control-emmy-slider-image2, #customize-control-emmy-slider-text2";
    var emmy_parallax = "#customize-control-emmy-parallax, #customize-control-emmy-parallax-img1, #customize-control-emmy-parallax-img2";

        $(emmy_slider +','+ emmy_parallax ).css('display','none'); 
            $('.emmy-cust-image-one').click(function(){
                $(emmy_slider +','+ emmy_parallax).hide(); 
            });
            $('.emmy-cust-image-two,.emmy-cust-image-three').click(function(){
                $(emmy_slider).show(); 
                $(emmy_parallax).hide();
            });
            $('.emmy-cust-image-four').click(function(){
                $(emmy_slider).hide();
                $(emmy_parallax).show();
            });
                                            });
</script>
            <?php
        }
    }
   
    $wp_customize->add_control( new Emmy_Control( $wp_customize,'emmy-front-page-set', [
              'section'       =>'emmy-front-page',
              'settings'      =>'emmy-front-page-set',
              'label'         => __( 'Front Page Patterns', 'emmy' ),
              'description'   => __( 'Please, select one of them.', 'emmy' ),
              'type'          => 'radio',
              'choices'       => [
              'one'           => get_template_directory_uri() . '/css/img/a.png',
              'two'           => get_template_directory_uri() . '/css/img/b.png',           
              'three'         => get_template_directory_uri() . '/css/img/c.png',
              'four'          => get_template_directory_uri() . '/css/img/d.png'
                ]
            ]
        )
    );
}

add_action('customize_register', 'emmy_front_page');

function emmy_customizer_custom_control_css() { 
    ?>
    <style>

        input[type=radio] { 
             position: absolute;
             opacity: 0;
             width: 0;
             height: 0;
            }

        input[type=radio] + img {
            cursor: pointer;
            }

        input[type=radio]:checked + img {
            outline: 2px solid #f00;
            }

	   }

    </style>
    <?php 
}

add_action( 'customize_controls_print_styles', 'emmy_customizer_custom_control_css' );


##################################################################################
##################################################################################
function emmy_front_page_slider ($wp_customize) {

$wp_customize->add_setting('emmy-slider-display', [
    'default'=>false,
    'type'=>'theme_mod',
    'capability'=>'edit_theme_options',
    'sanitize_callback'=>'emmy_checkbox_sanitize'
    ]);  
$wp_customize->add_control( new WP_Customize_Control($wp_customize, 'emmy-slider-display', 
    [
'label'=>esc_html__('For slider on FRONT-PAGE','emmy'),
'section'=>'emmy-front-page',
'settings'=>'emmy-slider-display',
'type'=>'checkbox',

]));    


$wp_customize->add_setting('emmy-slider-imag', [
    'default'=>'',
    'type'=>'theme_mod',
    
    'capability'=>'edit_theme_options',
    'sanitize_callback'=>'emmy_sanitize_img'
    ]);
    
$wp_customize->add_control( new WP_Customize_Cropped_Image_Control($wp_customize, 'emmy-slider-imag', [
'label'=>esc_html__('Image1','emmy'),
'section'=>'emmy-front-page',
'settings'=>'emmy-slider-imag',
'flex_width'  => true, 
'flex_height' => true, 
'width'       => 1200,
'height'      => 900,


]));  

$wp_customize->add_setting('emmy-slider-text', [
    'default'=>esc_html__('Example Headline Text!', 'emmy'),
    'type'=>'theme_mod',
    'capability'=>'edit_theme_options',
    'sanitize_callback'=>'sanitize_text_field'
    ]);
$wp_customize->add_control( new WP_Customize_Control($wp_customize, 'emmy-slider-text', 
    [
'label'=>esc_html__('Text for the first picture','emmy'),
'section'=>'emmy-front-page',
'settings'=>'emmy-slider-text'
]));

######################   2    ############################


$wp_customize->add_setting('emmy-slider-image1', [
    'default'=>false,
    'type'=>'theme_mod',
    'capability'=>'edit_theme_options',
    'sanitize_callback'=>'emmy_sanitize_img'
    ]);
$wp_customize->add_control( new WP_Customize_Cropped_Image_Control($wp_customize, 'emmy-slider-image1', [
'label'=>esc_html__('Image2','emmy'),
'section'=>'emmy-front-page',
'settings'=>'emmy-slider-image1',
'flex_width'  => true, 
'flex_height' => true, 
'width'       => 1200,
'height'      => 900,

]));


$wp_customize->add_setting('emmy-slider-text1', [
    'default'=>esc_html__('Example Headline Text!', 'emmy'),
    'type'=>'theme_mod',
    'capability'=>'edit_theme_options',
    'sanitize_callback'=>'sanitize_text_field'
    ]);
$wp_customize->add_control( new WP_Customize_Control($wp_customize, 'emmy-slider-text1', 
    [
'label'=>esc_html__('Text for the second picture','emmy'),
'section'=>'emmy-front-page',
'settings'=>'emmy-slider-text1'
]));

#########################  3   ########################

$wp_customize->add_setting('emmy-slider-image2', [
    'default'=>false,
    'type'=>'theme_mod',
    'capability'=>'edit_theme_options',
    'sanitize_callback'=>'emmy_sanitize_img'
    ]);
$wp_customize->add_control( new WP_Customize_Cropped_Image_Control($wp_customize,
'emmy-slider-image2', [
'label'=>esc_html__('Image3','emmy'),
'section'=>'emmy-front-page',
'settings'=>'emmy-slider-image2',
'flex_width'  => true, 
'flex_height' => true, 
'width'       => 1200,
'height'      => 900,

]));


$wp_customize->add_setting('emmy-slider-text2', [
    'default'=>esc_html__('Example Headline Text!', 'emmy'),
    'type'=>'theme_mod',
    'capability'=>'edit_theme_options',
    'sanitize_callback'=>'sanitize_text_field'
    ]);
$wp_customize->add_control( new WP_Customize_Control($wp_customize, 'emmy-slider-text2', array(
'label'=>esc_html__('Text for the third picture','emmy'),
'section'=>'emmy-front-page',
'settings'=>'emmy-slider-text2'
)));



####################### parallax #########################
$wp_customize->add_setting('emmy-parallax', [
    'default'=>false,
    'type'=>'theme_mod',
    'capability'=>'edit_theme_options',
    'sanitize_callback'=>'emmy_checkbox_sanitize'
    ]);  
$wp_customize->add_control( new WP_Customize_Control($wp_customize, 'emmy-parallax', 
    [
'label'=>esc_html__('Pictures for Parallax','emmy'),
'section'=>'emmy-front-page',
'settings'=>'emmy-parallax',
'type'=>'checkbox',

]));    


$wp_customize->add_setting('emmy-parallax-img1', [
    'default'=>'',
    'type'=>'theme_mod',    
    'capability'=>'edit_theme_options',
    'sanitize_callback'=>'emmy_sanitize_img'
    ]);
    
$wp_customize->add_control( new WP_Customize_Cropped_Image_Control($wp_customize, 'emmy-parallax-img1', [
'label'=>esc_html__('Parallax Image1','emmy'),
'section'=>'emmy-front-page',
'settings'=>'emmy-parallax-img1',
'flex_width'  => true, 
'flex_height' => true, 
'width'       => 1200,
'height'      => 900,


])); 

$wp_customize->add_setting('emmy-parallax-img2', [
    'default'=>'',
    'type'=>'theme_mod',    
    'capability'=>'edit_theme_options',
    'sanitize_callback'=>'emmy_sanitize_img'
    ]);
    
$wp_customize->add_control( new WP_Customize_Cropped_Image_Control($wp_customize, 'emmy-parallax-img2', [
'label'=>esc_html__('Parallax Image2','emmy'),
'section'=>'emmy-front-page',
'settings'=>'emmy-parallax-img2',
'flex_width'  => true, 
'flex_height' => true, 
'width'       => 1200,
'height'      => 900,


])); 
 
}

add_action('customize_register', 'emmy_front_page_slider');

######################## sanitization ########################	

function emmy_radio_sanitize_select( $input, $setting ) {			
	$choices = $setting->manager->get_control( $setting->id )->choices;
	if ( array_key_exists( $input, $choices ) ) {
				return $input;
	} else {
				return $setting->default;
			}
	}
	

function emmy_checkbox_sanitize( $input ) {

if ( $input == 1 ) {
        return 1;
    } else {
        return '';
    }
}

function emmy_checkbox_sanitize_select( $input, $setting ) {
    $input = sanitize_key( $input );
    $choices = $setting->manager->get_control( $setting->id )->choices;
    return ( array_key_exists( $input, $choices ) ? $input : $setting->default );
}

function emmy_sanitize_img ( $image, $setting ) {

        /*
         * Array of valid image file types.
         *
         * The array includes image mime types that are included in wp_get_mime_types()
        */
    $emmy_mimes = [
        'jpg|jpeg|jpe' => 'image/jpeg',
        'gif'          => 'image/gif',
        'png'          => 'image/png',
        'bmp'          => 'image/bmp',
        'tif|tiff'     => 'image/tiff',
        'ico'          => 'image/x-icon'
    ];
        // Return an array with file extension and mime_type.
    $emmy_file = wp_check_filetype( $image, $emmy_mimes );

    if (! $emmy_file = null) { return $image ; } else {return ;}
    }
   