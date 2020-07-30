<?php  
############### EMMY 1.1.3 #################
############### sidebar #################
?>
 <?php

 	if (is_active_sidebar('sidebar-single')): ?>
<div class="col-lg-3 col-md-3 col-sm-3"><?php
	dynamic_sidebar( 'sidebar-single');?> 
</div>
	<?php endif;