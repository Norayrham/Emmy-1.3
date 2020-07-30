<?php ############# EMMY 1.1.3 ###############
        ##########  Front Page select ################## ?>
<?php get_header(); ?>

<?php

switch (get_theme_mod('emmy-front-page-set')) {
    case 'one':
        get_template_part( 'template-parts/front', 'page1' );
        break;
    case 'two':
        get_template_part( 'template-parts/front', 'page2' );
        break;
    case 'three':
        get_template_part( 'template-parts/front', 'page3' );
        break;
    case 'four':
        get_template_part( 'template-parts/front', 'page4' );
        break;    
}
 get_footer('front');  ?>
