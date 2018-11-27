<?php
/**
 * The template for displaying Comments.
 *
 * The area of the page that contains comments and the comment form.
 *
 * 
 */

/*
 * If the current post is protected by a password and the visitor has not yet
 * entered the password we will return early without loading the comments.
 */
if ( post_password_required() )
    return;
?>

<div id="comments" class="comments-area">

  <?php
    $args = [
      'fields' => apply_filters( 'comment_form_default_fields', array(
        'author' =>
          '<p class="comment-form-author">' . '<label for="author">' . __( 'Name *' ) . '</label> ' .
          '<input id="author" name="author" type="text" value="' . esc_attr( $commenter['comment_author'] ) . '" size="30"' . $aria_req . ' /></p>',
        'email'  => '<p class="comment-form-email">' .
          '<label for="email">' . __( 'Email *' ) . '</label> ' .
          '<input id="email" name="email" type="text" value="' . esc_attr(  $commenter['comment_author_email'] ) . '" size="30"' . $aria_req . ' />'.'</p>',
          'url'    => '' ) ),
      'comment_field' =>  '<p class="comment-form-comment"><label for="comment">' . _x( 'Comment', 'noun' ) .
        '</label><textarea id="comment" name="comment" cols="45" rows="8" aria-required="true">' .
        '</textarea></p>',
      'title_reply' => "<i class='fa fa-comment'></i> Leave a Comment",
      'comment_notes_after' => '<p class="comment-notes-after">' . __("DISCLAIMER: By submitting this comment you understand that the use of the Internet or this form for communication with the firm or any individual member of the firm does not establish an attorney-client relationship.") . '</p>',
      'label_submit' => 'Submit'
    ];

    comment_form($args);
  ?>

    <?php if ( have_comments() ) : ?>
        <div class="comments-title-container">
          <h3 class="comments-title">
              <?php
                echo '<i class="fa fa-comment"></i> ' . __('Comments') . ' (<span class="comment-number">' . get_comments_number() . '</span>)'
              ?>
          </h3>
        </div>

        <ol class="comment-list">
                <?php wp_list_comments( array( 'callback' => 'shape_comment' ) ); ?>
        </ol><!-- .comment-list -->

        <?php
            // Are there comments to navigate through?
            if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) :
        ?>
        <nav class="navigation comment-navigation" role="navigation">
            <h1 class="screen-reader-text section-heading"><?php _e( 'Comment navigation', 'impactstudio' ); ?></h1>
            <div class="nav-previous"><?php previous_comments_link( __( '&larr; Older Comments', 'impactstudio' ) ); ?></div>
            <div class="nav-next"><?php next_comments_link( __( 'Newer Comments &rarr;', 'impactstudio' ) ); ?></div>
        </nav><!-- .comment-navigation -->
        <?php endif; // Check for comment navigation ?>

        <?php if ( ! comments_open() && get_comments_number() ) : ?>
        <p class="no-comments"><?php _e( 'Comments are closed.' , 'impactstudio' ); ?></p>
        <?php endif; ?>

    <?php endif; // have_comments() ?>

</div><!-- #comments -->