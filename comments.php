<?php
/**
 * The template for displaying Comments.
 *
 * The area of the page that contains both current comments
 * and the comment form. The actual display of comments is
 * handled by a callback to bestcorporate_comment() which is
 * located in the functions.php file.
 *
 * @package BestCorporate
 * @since BestCorporate 2.2
 */
?>

<div id="comments">
  <?php if ( post_password_required() ) : ?>
  <p class="nopassword">
    <?php _e( 'This post is password protected. Enter the password to view any comments.', 'bestcorporate' ); ?>
  </p>
</div>
<!-- #comments -->
<?php
/* Stop the rest of comments.php from being processed,
* but don't kill the script entirely -- we still have
* to fully load the template.
*/
	return;
endif;
?>
<?php // You can start editing here -- including this comment! ?>
<?php if ( have_comments() ) : ?>
<h2 id="comments-title">
  <?php
	printf( _n( 'One thought', '%1$s thoughts', get_comments_number(), 'bestcorporate' ),
	number_format_i18n( get_comments_number() ), '<span>' . get_the_title() . '</span>' );
	?>
</h2>
<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : // are there comments to navigate through ?>
<nav id="comment-nav-above">
  <h1 class="assistive-text section-heading">
    <?php _e( 'Comment navigation', 'bestcorporate' ); ?>
  </h1>
  <div class="nav-previous">
    <?php previous_comments_link( __( '&larr; Older Comments', 'bestcorporate' ) ); ?>
  </div>
  <div class="nav-next">
    <?php next_comments_link( __( 'Newer Comments &rarr;', 'bestcorporate' ) ); ?>
  </div>
</nav>
<?php endif; // check for comment navigation ?>
<ol class="commentlist">
  <?php
	/* Loop through and list the comments. Tell wp_list_comments()
	* to use bestcorporate_comment() to format the comments.
	* If you want to overload this in a child theme then you can
	* define bestcorporate_comment() and that will be used instead.
	* See bestcorporate_comment() in bestcorporate/functions.php for more.
	*/
	wp_list_comments('avatar_size=42');
?>
</ol>
<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : // are there comments to navigate through ?>
<nav id="comment-nav-below">
  <h1 class="assistive-text section-heading">
    <?php _e( 'Comment navigation', 'bestcorporate' ); ?>
  </h1>
  <div class="nav-previous">
    <?php previous_comments_link( __( '&larr; Older Comments', 'bestcorporate' ) ); ?>
  </div>
  <div class="nav-next">
    <?php next_comments_link( __( 'Newer Comments &rarr;', 'bestcorporate' ) ); ?>
  </div>
</nav>
<?php endif; // check for comment navigation ?>
<?php endif; // have_comments() ?>
<?php
	// If comments are closed and there are no comments, let's leave a little note, shall we?
	if ( ! comments_open() && '0' != get_comments_number() && post_type_supports( get_post_type(), 'comments' ) ) :
?>
<p class="nocomments">
  <?php _e( 'Comments are closed.', 'bestcorporate' ); ?>
</p>
<?php endif; ?>
<?php comment_form(); ?>
</div>
<!-- #comments -->