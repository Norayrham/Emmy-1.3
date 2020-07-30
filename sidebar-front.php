<?php  
############### EMMY 1.1.3 #################
############### sidebar for Front Page #################
?>

<?php

if (is_active_sidebar('sidebar-one')): ?>
<div class="col-lg-12 col-md-12 col-sm-12 d-flex justify-content-center  container p-3 my-1 border"><?php
	dynamic_sidebar( 'sidebar-one');?> </div>
<?php endif;

if (is_active_sidebar('sidebar-two')): ?>
<?php
	dynamic_sidebar( 'sidebar-two');?> 
<?php endif; 

if (is_active_sidebar('sidebar-three')): ?>
<?php
	dynamic_sidebar( 'sidebar-three');?> 
<?php endif;

if (is_active_sidebar('sidebar-four')): ?>
<?php
	dynamic_sidebar( 'sidebar-four');?> 
<?php endif;

if (is_active_sidebar('sidebar-five')): ?>
<div class="col-lg-12 col-md-12 col-sm-12 d-flex justify-content-center  container p-3 my-1 border"><?php
	dynamic_sidebar( 'sidebar-five');?> </div>
<?php endif; 


	



 