<?php
    if( get_row_layout() == '2_column' ){
	  $key = 'field_' . uniqid(); //not stored in db yet
        $row_options = get_sub_field('row_options');//Activate Full width OR vertical align
            $sm_pad = get_sub_field('padding_small_po');//full row
            $md_pad = get_sub_field('padding_medium_po');//full row
            $lg_pad = get_sub_field('padding_large_po');//full row
		$row_pad = ' sm-'.$sm_pad. ' md-'.$md_pad. ' lg-'.$lg_pad; 
                $l_sm_pad = get_sub_field('pad_left_small_po');//left
                $l_md_pad = get_sub_field('pad_left_medium_po');//left
                $l_lg_pad = get_sub_field('pad_left_large_po');//left
			$left_pad = ' sm-'.$l_sm_pad. ' md-'.$l_md_pad. ' lg-'.$l_lg_pad;
                    $r_sm_pad = get_sub_field('pad_right_small_po');//right
                    $r_md_pad = get_sub_field('pad_right_medium_po');//right
                    $r_lg_pad = get_sub_field('pad_right_large_po');//right
				$right_pad = ' sm-'.$r_sm_pad. ' md-'.$r_md_pad. ' lg-'.$r_lg_pad;
        
        $background_color2 = get_sub_field('background_clone_2_background_color');//ROW Background Color
            $left_background_color = get_sub_field('background_clone_2left_background_color');//Left Column Background Color
            $right_background_color = get_sub_field('background_clone_2right_background_color');//Left Column Background Color
        $class = get_sub_field('class');//Row Class
        $left_class = get_sub_field('left_class');
        $right_class = get_sub_field('right_class');

		$movement = get_sub_field('row_motion_movement');
        $movement_left = get_sub_field('left_motion_movement');
        $movement_right = get_sub_field('right_motion_movement');
        
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
        
        $column = get_sub_field('column_control');
        if ($column == "sixsix") {
            $large_left = 'large-6';
            $large_right = 'large-6';
        } elseif ($column == "fiveseven") {
            $large_left = 'large-5';
            $large_right = 'large-7';
        } elseif ($column == "foureight") {
            $large_left = 'large-4';
            $large_right = 'large-8';
        } elseif ($column == "threenine") {
            $large_left = 'large-5';
            $large_right = 'large-7';
        } elseif ($column == "sevenfive") {
            $large_left = 'large-7';
            $large_right = 'large-5';
        } elseif ($column == "eightfour") {
            $large_left = 'large-8';
            $large_right = 'large-4';
        } elseif ($column == "ninethree") {
            $large_left = 'large-9';
            $large_right = 'large-3';
        }
?>
	<div id="<?php echo $key;?>" class="<?php echo $background_color2;?> <?php if(get_sub_field('row_motion_movement') !== "none"):?>move-me <?php echo $movement;?><?php endif;?>">
        <div class="row <?php echo $class;?> <?php echo $width_size;?> <?php if($row_options && in_array('middle-align', $row_options)):?> align-middle <?php endif;?><?php echo $row_pad;?>">
            <?php if(get_sub_field('add_headline2')):?>
                <?php if( have_rows('optional_headline2') ): while( have_rows('optional_headline2') ): the_row(); ?>
                    <div class="small-12 medium-12 large-12 column">
                       <?php echo get_template_part('template-parts/cloneTemplate/elements/headline');?>
                    </div>
                <?php endwhile; endif;?>
            <?php endif;?>
            <!--LEFT-->
            <div class="small-12 medium-12 <?php echo $large_left;?> <?php echo $left_background_color;?> <?php if(get_sub_field('left_options_movement') !== "none"):?>move-me <?php echo $movement;?><?php endif;?> <?php echo $left_class;?> <?php echo $left_pad;?>">
                <?php if( have_rows('left_content') ):while( have_rows('left_content') ): the_row(); ?>
                    <?php echo get_template_part('template-parts/cloneTemplate/cloned-content');?>
                <?php endwhile; endif;?>
            </div>
            <!--RIGHT-->
            <div class="small-12 medium-12 <?php echo $large_right;?> <?php echo $right_background_color;?> <?php if(get_sub_field('right_options_movement') !== "none"):?>move-me <?php echo $movement;?><?php endif;?> <?php echo $right_class;?> <?php echo $right_pad;?>">
                <?php if( have_rows('right_content') ): while( have_rows('right_content') ): the_row();?>
                     <?php echo get_template_part('template-parts/cloneTemplate/cloned-content');?>
                <?php endwhile; endif; ?>
            </div>
        </div><!--Row Close-->
    </div><!--end of wrapper for bg color-->
<?php };?>