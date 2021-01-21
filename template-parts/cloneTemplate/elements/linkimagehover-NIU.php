<?php
    $link_image = get_sub_field('link_image');
		$page_link = get_sub_field('page_link');
		$hover_color = get_sub_field('hover_color');
		$link_text = get_sub_field('link_text');
		$url = get_template_directory_uri();
			echo '<a href="' . $page_link . '">';
			echo '<div class="'.$hover_color.' linkHover no-pad">';
			echo '<div class="image-hovered">';
			echo '<img src="'.$link_image.'" class="hover-disappear">';
			echo '</div>';
			echo '<div class="text-hovered">';
			echo '<h3 class="hoverText serif-text white text-center">'.$link_text.'</h3>';
			echo '<p class="text-center">&#8594;</p>';
			echo '</div>';
			echo '</div>';
			echo '</a>';
?>