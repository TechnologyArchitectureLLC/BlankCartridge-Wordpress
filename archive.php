<?php
/**
 * The template for displaying Archive pages.
 *
 * Used to display archive-type pages if nothing more specific matches a query.
 * For example, puts together date-based pages if no date.php file exists.
 *
 * If you'd like to further customize these archive views, you may create a
 * new template file for each specific one. For example, Blank Cartridge
 * already has tag.php for Tag archives, category.php for Category archives,
 * and author.php for Author archives.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Blank_Cartridge
 * @since Blank Cartridge 1.0
 */

get_header(); ?>


<?php if ( have_posts() ) : ?>
<?php
  				if ( is_day() ) :
						printf( __( 'Daily Archives: %s', 'blankcartridge' ), get_the_date() );
					elseif ( is_month() ) :
						printf( __( 'Monthly Archives: %s', 'blankcartridge' ), get_the_date( _x( 'F Y', 'monthly archives date format', 'blankcartridge' ) ) );
					elseif ( is_year() ) :
						printf( __( 'Yearly Archives: %s', 'blankcartridge' ), get_the_date( _x( 'Y', 'yearly archives date format', 'blankcartridge' ) ) );
					else :
						_e( 'Archives', 'blankcartridge' );
					endif;
?>

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