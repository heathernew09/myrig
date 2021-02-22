<?php
/**
 * Template Name: Team Page
 *
 * @link https://developer.wordpress.org/themes/template-files-section/page-template-files/#creating-custom-page-templates-for-global-use
 *
 * @package wp_rig
 */

namespace WP_Rig\WP_Rig;

get_header();

wp_rig()->print_styles( 'wp-rig-content' );
wp_rig()->print_styles( 'wp-rig-team-page' );

?>
<main id="team-primary" class="container">
		
    <?php get_template_part('template-parts/pages/pageHero');//morten uses template-parts/content/page_header?>
    
	<?php

	while ( have_posts() ) {
		the_post();

        //get_template_part( 'template-parts/content/entry', 'page' );
        the_content();
        }
	?>
	
    
    <?php if( have_rows('team_bios') ): ?>
        <div class="row sm-tb-padd md-tb-padd lg-tb-padd">
        <?php while( have_rows('team_bios') ): the_row(); 
            // vars
            $photo = get_sub_field('photo');
            $name = get_sub_field('name');
            $bio = get_sub_field('bio');
            $title = get_sub_field('title');
            ?>
            <div class="col-sm-12 col-md-3 col-lg-2">
                <img src="<?php echo esc_url( $photo['url'] ); ?>" alt="<?php echo esc_attr( $photo['alt'] ); ?>" class="img-responsive"/>
            </div>    
            <div class="col-sm-12 col-md-3 col-lg-10">
                <h2><?php echo $name;?></h2>
                <h3><?php echo $title;?></h3>
                <p><?php echo $bio;?></p>
            </div>
        <?php endwhile; ?>
        </div>
    <?php endif; ?>
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
</main><!-- #primary -->
<?php
get_footer();
