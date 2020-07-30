<?php ############# EMMY 1.1.3 ###############
        ##########  SEARCHFORM ################## ?>
        
<form class="form-inline mt-2 mt-md-0" action="<?php echo esc_url( home_url( '/' ) ); ?>" method="get">
      <input class="form-control input mr-sm-2" name="s" type="text" placeholder="<?php echo esc_attr__('Search', 'emmy'); ?>" aria-label="Search" value="<?php echo get_search_query () ?>">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit"><?php echo esc_html__('GO', 'emmy'); ?>      	
      </button>
</form>