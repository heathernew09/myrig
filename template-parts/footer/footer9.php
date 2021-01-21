<!-- Footer 9 -->
<style type="text/css">
.footer-special-color {
    background-color: <?php the_field('footer_color', 'option'); ?>;
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
}

ul.logo-list li {
    display: inline-block;
    width: 30%;
}
p.copywrite {
    float: left;
    margin-right: 6px;
	color: <?php the_field('footer_link_color', 'option'); ?>;
}
footer a, footer a:link, footer a:focus, footer a:visited, .siteby, .siteby.line, h4.footer-tagline {
    color: <?php the_field('footer_link_color', 'option'); ?>;
}
h4.footer-tagline{font-size:41px;}
form#searchform {
    width: 40%;
    float: left;
    margin-right: 40px;
}
</style>
<?php // Initialize Variables
  $extra = get_field('extra_element', 'option');
  $whatHamb = get_field('hamburger_style', 'option');
  $headerLogo = get_field('header_logo', 'option');
  $topextraElement = get_field('top_extra_element', 'option'); 
?>

<footer class="footer-special-color tbpadd">
  <?php if(get_field('footer_tagline', 'option')):?>
  	<div class="row padd">
		<div class="small-12">
    		<h4 class="text-center footer-tagline"><?php the_field('footer_tagline', 'option');?></h4>
   		</div>
  	</div>
  <?php endif;?>
  <div class="row">
    <div class="large-12">
    <?php if(get_field('footer_tagline', 'option')):?>
     	<hr class="line">
    <?php endif;?>
	  <!--Footer Address Group-->
      <div class="row tbpadd">
      	<div class="column">
		<?php if( have_rows('address_group', 'option') ): 
            while( have_rows('address_group', 'option') ): the_row(); 
            // vars
            $address = get_sub_field('address', 'option');
            $link = get_sub_field('gps_map_link', 'option');
            
            ?>
            <p class="text-center">
            	<a href="<?php echo $gps_map_link;?>" target="_blank">
                	<?php echo $address;?>
            	</a>
            </p>
        <?php endwhile; ?>
		<?php endif; ?>
       	</div>
        <div class="column">
		<?php if( have_rows('address_group_2', 'option') ): 
            while( have_rows('address_group_2', 'option') ): the_row(); 
            // vars
            $address = get_sub_field('address', 'option');
            $link = get_sub_field('gps_map_link', 'option');
            
            ?>
            <p class="text-center">
            	<a href="<?php echo $gps_map_link;?>" target="_blank">
                	<?php echo $address;?>
            	</a>
            </p>
        <?php endwhile; ?>
		<?php endif; ?>
       	</div>
        <div class="column">
		<?php if( have_rows('address_group_3', 'option') ): 
            while( have_rows('address_group_3', 'option') ): the_row(); 
            // vars
            $address = get_sub_field('address', 'option');
            $link = get_sub_field('gps_map_link', 'option');
            
            ?>
            <p class="text-center">
            	<a href="<?php echo $gps_map_link;?>" target="_blank">
                	<?php echo $address;?>
            	</a>
            </p>
        <?php endwhile; ?>
		<?php endif; ?>
       	</div>
        </div><!--address row-->
    </div>
   </div>
   
   <div class="row">
    <div class="small-12 medium-7">
      <!--SEARCH--> 
      	<form role="search" method="get" id="searchform" action="<?php echo home_url( '/' ); ?>">
          <input type="text" placeholder="Search">
        </form> 
      <!-- Social -->
      <div class="socialCont">   
        <?php if (get_field('pinterest', 'option')) { ?>
        <a href="<?php the_field('pinterest', 'option') ?>">
          <span class="fa fa-pinterest" aria-hidden="true"></span>
        </a>
        <?php } ?>
        <?php if (get_field('google_plus', 'option')) { ?>
        <a href="<?php the_field('google_plus', 'option') ?>">
          <span class="fa fa-google-plus" aria-hidden="true"></span>
        </a>
        <?php } ?>
        <?php if (get_field('instagram', 'option')) { ?>
        <a href="<?php the_field('instagram', 'option') ?>">
          <span class="fa fa-instagram" aria-hidden="true"></span>
        </a>
        <?php } ?>
        <?php if (get_field('youtube', 'option')) { ?>
        <a href="<?php the_field('youtube', 'option') ?>">
          <span class="fa fa-youtube-play" aria-hidden="true"></span>
        </a>
        <?php } ?>
        <?php if (get_field('linkedin', 'option')) { ?>
        <a href="<?php the_field('linkedin', 'option') ?>">
          <span class="fa fa-linkedin" aria-hidden="true"></span>
        </a>
        <?php } ?>
        <?php if (get_field('twitter', 'option')) { ?>
        <a href="<?php the_field('twitter', 'option') ?>">
          <span class="fa fa-twitter" aria-hidden="true"></span>
        </a>
        <?php } ?>
        <?php if (get_field('facebook', 'option')) { ?>
        <a class="footlink" href="<?php the_field('facebook', 'option') ?>">
          <span class="fa fa-facebook" aria-hidden="true"></span>
        </a>
        <?php } ?>
      </div>
    </div>

		<div class="small-12 medium-5">
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
        <!--No Logos in footer 2 yet- but leaving this here incase needed-->
        <?php /*?><div class="large-6">
		  <?php if( have_rows('logo_strip', 'option') ): ?>
			  <ul class="logo-list">
				<?php while( have_rows('logo_strip', 'option') ): the_row(); 
					// vars
					$logo = get_sub_field('logo', 'option');
					$link = get_sub_field('link_for_logo', 'option');
					?>
					<li class="logos">
						<?php if( $link ): ?>
							<a href="<?php echo $link; ?>">
						<?php endif; ?>
							<img src="<?php echo $logo['url']; ?>" alt="<?php echo $logo['alt'] ?>" />
						<?php if( $link ): ?>
							</a>
						<?php endif; ?>
					</li>
				<?php endwhile; ?>
			   </ul>
			<?php endif; ?>
			</div><?php */?>
	</div>
</footer>