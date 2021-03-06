<!-- Footer 5 -->
<style type="text/css">
.footer-special-color {
    background-color: <?php the_field('footer_color', 'option'); ?>;
}
.socialCont {
    text-align: right;
}
ul.copywrite-links {
    display: inline-block;
    margin-left: 0;
}

ul.copywrite-links li {
    display: inline;
    list-style-type: none;
}
ul.logo-list {
    display: inline-block;
    text-align: right;
	margin-left: 0;
}

ul.logo-list li {
    display: inline-block;
    width: 20%;
}
.footer-logo img {
    max-width: 170px;
}
ul.link-columns{
	margin-left:0;
	list-style-type:none;
}
.footer-link-label{
	margin-bottom:0;
	font-size:inherit;
	font-weight:bold;
}
p.copywrite {
    float: left;
    margin-right: 6px;
	color: <?php the_field('footer_link_color', 'option'); ?>;
}
.col3 li a {
    font-weight: bold;
}
.footer-link-label, .possible-label a, footer a, .siteby, .sitebyline {
    color: <?php the_field('footer_link_color', 'option'); ?>;
}
</style>
<?php // Initialize Variables
  $extra = get_field('extra_element', 'option');
  $whatHamb = get_field('hamburger_style', 'option');
  $headerLogo = get_field('header_logo', 'option');
  $topextraElement = get_field('top_extra_element', 'option'); 
?>

<footer class="footer-special-color tbpadd">
  <div class="row">
    <div class="large-5">
    <!--Footer Phone-->
        <?php if(get_field('footer_phone','option')):?>
        	<p class="foot-phone"><a href="tel:<?php the_field('footer_phone', 'option'); ?>"><?php the_field('footer_phone', 'option'); ?></a></p>
     	<?php endif;?>
	  <!--Footer Address Group-->
		<?php if( have_rows('address_group', 'option') ): 
            while( have_rows('address_group', 'option') ): the_row(); 
            // vars
            $address = get_sub_field('address', 'option');
            $link = get_sub_field('gps_map_link', 'option');
            
            ?>
            <a href="<?php echo $gps_map_link;?>" target="_blank">
                <?php echo $address;?>
            </a>
        <?php endwhile; ?>
		<?php endif; ?>
         
          <!--Footer Email-->
          <?php if(get_field('footer_email','option')):?>
                <a href="mailto:<?php the_field('footer_email', 'option') ?>">
                    <?php the_field('footer_email', 'option'); ?>
                </a><br>
            <?php endif;?>
    </div>
    <div class="large-2">
		<div class="footer-logo top-pad">
            	<?php if(get_field('footer_logo','option')):?>
                	<img src="<?php the_field('footer_logo','option');?>" class="main-foot-logo">
                <?php endif;?>
            </div>
    </div>
    <div class="large-5">
        <!-- Social -->
          <?php get_template_part('inc/footers/parts/social' , 'profiles');?>
           <!--Button-->
           <?php if( have_rows('footer_button', 'option') ): 
				while( have_rows('footer_button', 'option') ): the_row(); 
					// vars
					$button_text = get_sub_field('button_text', 'option');
					$link = get_sub_field('link', 'option');
					?>
					<div class="text-right top-pad">
                    	<a href="<?php echo $link;?>">
							<button class="text-right button"><?php echo $button_text;?></button>
                    	</a>
                    </div>
				<?php endwhile; ?>
			<?php endif; ?>
			 
 
           <!--Navigation-->
           <div class="show-for-large">
				<?php SKY_footerright(); ?>
           </div>
    </div>
  </div><!--main row-->
  <div class="row tbpad">
  		<div class="small-12 large-6">
			<div class="mouse top-padd">
				<p class="copywrite">&copy; <?php echo date("Y"); ?> <?php echo get_bloginfo(); ?> | </p>
					<?php 
                    $posts = get_field('copywrite_links', 'option');
                    if( $posts ): ?>
                        <ul class="copywrite-links">
                        <?php foreach( $posts as $post): // variable must be called $post (IMPORTANT) ?>
                            <?php setup_postdata($post); ?>
                            <li>
                                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a> <span class="siteby line">|</span>
                            </li>
                        <?php endforeach; ?>
                        </ul>
                        <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
                    <?php endif; ?>

			  </div>
		</div>
	</div>
</footer>