<?php
    if( get_row_layout() == '1_column' ) { 
        $key = 'field_' . uniqid(); //not stored in db yet
        $row_options = get_sub_field('row_options');//Activate Full width OR vertical align
            $sm_pad = get_sub_field('padding_small_po');
            $md_pad = get_sub_field('padding_medium_po');
            $lg_pad = get_sub_field('padding_large_po');
				$row_pad = ' sm-'.$sm_pad. ' md-'.$md_pad. ' lg-'.$lg_pad;
				
        $background_color = get_sub_field('background_color');//Background Color
        
        $class = get_sub_field('1col_class');
        //Small
        $csm = get_sub_field('columns_sm_width');
        $cso = get_sub_field('columns_sm_offset');
        //Medium
        $cwm = get_sub_field('columns_md_width');
        $cmo = get_sub_field('columns_md_offset');
        //Large
        $clm = get_sub_field('columns_lg_width');
        $clo = get_sub_field('columns_lg_offset');
        
        $movement = get_sub_field('options_movement');
		
		$row_control = get_sub_field('row_control');
        if ($row_control == 'full-width') {  //Full Width
            $width_size = 'expanded';
        } elseif ($row_control == 'regular-width') { //Regular Width
            $width_size = 'sm-column';
        } elseif ($row_control == 'skinnied-width') { //Skinny Width
            $width_size = 'skinnied sm-column' ;
        } else { 
            $width_size = 'sm-column';
        }
?>
    <div id="<?php echo $key;?>" class="<?php echo $background_color;?> <?php if($movement == 'none'):?><?php else:?>move-me <?php echo $movement;?><?php endif;?>">
        <div class="row <?php if(get_sub_field('1col_class')):?> <?php echo $class;?> <?php endif;?><?php echo $width_size;?><?php if($row_options && in_array('full', $row_options)):?> expanded <?php endif;?><?php if($row_options && in_array('middle-align', $row_options)):?> align-middle <?php endif;?> <?php echo $row_pad;?>">
            <div class="small-12 medium-12 large-12 column">
                <?php if(get_sub_field('add_headline')):?>
                    <?php if( have_rows('optional_headline') ): while( have_rows('optional_headline') ): the_row(); ?>
                        <?php echo get_template_part('template-parts/cloneTemplate/elements/headline');?>
                    <?php endwhile; endif;?>
                <?php endif;?>
                <?php if( have_rows('content_1') ): while( have_rows('content_1') ): the_row(); ?>
                    <?php echo get_template_part('template-parts/cloneTemplate/cloned-content');?>
                <?php endwhile; endif;?>
            </div><!--column closing div-->
        </div><!--row closing div-->
    </div><!--Background color wrapper-->
<?php };?>