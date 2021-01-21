<?php if( get_row_layout() == '4_column' ){
	  $key = 'field_' . uniqid(); //not stored in db yet
        $row_options = get_sub_field('row_options');//Activate Full width OR vertical align    
            $sm_pad = get_sub_field('padding_small_po');//row
            $md_pad = get_sub_field('padding_medium_po');//row
            $lg_pad = get_sub_field('padding_large_po');//row
            $row_pad = ' sm-'.$sm_pad. ' md-'.$md_pad. ' lg-'.$lg_pad;
                $l_sm_pad = get_sub_field('pad_left_small_po');//left
                $l_md_pad = get_sub_field('pad_left_medium_po');//left
                $l_lg_pad = get_sub_field('pad_left_large_po');//left
                $left_pad = ' sm-'.$l_sm_pad. ' md-'.$l_md_pad. ' lg-'.$l_lg_pad;
                    $m_sm_pad = get_sub_field('pad_middle_small_po');//middle left
                    $m_md_pad = get_sub_field('pad_middle_medium_po');//middle left
                    $m_lg_pad = get_sub_field('pad_middle_large_po');//middle left
                    $middle_pad = ' sm-'.$l_sm_pad. ' md-'.$l_md_pad. ' lg-'.$l_lg_pad;
                        $mr_sm_pad = get_sub_field('pad_middleright_small_po');//middle right
                        $mr_md_pad = get_sub_field('pad_middleright_medium_po');//middle right
                        $mr_lg_pad = get_sub_field('pad_middleright_large_po');//middle right
                        $middleright_pad = ' sm-'.$l_sm_pad. ' md-'.$l_md_pad. ' lg-'.$l_lg_pad;
                            $r_sm_pad = get_sub_field('pad_right_small_po');//right
                            $r_md_pad = get_sub_field('pad_right_medium_po');//right
                            $r_lg_pad = get_sub_field('pad_right_large_po');//right
                            $right_pad = ' sm-'.$r_sm_pad. ' md-'.$r_md_pad. ' lg-'.$r_lg_pad;
        $background_color4 = get_sub_field('background_clone_4_background_color');//ROW Background Color
            $left_background_color4 = get_sub_field('background_clone_4left_background_color');//Left Column Background Color
            $middle_background_color4 = get_sub_field('background_clone_4middle_background_color');//Left Column Background Color
            $middleright_background_color4 = get_sub_field('background_clone_4middle_right_background_color');//Left Column Background Color
            $right_background_color4 = get_sub_field('background_clone_4right_background_color');//Left Column Background Color
        $class = get_sub_field('class');//class
            $left_class = get_sub_field('left_class');//Left Class
            $leftmiddle_class = get_sub_field('left_middle_class');//Left Middle Class
            $rightmiddle_class = get_sub_field('right_middle_class');//Left Middle Class
            $right_class = get_sub_field('right_class');//Right Class
        
    	$movement = get_sub_field('row_motion_movement');
        $movement_left = get_sub_field('left_motion_movement');
        $movement_right = get_sub_field('right_motion_movement');
        $movement_middleleft = get_sub_field('middleleft_motion_movement');
        $movement_middleright = get_sub_field('middleright_motion_movement');
	
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
<div id="<?php echo $key;?>" class="<?php echo $background_color4;?> <?php if($movement == 'none'):?><?php else:?>move-me <?php echo $movement;?><?php endif;?>">
    <div class="row <?php echo $class;?> <?php echo $width_size;?>  <?php if($row_options && in_array('full', $row_options)):?> expanded <?php endif;?><?php if($row_options && in_array('middle-align', $row_options)):?> align-middle <?php endif;?> <?php echo $row_pad;?>">
    <!--Headline-->
       <?php if(get_sub_field('add_headline4')):?>
            <div class="small-12 medium-12 large-12 column">
                <?php if( have_rows('optional_headline4') ): while( have_rows('optional_headline4') ): the_row(); ?>
                    <?php echo get_template_part('template-parts/cloneTemplate/elements/headline');?>
                <?php endwhile; endif;?>
            </div>
        <?php endif;?>
	<!--Left-->
        <div class="small-12 medium-6 large-3 <?php echo $left_background_color4;?> <?php if($movement_left == 'none'):?><?php else:?>move-me <?php echo $movement_left;?><?php endif;?> <?php echo $left_class;?> <?php echo $left_pad;?>">
            <?php if( have_rows('left_content_4') ):  while( have_rows('left_content_4') ): the_row(); ?>
                <?php echo get_template_part('template-parts/cloneTemplate/cloned-content');?>
             <?php endwhile;  endif; ?>
        </div>
    <!--Middle Left-->
        <div class="small-12 medium-6 large-3 <?php echo $middle_background_color4;?> <?php if($movement_middleleft == 'none'):?><?php else:?>move-me <?php echo $movement_middleleft;?><?php endif;?> <?php echo $leftmiddle_class;?> <?php echo $middle_pad;?>">
            <?php if( have_rows('middle_content_4') ): while( have_rows('middle_content_4') ): the_row(); ?>
                <?php echo get_template_part('template-parts/cloneTemplate/cloned-content');?>
            <?php endwhile; endif;?>
        </div> 
    <!--Middle Right-->
        <div class="small-12 medium-6 large-3 <?php echo $middleright_background_color4;?> <?php if($movement_middleright == 'none'):?><?php else:?>move-me <?php echo $movement_middleright;?><?php endif;?><?php echo $rightmiddle_class;?> <?php echo $middleright_pad;?>">
            <?php if( have_rows('middle_right_content_4') ): while( have_rows('middle_right_content_4') ): the_row(); ?>
                <?php echo get_template_part('template-parts/cloneTemplate/cloned-content');?>
            <?php endwhile; endif;?>
        </div>
            
    <!--Right-->
        <div class="small-12 medium-6 large-3 <?php echo $right_background_color4;?> <?php if($movement_right == 'none'):?><?php else:?>move-me <?php echo $movement_right;?><?php endif;?> <?php echo $right_class;?> <?php echo $right_pad;?>">
            <?php if( have_rows('right_content_4') ): while( have_rows('right_content_4') ): the_row(); ?>
                <?php echo get_template_part('template-parts/cloneTemplate/cloned-content');?>
            <?php endwhile; endif; ?>
        </div>
    </div><!--Row Close-->
</div><!--end of wrapper for bg color-->
<?php };?>