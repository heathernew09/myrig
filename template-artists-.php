<?php
/**
 * Template Name: Smartists
 *
 * When active, by adding the heading above and providing a custom name
 * this template becomes available in a drop-down panel in the editor.
 *
 * Filename can be anything.
 *
 * @link https://developer.wordpress.org/themes/template-files-section/page-template-files/#creating-custom-page-templates-for-global-use
 *
 * @package wp_rig
 */

namespace WP_Rig\WP_Rig;

get_header();

wp_rig()->print_styles( 'wp-rig-content' );
wp_rig()->print_styles( 'wp-rig-artists-page' );

?>

	<main id="artists">
        <section class="container text-center tb-padd">
            <div class="row">
                
                    <h1>Artists</h1>
                    <ul class="nav justify-content-center" id="artist-anchors">
                        <li class="nav-item">
                            <a href="#associated-american-artists" class="nav-link">Associated American Artists</a>
                        </li>
                        <li class="nav-item">
                            <a href="#contemporary-kansas-regional-artists" class="nav-link">Contemporary Kansas & Regional Artists</a>
                        </li>
                        <li class="nav-item">
                            <a href="#prairie-print-makers" class="nav-link">Prairie Print Makers</a>
                        </li>
                        <li class="nav-item">
                            <a href="#special-consignments" class="nav-link">Special Consignments</a>
                        </li>
                        <li class="nav-item">
                            <a href="#three-dimensional-art" class="nav-link">Three Dimensional Art</a>
                        </li>
                        <li class="nav-item">
                            <a href="#jewelry" class="nav-link">Jewelry</a>
                        </li>
                    </ul>
                
            </div>
        </section>
        <div class="album py-5 bg-light">
            <div class="container">
                <?php
                    $posts = get_field( 'associated_american_artists' );
                    if ( $posts ) : ?>
                    <a name="associated-american-artists"></a>
                    <h2>Associated American Artists</h2>
                        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                            <?php foreach( $posts as $post) : ?>
                            <?php setup_postdata( $post ); ?>
                                <div class="col">
                                    <a href="<?php the_permalink(); ?>">
                                        <div class="card shadow-sm">
                                            <?php get_template_part('template-parts/posts/featured' , 'image');?>
                                            <div class="card-body">
                                                <h3 class="artists-name"><?php the_title(); ?></h3><!--Artists Name-->
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    <?php wp_reset_postdata(); ?>
                <?php endif; ?>
                <hr class="featurette-divider">
                <?php
                    $posts = get_field( 'contemporary_artists' );
                    if ( $posts ) : ?>
                    <a name="contemporary-kansas-regional-artists"></a>
                    <h2>Contemporary Kansas & Regional Artists</h2>
                        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                            <?php foreach( $posts as $post) : ?>
                            <?php setup_postdata( $post ); ?>
                                <div class="col">
                                    <a href="<?php the_permalink(); ?>">
                                        <div class="card shadow-sm">
                                            <?php get_template_part('template-parts/posts/featured' , 'image');?>
                                            <div class="card-body">
                                                <h3 class="artists-name"><?php the_title(); ?></h3><!--Artists Name-->
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            <?php endforeach; ?>
                        </div>
                        <?php wp_reset_postdata(); ?>
                    <?php endif; ?>
                <hr class="featurette-divider">
                <?php
                    $posts = get_field( 'prairie_print_makers' );
                    if ( $posts ) : ?>
                    <a name="prairie-print-makers"></a>
                    <h2>Prairie Print Makers</h2>
                        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                            <?php foreach( $posts as $post) : ?>
                            <?php setup_postdata( $post ); ?>
                                <div class="col">
                                    <a href="<?php the_permalink(); ?>">
                                        <div class="card shadow-sm">
                                            <?php get_template_part('template-parts/posts/featured' , 'image');?>
                                            <div class="card-body">
                                                <h3 class="artists-name"><?php the_title(); ?></h3><!--Artists Name-->
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            <?php endforeach; ?>
                        </div>
                        <?php wp_reset_postdata(); ?>
                    <?php endif; ?>
                <?php
                    $posts = get_field( 'special_consignments' );
                    if ( $posts ) : ?>
                    <a name="special-consignments"></a>
                    <h2>Special Consignments</h2>
                        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                            <?php foreach( $posts as $post) : ?>
                            <?php setup_postdata( $post ); ?>
                                <div class="col">
                                    <a href="<?php the_permalink(); ?>">
                                        <div class="card shadow-sm">
                                            <?php get_template_part('template-parts/posts/featured' , 'image');?>
                                            <div class="card-body">
                                                <h3 class="artists-name"><?php the_title(); ?></h3><!--Artists Name-->
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            <?php endforeach; ?>
                        </div>
                        <?php wp_reset_postdata(); ?>
                    <?php endif; ?>
                <?php
                    $posts = get_field( 'three_dimensional_art' );
                    if ( $posts ) : ?>
                    <a name="three-dimensional-art"></a>
                    <h2>Three Dimensional Art</h2>
                        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                            <?php foreach( $posts as $post) : ?>
                            <?php setup_postdata( $post ); ?>
                                <div class="col">
                                    <a href="<?php the_permalink(); ?>">
                                        <div class="card shadow-sm">
                                            <?php get_template_part('template-parts/posts/featured' , 'image');?>
                                            <div class="card-body">
                                                <h3 class="artists-name"><?php the_title(); ?></h3><!--Artists Name-->
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            <?php endforeach; ?>
                        </div>
                        <?php wp_reset_postdata(); ?>
                    <?php endif; ?>
                <?php
                    $posts = get_field( 'jewelry' );
                    if ( $posts ) : ?>
                    <a name="jewelry"></a>
                    <h2>Jewelry</h2>
                        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                            <?php foreach( $posts as $post) : ?>
                            <?php setup_postdata( $post ); ?>
                                <div class="col">
                                    <a href="<?php the_permalink(); ?>">
                                        <div class="card shadow-sm">
                                            <?php get_template_part('template-parts/posts/featured' , 'image');?>
                                            <div class="card-body">
                                                <h3 class="artists-name"><?php the_title(); ?></h3><!--Artists Name-->
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            <?php endforeach; ?>
                        </div>
                        <?php wp_reset_postdata(); ?>
                    <?php endif; ?>
            </div>
        </div>
    </main><!-- #primary -->
<?php
get_footer();