<?php
    $type = get_sub_field('list_type');
	  if( have_rows('list_bullets') ):
		  if ($type == 'ul') :   
		  	echo '<ul>';
		  
		  elseif ($type == 'ul2') :   
		  echo '<ul class="no-bullet">';
		
		  elseif ($type == 'ol') :
		  echo '<ol>';
		  endif;
		  while( have_rows('list_bullets') ): the_row();
			  $bullet = get_sub_field('bullet');
			  echo '<li>' . $bullet . '</li>';					
		  endwhile;
		  if ($type == 'ul') :   
		  echo '</ul>';
	
		  elseif ($type == 'ul2') :   
		  echo '<ul class="no-bullet">';
		  
		  elseif ($type == 'ol') :
		  echo '</ol>';
		  endif;
	  endif;
?>