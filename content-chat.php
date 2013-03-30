<?php
/**
 * The template for displaying posts in the Chat post format.
 *
 * @package WordPress
 * @subpackage Blank_Cartridge
 * @since Blank Cartridge 1.0
 */
?>

<?php the_ID(); ?>" <?php post_class(); ?>

<?php if ( is_single() ) : ?>

<?php else : ?>
  	
<?php the_permalink(); ?>" title="<?php echo esc_attr( sprintf( __( 'Permalink to %s', 'blankcartridge' ), the_title_attribute( 'echo=0' ) ) ); ?>" rel="bookmark"><?php the_title(); ?>
<?php endif; // is_single() ?>

<?php the_chat(); ?>
<?php wp_link_pages( array( 'before' => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'blankcartridge' ) . '</span>', 'after' => '</div>', 'link_before' => '<span>', 'link_after' => '</span>' ) ); ?>
	
<?php blankcartridge_entry_meta(); ?>
<?php edit_post_link( __( 'Edit', 'blankcartridge' ), '<span class="edit-link">', '</span>' ); ?>

<?php if ( is_single() && get_the_author_meta( 'description' ) && is_multi_author() ) : ?>
<?php get_template_part( 'author-bio' ); ?>
<?php endif; ?>
