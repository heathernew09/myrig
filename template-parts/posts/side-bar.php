<?php if( have_rows('blog_elements' , get_option('page_for_posts')) ):
	while( have_rows('blog_elements' , get_option('page_for_posts')) ): the_row(); 

    $row_bg = get_sub_field('background_color', get_option('page_for_posts'));
   			$sm_pad = get_sub_field('blogside_small_po', get_option('page_for_posts')); 
            $md_pad = get_sub_field('blogside_medium_po', get_option('page_for_posts')); 
            $lg_pad = get_sub_field('blogside_large_po', get_option('page_for_posts')); 
				$sb_pad = ' sm-'.$sm_pad. ' md-'.$md_pad. ' lg-'.$lg_pad;
    
?>
<div class=" sidebar-flex <?php echo $row_bg;?> <?php echo $sb_pad;?> bot-mar"> 
	<?php echo get_template_part('template-parts/cloneTemplate/cloned-content');?>
</div>
<?php 
	endwhile;
endif;?>