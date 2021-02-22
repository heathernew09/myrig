<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package wp_rig
 */

namespace WP_Rig\WP_Rig;

?>
<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">

	<?php
	if ( ! wp_rig()->is_amp() ) {
		?>
		<script>document.documentElement.classList.remove( 'no-js' );</script>
		<?php
	}
	?>
	<link rel="stylesheet" href="https://use.typekit.net/yze0qeq.css">
	<script src="https://kit.fontawesome.com/06ffa6cd8d.js" crossorigin="anonymous"></script>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'wp-rig' ); ?></a>

	<header id="masthead" class="site-header">
		<div class="row">
			<div class="col-3">
				<?php get_template_part( 'template-parts/header/branding' ); //site title and tag line ?>
			</div>
			<div class="col-6">
				<?php get_template_part( 'template-parts/header/navigation' ); //main menu?>
			</div>
			<div class="col-3">
				<?php $phone = get_field('site_phone', 'option');?>
				<?php if($phone):?>
					<p class="head-phone"><a href="tel:<?php echo $phone; ?>"><?php echo $phone; ?></a></p>
				<?php endif;?>
				<section id="header-search" class="header_search">
					<form role="search" method="get" id="searchexpand" class="search-form" action="<?php echo site_url();?>">
						<label>
							<span class="screen-reader-text">Search for:</span>
							<input type="search" class="search-field" placeholder="Search" value="" name="s">
						</label>
						<input type="submit" class="search-submit" value="Search">
					</form>
				</section>
			</div>
		</div>
	</header><!-- #masthead -->
