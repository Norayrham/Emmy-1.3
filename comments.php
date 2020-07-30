<?php ############# EMMY 1.1.3 ###############
        ##########  COMMENTS ################## ?>
<?php

if ( post_password_required() )
  return;
?>
 
<?php



add_filter('comment_form_fields', 'emmy_reorder_comment_fields' );
function emmy_reorder_comment_fields( $fields ){
  $new_fields = [];  
  $myorder = ['author','email','comment'];  
  foreach( $myorder as $key ){
    $new_fields[ $key ] = $fields[ $key ];
    unset( $fields[ $key ] );
  }
 
  if( $fields )
    foreach( $fields as $key => $val )
      $new_fields[ $key ] = $val; 
    return $new_fields;
  }
  ?>
 
<div id="comments" class="comments-area">
  <?php if ( have_comments() ) : ?>
    <h2 class="comments-title"><?php printf( _nx( 'One comment', '%1$s Comments', get_comments_number(), 'comments title', 'emmy' ), number_format_i18n( get_comments_number() ), '<span>' . get_the_title() .  '</span>' ); ?></h2>
 
    <ol class="comment-list">
      <?php
      wp_list_comments( [
              'style'       => 'ol',
              'type'        => 'comment',
              'short_ping'  => true,
              'avatar_size' => 50,            
              ]
      );  
      ?>
    </ol><!-- .comment-list -->
  <?php  the_comments_navigation(); ?>
    <?php
    // Are there comments to navigate through?
    if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) :
      ?>
    <nav class="navigation comment-navigation" role="navigation">
      <h2 class="screen-reader-text section-heading"><?php _e( 'Comment navigation', 'emmy' ); ?></h2>
      <div class="nav-previous alignleft"><?php previous_comments_link( __( '&larr; Older Comments', 'emmy' ) ); ?></div>
      <div class="nav-next alignright"><?php next_comments_link( __( 'Newer Comments &rarr;', 'emmy' ) ); ?></div>
    </nav><!-- .comment-navigation -->
    <?php
    endif; // Check for comment navigation
    ?>
 
    <?php if ( ! comments_open() && get_comments_number() ) : ?>
      <p class="no-comments"><?php _e( 'Comments are closed.' , 'emmy' ); ?></p>
    <?php endif; ?>
 
  <?php endif; // have_comments() ?>
 
 
  <?php
  // change fields in the comments form
  $commenter = wp_get_current_commenter();
   
  $comments_args = [     
    'cancel_reply_link' => __( 'Cancel Reply','emmy' ),   
    'label_submit'=>'Submit',        
    'fields' => [
    'author' => '<label for="author">'.esc_html__('These fields are necessary.', 'emmy').'</label><div class="input-group input-group-lg"> 
      <div class="input-group-prepend"> <span class="input-group-text">@</span>
      </div>'.'<input id="author" class="form-control" placeholder="Username" name="author" type="text" value="' . esc_attr( $commenter['comment_author'] ) . '"/> </div>', 

      'email' =>'<label for="email"></label>
      <div class="input-group input-group-lg"> ' .      
      '<input id="email" class="form-control" name="email" type="text" placeholder="Your Email" value="' . esc_attr(  $commenter['comment_author_email'] ) .'"/><div class="input-group-append">
        <span class="input-group-text">@example.com</span>
      </div></div>', 

    ],
    'comment_field' =>
    '<p class="comment-form-comment"><label for="comment">' . __( 'Comment', 'emmy' ) . '</label> <span class="required">*</span><br /><textarea id="comment" name="comment" aria-required="true"></textarea></p>',
    ];
 
  comment_form($comments_args);
  ?>
 
</div>