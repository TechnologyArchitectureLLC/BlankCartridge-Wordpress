<?php
/**
 * The template for displaying a "No posts found" message.
 *
 * @package WordPress
 * @subpackage Blank_Cartridge
 * @since Blank Cartridge 1.0
 */
?>

<?php _e( 'Nothing Found', 'blankcartridge' ); ?>



<?php if ( is_home() && current_user_can( 'publish_posts' ) ) : ?>

<?php printf( __( 'Ready to publish your first post? <a href="%1$s">Get started here</a>.', 'blankcartridge' ), admin_url( 'post-new.php' ) ); ?>

<?php elseif ( is_search() ) : ?>

<?php _e( 'Sorry, but nothing matched your search terms. Please try again with different keywords.', 'blankcartridge' ); ?>
<?php get_search_form(); ?>

<?php else : ?>

<?php _e( 'It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', 'blankcartridge' ); ?>
<?php get_search_form(); ?>

<?php endif; ?>
