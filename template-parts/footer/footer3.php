<!-- Footer 3 -->
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
    text-align: left;
	margin-left: 0;
}

ul.logo-list li {
    display: inline-block;
    width: 20%;
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
    <div class="large-3">
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
         <!--Footer Phone-->
        <?php if(get_field('footer_phone','option')):?>
        	<p class="foot-phone"><a href="tel:<?php the_field('footer_phone', 'option'); ?>"><?php the_field('footer_phone', 'option'); ?></a></p>
     	<?php endif;?>
          <!--Footer Email-->
          <?php if(get_field('footer_email','option')):?>
                <a href="mailto:<?php the_field('footer_email', 'option') ?>">
                    <?php the_field('footer_email', 'option'); ?>
                </a><br>
            <?php endif;?>
    </div>
    <div class="large-6">
	<!--Footer Nav Columns -->
    <?php if( have_rows('footer_column_links', 'option') ): ?>
    <div class="row">
    	<?php $count=0; while( have_rows('footer_column_links', 'option') ): the_row(); 
			// vars
			$label = get_sub_field('label', 'option');
			$footpagelinks = get_sub_field('foot_pagelinks', 'option');
            ?>
             <div class="column col<?php echo $count;?>">
              <?php if(get_sub_field('label', 'option')):?><p class="footer-link-label"><?php echo $label;?></p><?php endif;?>
			  <?php $posts = get_sub_field('foot_pagelinks', 'option');if( $posts ): ?>
              	<ul class="link-columns">
                    <?php foreach( $posts as $post): // variable must be called $post (IMPORTANT) ?>
                        <?php setup_postdata($post); ?>
                            <li class="possible-label"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>  
                    <?php endforeach; ?>
                </ul>
                    <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
                <?php endif; ?>
                 </div>
			<?php ++$count; endwhile;?>
        </div>
        <?php endif;?>
      </div>
    </div>
  </div>
  <div class="row">
  		<div class="large-6">
        	<!--Logos-->
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
        </div>
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