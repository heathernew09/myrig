<?php

          echo "<div class='sky-postSdbrCatCont category-list-pad column'>";
					echo '<h3 class="sky-postSdbrCatTitle white">'.get_sub_field('sidebar_category_title').'</h3>';
					
				$taxonomy = 'capabilities';
 				
				// Get the term IDs assigned to post.
				$post_terms = wp_get_object_terms( $post->ID, $taxonomy, array( 'fields' => 'ids' ) );

				if ( ! empty( $post_terms ) && ! is_wp_error( $post_terms ) ) {

					$term_ids = implode( ',' , $post_terms );

					$terms = wp_list_categories( array(
						'title_li' => '',
						'style'    => 'none',
						'echo'     => false,
						'taxonomy' => $taxonomy,
						'include'  => $term_ids
					) );

					// Display post categories.
					echo  $terms;
				}
    			echo "</div>";

          
?>