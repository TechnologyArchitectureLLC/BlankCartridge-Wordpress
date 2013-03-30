<?php
/**
 * The template for displaying 404 pages (Not Found).
 *
 * @package WordPress
 * @subpackage Blank_Cartridge
 * @since Blank Cartridge 1.0
 */

get_header(); ?>

<?php _e( 'Not found', 'blankcartridge' ); ?>
  
<?php _e( 'This is somewhat embarrassing, isn&rsquo;t it?', 'blankcartridge' ); ?>
<?php _e( 'It looks like nothing was found at this location. Maybe try a search?', 'blankcartridge' ); ?>

<?php get_search_form(); ?>


<?php get_footer(); ?>
