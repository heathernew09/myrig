<!-- Footer 4 -->
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
h3.gform_title {
    color: #e3e3e3;
}
.hide-label label.gfield_label {
    display: none!important;
}
ul.gform_fields li {
    list-style-type: none;
    margin-left: 0;
}
ul.gform_fields {
    margin-left: 0;
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
			<?php $count++; endwhile;?>
        </div>
        <?php endif;?>
      </div>
	  <?php if (get_field('footer_form', 'option')):
	  	//var
	  	$footer_form = get_field('footer_form','option');
	  ?>
	  
	  	<div class="large-3">
			<?php echo do_shortcode('[gravityform id='.$footer_form.' title="true" description="false" ajax="true"]');?>
	  	</div>
	  <?php endif;?>
    </div>
  </div>
  <div class="row">
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
              <?php if(get_field('mouse_text')):?><div class="mouse top-padd">
				<p class="copywrite"><?php the_field('mouse_text', 'option');?></p>
              </div>
              <?php endif;?>
		</div>
        
	</div>
</footer>
<!--This option doesnt include socials but keeping code here incase need to add in future-->
      <!-- Social -->
      <?php /*?>
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
        <?php } ?><?php */?>