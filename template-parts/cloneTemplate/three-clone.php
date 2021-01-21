<?php if( get_row_layout() == '3_column' ){
	  $key = 'field_' . uniqid(); //not stored in db yet
        $row_options = get_sub_field('row_options');//Activate Full width OR vertical align
    
            $sm_pad = get_sub_field('padding_small_po');
            $md_pad = get_sub_field('padding_medium_po');
            $lg_pad = get_sub_field('padding_large_po');
        $row_pad = ' sm-'.$sm_pad. ' md-'.$md_pad. ' lg-'.$lg_pad; 
                $l_sm_pad = get_sub_field('pad_left_small_po');//left
                $l_md_pad = get_sub_field('pad_left_medium_po');//left
                $l_lg_pad = get_sub_field('pad_left_large_po');//left
            $left_pad = ' sm-'.$l_sm_pad. ' md-'.$l_md_pad. ' lg-'.$l_lg_pad;
                    $m_sm_pad = get_sub_field('pad_middle_small_po');//middle
                    $m_md_pad = get_sub_field('pad_middle_medium_po');//middle
                    $m_lg_pad = get_sub_field('pad_middle_large_po');//middle
                $middle_pad = ' sm-'.$m_sm_pad. ' md-'.$m_md_pad. ' lg-'.$m_lg_pad;
                        $r_sm_pad = get_sub_field('pad_right_small_po');//right
                        $r_md_pad = get_sub_field('pad_right_medium_po');//right
                        $r_lg_pad = get_sub_field('pad_right_large_po');//right
                    $right_pad = ' sm-'.$r_sm_pad. ' md-'.$r_md_pad. ' lg-'.$r_lg_pad;
    
        $background_color3 = get_sub_field('background_clone_3_background_color');//ROW Background Color
            $left_background_color3 = get_sub_field('background_clone_3left_background_color');//Left Column Background Color
            $middle_background_color3 = get_sub_field('background_clone_3middle_background_color');//Left Column Background Color
            $right_background_color3 = get_sub_field('background_clone_3right_background_color');//Left Column Background Color
        $class = get_sub_field('class');//Row class
            $left_class = get_sub_field('left_class');//Left Class
            $middle_class = get_sub_field('middle_class');//Middle Class
            $right_class = get_sub_field('right_class');//Right Class
        
        $column = get_sub_field('large_column_control');
        if ($column == "four") {
            $large_left = 'large-4';
            $large_middle = 'large-4';
            $large_right = 'large-4';
        } elseif ($column == "three") {
            $large_left = 'large-3';
            $large_middle = 'large-3';
            $large_right = 'large-6';
        } elseif ($column == "six") {
            $large_left = 'large-6';
            $large_middle = 'large-3';
            $large_right = 'large-3';
        } 
    
                $movement = get_sub_field('row_motion_movement');
                $movement_left = get_sub_field('left_motion_movement');
                $movement_right = get_sub_field('right_motion_movement');
                $movement_middle = get_sub_field('middle_motion_movement');
    
        $row_control = get_sub_field('row_control');
        if ($row_control == "full-width") {  //Full Width
            $width_size = 'expanded';
        } elseif ($row_control == "regular-width") { //Regular Width
             $width_size = 'sm-column';
        } elseif ($row_control == "skinnied-width") { //Skinny Width
            $width_size = 'skinnied sm-column' ;
        } else { 
            $width_size = 'sm-column';
        }
?>
<div id="<?php echo $key;?>" class="<?php echo $background_color3;?> <?php if($movement == 'none'):?><?php else:?>move-me <?php echo $movement;?><?php endif;?>"> <!-- Wrapper for bg color-->
    <div class="row <?php echo $class;?> <?php echo $width_size;?> <?php if($row_options && in_array('middle-align', $row_options)):?> align-middle <?php endif;?> <?php echo $row_pad;?>">
        <?php if(get_sub_field('add_headline3')):?>
                <div class="small-12 medium-12 large-12 column">
                    <?php if( have_rows('optional_headline3') ): while( have_rows('optional_headline3') ): the_row(); ?>
                        <?php echo get_template_part('template-parts/cloneTemplate/elements/headline');?>
                    <?php endwhile; endif;?>
                </div>
        <?php endif;?>
    <!--LEFT-->
        <div class="small-12 medium-12 <?php echo $large_left;?> <?php echo $left_background_color3;?> <?php if($movement_left == 'none'):?><?php else:?>move-me <?php echo $movement_left;?><?php endif;?> <?php echo $left_class;?> <?php echo $left_pad;?>">
            <?php if( have_rows('left_content_3') ):  while( have_rows('left_content_3') ): the_row(); ?>
                <?php echo get_template_part('template-parts/cloneTemplate/cloned-content');?>
             <?php endwhile;  endif; ?>
        </div>   
    <!--Middle-->
        <div class="small-12 medium-12 <?php echo $large_middle;?> <?php echo $middle_background_color3;?> <?php if($movement_middle == 'none'):?><?php else:?>move-me <?php echo $movement_middle;?><?php endif;?> <?php echo $middle_class;?> <?php echo $middle_pad;?>">
            <?php if( have_rows('middle_content_3') ): while( have_rows('middle_content_3') ): the_row(); ?>
                <?php echo get_template_part('template-parts/cloneTemplate/cloned-content');?>
            <?php endwhile; endif;?>
        </div>
            
    <!--Right-->
        <div class="small-12 medium-12 <?php echo $large_right;?> <?php echo $right_background_color3;?> <?php if($movement_right == 'none'):?><?php else:?>move-me <?php echo $movement_right;?><?php endif;?> <?php echo $right_class;?> <?php echo $right_pad;?>">
            <?php if( have_rows('right_content_3') ): while( have_rows('right_content_3') ): the_row(); ?>
                <?php echo get_template_part('template-parts/cloneTemplate/cloned-content');?>
            <?php endwhile; endif; ?>
        </div>
    </div><!--Row Close-->
</div><!--end of wrapper for bg color-->
<?php };?>