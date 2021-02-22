<?php
/**
 * Render your site front page, whether the front page displays the blog posts index or a static page.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#front-page-display
 *
 * @package wp_rig
 */

namespace WP_Rig\WP_Rig;

get_header();

    // Use front page style sheet
	wp_rig()->print_styles( 'wp-rig-content', 'wp-rig-front-page' );
    //get_template_part( 'template-parts/pages/pageHero' );

?>


<main id="home-page-reuben" class="">
    <?php

	while ( have_posts() ) {
		the_post();
        the_content();
        //get_template_part( 'template-parts/content/entry', 'page' );
        }
	?>

    <?php

    if( have_rows( 'layout_options' )): // ACF Clone Content
    while ( have_rows( 'layout_options' )) : the_row(); // Loop through content rows
    
        get_template_part( 'template-parts/cloneTemplate/one' , 'clone' );
        get_template_part( 'template-parts/cloneTemplate/two' , 'clone' );
        get_template_part( 'template-parts/cloneTemplate/three' , 'clone' );
        get_template_part( 'template-parts/cloneTemplate/four' , 'clone' );

    endwhile;
    endif;
    ?>
</main>
<?php
get_footer();