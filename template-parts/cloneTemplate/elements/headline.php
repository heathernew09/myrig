<?php

          // headline
         
            $title_text = get_sub_field('headline_text');
			$headline_tag = get_sub_field('headline_tag');
			$headlineclass = get_sub_field('headline_class');
				if ($headline_tag == "h1") { // Column should be offset
              		echo '<h1 class="'.$headlineclass.'">';
					echo get_sub_field('headline_text');
					echo '</h1>';
				} elseif ($headline_tag == "h2") {
					echo '<h2 class="'.$headlineclass.'">';
					echo get_sub_field('headline_text');
					echo '</h2>';
				} elseif ($headline_tag == "h3") {
					echo '<h3 class="'.$headlineclass.'">';
					echo get_sub_field('headline_text');
					echo '</h3>';
				} elseif ($headline_tag == "h4") {
					echo '<h4 class="'.$headlineclass.'">';
					echo get_sub_field('headline_text');
					echo '</h4>';
				} elseif ($headline_tag == "h5") {
					echo '<h5 class="'.$headlineclass.'">';
					echo get_sub_field('headline_text');
					echo '</h5>';
				} elseif ($headline_tag == "h6") {
					echo '<h6 class="'.$headlineclass.'">';
					echo get_sub_field('headline_text');
					echo'</h6>';
                } elseif ($headline_tag == "p") {
					echo '<p class="'.$headlineclass.'">';
					echo get_sub_field('headline_text');
					echo'</p>';
				} else {; }
           

          
?> 