<!--Blog 1-->
<div class="row <?php if(get_field('full_width_blog', get_option('page_for_posts'))):?>expanded<?php endif;?> padd">
    <!--Main Content blog 1-->
    <?php if(get_field('activate_sidebar', get_option('page_for_posts'))):?>
        <div class="small-12 medium-12 large-8 column blog-pad" id="bstuff">
    <?php else:?>
        <div class="small-12 medium-12 large-8 large-offset-2 column blog-pad" id="bstuff">
    <?php endif;?>
		<?php if (have_posts()) : $count = 1; while (have_posts()) :  the_post();?>
		  		<div class="row pad">
					<div class="small-12 medium-4 large-4 column">
				  		<a href="<?php the_permalink();?>">
				            <?php get_template_part('template-parts/posts/featured' , 'image');?>
						</a>
                    </div>
                    <div class="small-12 medium-8 large-7 column">
						<a href="<?php the_permalink();?>">
                            <h2 class="article-title"><?php echo the_title(); ?></h2>
                        </a>

                        <?php get_template_part('template-parts/posts/post' , 'details');?>

						<?php if(get_field('show_excerpt', get_option('page_for_posts'))):?><?php the_excerpt();?><?php endif;?>
						
                        <?php get_template_part('template-parts/posts/read' , 'more');?>
						
					</div>
                    <div class="small-12 medium-12 large-11">
                        <hr>
                    </div>
				</div>
			  		
						
		<?php endwhile; endif;?><!--End loop-->
			<div class="small-12 medium-12 large-12">
                <?php sky_page_navi(); ?>
            </div>
						
	    </div>
    <!--Sidebar Blog 1-->
    <?php if(get_field('activate_sidebar', get_option('page_for_posts'))):?>
        <div class="small-12 medium-12 large-4 columns">
            <?php get_template_part('/template-parts/posts/side' , 'bar');?>
        </div>
    <?php endif;?>
</div>