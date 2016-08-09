<?php
/**Template name: Home Page
 * Page Builder Template.
 *
 * @package PlugFramework
 * @subpackage Artcore
 */

get_header(); ?>

<div class="slider">
    <img class="hidden-sm hidden-md hidden-lg" src="<?php echo get_stylesheet_directory_uri() ?>/assets/img/Header_Mobile.jpg" width="100%/">

    <img class="hidden-xs" src="<?php echo get_stylesheet_directory_uri() ?>/assets/img/Header_02.jpg" width="100%"/>
</div>

<?php
//    // Slider Section
//    $ptf_slider_content = rwmb_meta( 'ptf_page_slider_shortcode' );
//    if ( $ptf_slider_content ) {
//        echo '<div class="slider">' . do_shortcode( $ptf_slider_content ) . '</div>';
//    }
?>

<?php
    // Content Section
    while ( have_posts() ) : the_post();
        the_content();
    endwhile; 
?>

<?php get_footer(); ?>
