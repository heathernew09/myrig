<?php
// color layout
	if( get_row_layout() == 'colors' ) { 
?>
    <?php if ( have_rows( 'color' ) ) : 
		  echo '<div class="row">';
			  while ( have_rows( 'color' ) ) :
			  the_row();
				$name = get_sub_field('name');
				$hexcode = get_sub_field('hexcode');
				$rgb = get_sub_field('rgb');
				//$pms = get_sub_field('pms');
				$prcs = get_sub_field('prcs');
				
				echo '<div class="colorsblock large-4 column">';
					echo '<div class="colorblock" style="height:100px; background-color:' . $hexcode. ';"></div>';
					echo '<div class="colorblockcard">';
						echo '<h5 class="bold">' . $name . '</h5>';
						echo '<p><strong>Hexcode</strong> ' . $hexcode . '</p>';					
						echo '<p><strong>RGB</strong> ' . $rgb . '</p> ';
						//echo '<p><strong>PMS</strong> ' . $pms . '</p> ';
						echo '<p><strong>PRCS</strong> ' . $prcs . '</p> ';   
					echo '</div>';               
				echo '</div>';
              endwhile;
           echo '</div>';
           endif;?>

<?php } ?><!--end of Color layout-->
