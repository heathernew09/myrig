<?php 
//blog posts
$posts = get_sub_field('select_post');
if( $posts ):
$post_options = get_sub_field('post_options');
$class = get_sub_field('class');
?>

<div class="blog-post <?php echo $class;?>" data-equilizer>
    <?php $count = 1; foreach( $posts as $post): // variable must be called $post (IMPORTANT) ?>
        <?php setup_postdata($post); ?>
        <div class="card-article-hover card">
            <a href="<?php the_permalink();?>">
                <?php get_template_part('template-parts/posts/featured' , 'image');?>
            </a>
            <div class="card-section">
            	<p class="meta-data article-subtext">
					<?php //show date 
                        if ($post_options && in_array('show_date', $post_options)):?> 
                       <?php echo the_time(get_option('date_format'));?> &middot;
                    <?php endif;?>
                    <?php //show author
                        if ($post_options && in_array('show_author', $post_options)):?>
                       <?php the_author();?>  &middot;
                    <?php endif;?>
                    <?php //show cat
                        if ($post_options && in_array('show_category', $post_options)):?>
                       <?php foreach((get_the_category()) as $category){
        					  echo $category->name."<br>";
        				}	?>
                    <?php endif;?>
                </p>
                <a href="<?php the_permalink();?>">
                	<h3 class="article-title"><?php the_title();?></h3>
                </a>
                <p class="article-desc">
					<?php //excerpt
                        if ($post_options && in_array('show_excerpt', $post_options)):?>
                       <?php the_excerpt();?>
                    <?php endif;?>
  				<?php
				  $readMore = get_sub_field('readmore_option'); 
				?>
				<?php if ($readMore == "0") { //Nothing ?>
					<!--No Link Option-->
				<?php } elseif ($readMore == "1") { //Text ?>
				<div class="blog-readmore" style="position:relative;">
					<a href="<?php the_permalink();?>" class="text-right" title="Read more of <?php the_title(); ?>"><p class="read text-right">Read More</p></a>
				</div>
				<?php } elseif ($readMore == "2") { // Button ?>
				<div class="blog-readmore" style="position:relative;">
					<a href="<?php the_permalink();?>" class="text-right" title="Read more of <?php the_title(); ?>"><button class="button">Read More</button></a>
				</div>
				<?php } ?>
                </p>
            </div>
            <div class="card-divider flex-container align-middle">
                
            </div>
            <div class="hover-border">
  			</div>
        </div><!--card-article-hover-->
    <?php ++$count; endforeach; ?>
</div>
<?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
<?php endif; ?>