<p class="blog-details">
    <?php if(get_field('show_date', get_option('page_for_posts'))):?><?php echo the_time(get_option('date_format'));?><?php endif;?>
    <?php if(get_field('show_author', get_option('page_for_posts'))):?>&nbsp;•&nbsp;<?php the_author();?><?php endif;?>
    <?php if(get_field('show_category', get_option('page_for_posts'))):?>&nbsp;•&nbsp;<?php the_category(', '); ?><?php endif;?>
</p>