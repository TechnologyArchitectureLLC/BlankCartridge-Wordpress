<?php
/**
 * The template for displaying Author bios.
 *
 * @package WordPress
 * @subpackage Blank_Cartridge
 * @since Blank Cartridge 1.0
 */
?>

<?php echo get_avatar( get_the_author_meta( 'user_email' ), apply_filters( 'blankcartridge_author_bio_avatar_size', 74 ) ); ?>
<?php printf( __( 'About %s', 'blankcartridge' ), get_the_author() ); ?>
<?php the_author_meta( 'description' ); ?>
<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>
<?php printf( __( 'View all posts by %s <span class="meta-nav">&rarr;</span>', 'blankcartridge' ), get_the_author() ); ?>
  		
	
