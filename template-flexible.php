<?php
/**
 * Template Name: Flexible Page
 *
 * @link https://developer.wordpress.org/themes/template-files-section/page-template-files/#creating-custom-page-templates-for-global-use
 *
 * @package wp_rig
 */

namespace WP_Rig\WP_Rig;

get_header();

wp_rig()->print_styles( 'wp-rig-content' );

?>
<main id="primary" class="site-full">
		
    <?php get_template_part('template-parts/pages/pageHero');?>

    <?php
        if( have_rows('layout_options')): // Check if any content exists
        while ( have_rows('layout_options')) : the_row(); // Loop through content rows
    ?>
        <?php get_template_part('template-parts/cloneTemplate/one' , 'clone');?>
        <?php get_template_part('template-parts/cloneTemplate/two' , 'clone');?>
        <?php get_template_part('template-parts/cloneTemplate/three' , 'clone');?>
        <?php get_template_part('template-parts/cloneTemplate/four' , 'clone');?>

    <?php
        endwhile; // While has flexible content
        endif; // If has content
    ?>
    
<?php
get_footer();