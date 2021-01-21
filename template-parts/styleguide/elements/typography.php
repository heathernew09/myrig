<? if( get_row_layout() == 'typography' ) {?>
		<?php if( have_rows('font_style') ):
            while( have_rows('font_style') ): the_row();
                $type = get_sub_field('type');
                $size = get_sub_field('size');
                $line_height = get_sub_field('line_height');
                $font_name = get_sub_field('font_name');
                $font_selector = get_sub_field('font_selector');
                $font_weight = get_sub_field('font_weight');
                $font_hexcode = get_sub_field('font_hexcode');
                $background_color = get_sub_field('background_color');
                   
                    echo '<' .$type. ' style="font-size:' .$size. '; font-family:' .$font_selector. '; font-weight:' .$font_weight. '; line-height:' .$line_height. ';';
                    
					if(get_sub_field('background_color')):
                        echo 'background-color:' .$background_color. ';';
                    endif; 
                    echo '">';
                    echo 'Focus on the user and all will follow.';
                    echo '</'.$type.'>';	
					
					echo '<p class="label">' . $type . '  ' .$size . '/' .$line_height. ' ' .$font_name. '</p>';				
            endwhile;
			echo '<hr class="positionthisline">';
        endif;?>
	
<?php } ?>