<?php
/**
 * Template part for displaying the footer info
 *
 * @package wp_rig
 */

namespace WP_Rig\WP_Rig;

?>
<?php // Initialize Variables
  $phone = get_field('site_phone', 'option');
  $email = get_field('site_email', 'option');
  $form = get_field('site_form', 'option');
  $mouse = get_field('site_mouse', 'option');
  $copywrite = get_field('site_copywrite', 'option');
  $hours = get_field('site_hours', 'option'); 
?>
<?php if ( $footer_tagline = get_field( 'footer_tagline', 'options' ) ) : ?>

	<div class="container">
		<div class="row text-center">
			<?php echo ( $footer_tagline ); ?>
			<hr class="greenline"></hr>
		</div>
		
	</div>

<?php endif; ?>

<div class="container footerbody">
	<div class="row">
		<div class="col-xs-12 col-sm-6 col-md-4">
			<h3>Visit Us</h3>
			<?php if($phone):?>
				<p class="foot-phone"><a href="tel:<?php echo $phone; ?>"><?php echo $phone; ?></a></p>
			<?php endif;?>
			<!--Footer Address Group-->
			<?php if( have_rows('site_address', 'option') ): 
				while( have_rows('site_address', 'option') ): the_row(); 
				// vars
				$address = get_sub_field('address', 'option');
				$link = get_sub_field('gps_map_link', 'option');
			?>
				<p><a href="<?php echo $link;?>" target="_blank"><?php echo $address; ?></a></p>
				<?php endwhile; ?>
			<?php endif; ?>
			<?php if($email):?>
				<p class="foot-email"><a href="tel:<?php echo $email; ?>"><?php echo $email; ?></a></p>
			<?php endif;?>
			<?php get_template_part('template-parts/footer/parts/social' , 'profiles');?>
		</div>
		<div class="col-xs-12 col-sm-6 col-md-3">
			<h3>Hours</h3>
			<?php if($hours != ''):?>
				<p class="foot-hours"><?php echo $hours; ?></p>
			<?php endif;?>
		</div>
		<div class="col-xs-12 col-sm-6 col-md-4">
			<h3>Keep in Touch</h3>
			<p>Get our latest works in your inbox.</p>
			<?php if($form):?>
				<?php echo $form; ?>
			<?php endif;?>
			
			
		</div>
	</div>
	<div class="row">
			<div class="col-xs-12 col-sm-6 col-md-9">
				<p class="copywrite">&copy; <?php echo date("Y"); ?> <?php echo get_bloginfo(); ?> | </p>
				<?php 
					$posts = get_field('site_copywrite', 'option');
					if( $posts ): ?>
					<ul class="copywrite-links">
						<?php foreach( $posts as $post): // variable must be called $post (IMPORTANT) ?>
							<?php setup_postdata($post); ?>
							<li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a> <span class="siteby line">|</span></li>
						<?php endforeach; ?>
					</ul>
					<?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
				<?php endif; ?>
				<p class="siteby"><a href="https://www.gretemangroup.com" target="_blank" rel="nofollow noopener" title="Site by Greteman Group" alt="Site by Greteman Group">Site by Greteman Group</a></p>
				
			</div>
			
	</div>
</div><!--container-->