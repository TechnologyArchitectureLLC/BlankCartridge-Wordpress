<?php
/**
 * The template for displaying Comments.
 *
 * The area of the page that contains both current comments and the comment
 * form. The actual display of comments is handled by a callback to
 * blankcartridge_comment() which is located in the functions.php file.
 *
 * @package WordPress
 * @subpackage Blank_Cartridge
 * @since Blank Cartridge 1.0
 */

/*
 * If the current post is protected by a password and the visitor has not yet
 * entered the password we will return early without loading the comments.
 */
if ( post_password_required() )
  return;
?>


	<?php if ( have_comments() ) : ?>

<?php
				printf( _nx( 'One thought on &ldquo;%2$s&rdquo;', '%1$s thoughts on &ldquo;%2$s&rdquo;', get_comments_number(), 'comments title', 'blankcartridge' ),
					number_format_i18n( get_comments_number() ), '<span>' . get_the_title() . '</span>' );
?>
	
<?php
				wp_list_comments( array(
					'style'       => 'ol',
					'format'      => 'html5',
					'short_ping'  => true,
					'avatar_size' => 74,
				) );
?>

<?php
			// Are there comments to navigate through?
			if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) :
?>

<?php _e( 'Comment navigation', 'blankcartridge' ); ?>
<?php previous_comments_link( __( '&larr; Older Comments', 'blankcartridge' ) ); ?>
<?php next_comments_link( __( 'Newer Comments &rarr;', 'blankcartridge' ) ); ?>
<?php endif; // Check for comment navigation ?>

<?php if ( ! comments_open() && get_comments_number() ) : ?>
<?php _e( 'Comments are closed.' , 'blankcartridge' ); ?>
<?php endif; ?>

<?php endif; // have_comments() ?>

<?php comment_form( array( 'format' => 'html5' ) ); ?>

