<?php
  $readMore = get_field('readmore_option', get_option('page_for_posts')); 
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