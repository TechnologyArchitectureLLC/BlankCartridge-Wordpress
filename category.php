<?php
/**
 * The template for displaying Category pages.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Blank_Cartridge
 * @since Blank Cartridge 1.0
 */

get_header(); ?>


<?php if ( have_posts() ) : ?>
<?php printf( __( 'Category Archives: %s', 'blankcartridge' ), single_cat_title( '', false ) ); ?>
                
<?php if ( category_description() ) : // Show an optional category description ?>
<?php echo category_description(); ?>
<?php endif; ?>

<?php /* The loop */ ?>
<?php while ( have_posts() ) : the_post(); ?>
<?php get_template_part( 'content', get_post_format() ); ?>
<?php endwhile; ?>

<?php blankcartridge_paging_nav(); ?>

<?php else : ?>
<?php get_template_part( 'content', 'none' ); ?>
<?php endif; ?>


<?php get_sidebar(); ?>
<?php get_footer(); ?>
