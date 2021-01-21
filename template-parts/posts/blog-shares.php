<?php 
	$the_url = $_SERVER['PHP_SELF'];
	$the_title = get_the_title(); 
?>
<div class="blogSocialShare">
    <ul class="share-more text-center">
        <a onclick="window.open('http://www.facebook.com/sharer.php?s=100&amp;u=<?php echo get_permalink( $post->ID ); ?>', 'sharer', 'toolbar=0,status=0,width=620,height=280');" href="javascript: void(0)" target="_blank"><li class="facebook"><i class="fa fa-facebook"></i></li></a>

        <a onclick="window.open('http://twitter.com/share?url=<?php echo get_permalink( $post->ID ); ?>&amp;text=<?php the_title();?> &amp;', 'sharer', 'toolbar=0,status=0,width=620,height=280');" href="javascript: void(0)" target="_blank"><li class="twitter"><i class="fa fa-twitter"></i></li></a>	

        <a onclick="window.open('https://www.linkedin.com/shareArticle?mini=true&amp;url=<?php echo get_permalink( $post->ID ); ?>&amp;title=<?php echo urlencode(wp_title('',false)); ?>&amp;summary=<?php echo urlencode($og_description); ?>', 'sharer', 'toolbar=0,status=0,width=620,height=280');" href="javascript: void(0)" target="_blank"><li class="linkedin"><i class="fa fa-linkedin"></i></li></a>
		
		<a href="mailto:?subject=<?php the_title();?>&amp;body=Check out this post: <?php echo get_permalink( $post->ID ); ?>" class="no-highlight" title="Share <?php echo urlencode(wp_title('',false)); ?>"><li class="linkedin"><i class="fa fa-envelope"></i></li></a>
    </ul>
</div>