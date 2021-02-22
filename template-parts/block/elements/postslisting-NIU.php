<?php
	// post listing
	$imageCheck = get_field('show_post_image');
	$authorCheck = get_sub_field('show_post_author');
	$catCheck = get_sub_field('show_post_categories');
		if (have_posts()) : 
			while (have_posts()) : 
				the_post();
				if (1 == 2) {
					echo the_post_thumbnail();
				} else {
					$defaultImage = get_field('default_post_image', options);
					echo "<img class='w100' src='".$defaultImage['url']."' alt='".$defaultImage['alt']."'>";
				}
				echo "<h3 class='sky-postTitle'><a href='".get_the_permalink()."'>".get_the_title()."</a></h3>";
				echo the_time(get_option('date_format')); // Show time
				if ($authorCheck == 1) { // Show author
					echo " | ".get_the_author();
				}
				if ($catCheck == 1) { // Show categories
					echo " | ";
					echo the_category(', ');
				}
					echo "<p class='sky-postExcerpt'>".get_the_excerpt()."</p>";
			endwhile; // end while
		endif; // end if
	wp_reset_query();      
?>