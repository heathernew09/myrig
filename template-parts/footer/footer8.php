<!-- Footer 8 -->
<style type="text/css">
.footer-special-color {
    background-color: <?php the_field('footer_color', 'option'); ?>;
}
.footer-special-color2 {
    background-color: <?php the_field('footer_color2', 'option'); ?>;
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
.socialCont a:link, .socialCont a:focus, .socialCont a:visited {
    margin: 0px 14px 0 0;
}
p.copywrite {
    margin-bottom: 0px!important;
}

ul.copywrite-links {
    margin-bottom: 0;
}
</style>
<?php // Initialize Variables
  $extra = get_field('extra_element', 'option');
  $whatHamb = get_field('hamburger_style', 'option');
  $headerLogo = get_field('header_logo', 'option');
  $topextraElement = get_field('top_extra_element', 'option'); 
?>

<footer>
<div class="footer-special-color tbpadd">
  <div class="row align-center">
    <div class="large-12 sm-all-pad md-all-pad lg-tb-pad align-center">
    <!--Phone-->
        <?php if(get_field('footer_phone', 'option')):?>
        	<p class="foot-phone text-center"><a href="tel:<?php the_field('footer_phone', 'option'); ?>"><?php the_field('footer_phone', 'option'); ?></a></p>
     	<?php endif;?>
	<!--Address Group-->
		<?php if( have_rows('address_group', 'option') ): 
            while( have_rows('address_group', 'option') ): the_row(); 
            // vars
            $address = get_sub_field('address', 'option');
            $gps_map_link = get_sub_field('gps_map_link', 'option');
            ?>
            <p class="text-center">
            	<a href="<?php echo $gps_map_link;?>" target="_blank">
                	<?php echo $address;?>
            	</a>
            </p>
        <?php endwhile; ?>
		<?php endif; ?>  
    <!--Footer Email-->
		<?php if(get_field('footer_email', 'option')):?>
              <p class="text-center"><a href="mailto:<?php the_field('footer_email', 'option') ?>">
                  <?php the_field('footer_email', 'option'); ?>
              </a>
              </p>
        <?php endif;?>
    <!--Navigation-->
        <div class="show-for-large">
            <?php SKY_footercenter(); ?>
        </div>
    </div>
  </div><!--main row-->
</div>
<div class="footer-special-color2">
  <div class="row align-center sm-all-pad md-all-pad lg-tb-pad">
  		<div class="small-12 medium-7 large-7 column">
			<div class="mouse">
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
        <div class="small-12 medium-5 large-5 column">
        <!-- Social -->
          <?php get_template_part('inc/footers/parts/social' , 'profiles');?>
    	</div>
	</div>
  </div>
</footer>