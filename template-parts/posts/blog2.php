<!--Blog 2-->
<div class="row <?php if(get_field('full_width_blog', get_option('page_for_posts'))):?>expanded<?php endif;?>">
    <!--Main Content blog 2-->
    <?php if(get_field('activate_sidebar', get_option('page_for_posts'))):?>
        <div class="small-12 medium-12 large-8 column blog-pad" id="bstuff">
    <?php else:?>
        <div class="small-12 medium-12 large-12 columns">
    <?php endif;?>
            <div class="row <?php if(get_field('full_width_blog', get_option('page_for_posts'))):?>expanded<?php endif;?>">
            <?php if (have_posts()) : while (have_posts()) :  the_post();?>
                  <a href="<?php the_permalink();?>">
                      <div class='small-12 medium-6 large-6 column blog'>
                          <a href="<?php the_permalink();?>" title="Read more of <?php the_title(); ?>">
                              <?php get_template_part('template-parts/posts/featured' , 'image');?>
                          </a>
                          <a href="<?php the_permalink();?>" title="Link to <?php the_title(); ?>">
                              <h2 class="article-title"><?php the_title(); ?></h2>
                          </a>
                          <?php get_template_part('template-parts/posts/post' , 'details');?>
                          
                          <?php if(get_field('show_excerpt', get_option('page_for_posts'))):?><?php the_excerpt();?><?php endif;?>
                          
                          <?php get_template_part('template-parts/posts/read' , 'more');?>
                      </div>
                  </a>
            <?php endwhile; endif;?>
            </div>
        </div>
     <!--Sidebar blog 2-->
     <?php if(get_field('activate_sidebar', get_option('page_for_posts'))):?>
    	 <div class="small-12 medium-12 large-4 columns">
            <?php get_template_part('template-parts/posts/side' , 'bar');?>
	    </div>
    <?php else:?>
    	</div>
    <?php endif;?>       
<?php wp_reset_query();?>				
</div>