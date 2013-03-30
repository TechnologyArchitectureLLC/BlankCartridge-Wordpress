<?php
/**
 * The template for displaying posts in the Quote post format.
 *
 * @package WordPress
 * @subpackage Blank_Cartridge
 * @since Blank Cartridge 1.0
 */
?>

<?php the_ID(); ?>" <?php post_class(); ?>

<?php the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'blankcartridge' ) ); ?>
<?php wp_link_pages( array( 'before' => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'blankcartridge' ) . '</span>', 'after' => '</div>', 'link_before' => '<span>', 'link_after' => '</span>' ) ); ?>
  

<?php blankcartridge_entry_meta(); ?>

<?php if ( comments_open() && ! is_single() ) : ?>

<?php comments_popup_link( '<span class="leave-reply">' . __( 'Leave a comment', 'blankcartridge' ) . '</span>', __( 'One comment so far', 'blankcartridge' ), __( 'View all % comments', 'blankcartridge' ) ); ?>

<?php endif; // comments_open() ?>
<?php edit_post_link( __( 'Edit', 'blankcartridge' ), '<span class="edit-link">', '</span>' ); ?>

<?php if ( is_single() && get_the_author_meta( 'description' ) && is_multi_author() ) : ?>
<?php get_template_part( 'author-bio' ); ?>
<?php endif; ?>
