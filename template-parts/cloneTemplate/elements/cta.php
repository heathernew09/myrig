<?php
    $headline = get_sub_field('headline');
    $text = get_sub_field('text');
    $button_text = get_sub_field('button_text');
	
    $internal_link = get_sub_field('internal_link');
    $external_link = get_sub_field('external_link');
    $form_shortcode = get_sub_field('cta_form');
    $file_download = get_sub_field('file_download');
	
    $cta_type = get_sub_field('select_cta');
    $class = get_sub_field('class');
	$background_color = get_sub_field('background_color');
?>
<div class="clone-cta <?php echo $class;?> <?php echo $background_color;?>">
    <h3 class="text-center"><?php echo $headline;?></h3>

    <p class="text-center"><?php echo $text;?></p>
    <?php 
		//Internal
		if ($cta_type == 'int') : ?>
        <p class="text-center"><a href="<?php echo $internal_link;?>" class="button upper base-background"><?php echo $button_text;?></a></p>
    <?php 
		//External
		elseif($cta_type == 'ext'):?>
        <p class="text-center"><a href="<?php echo $external_link;?>" class="button upper base-background" target="_blank"><?php echo $button_text;?></a></p>
    
    <?php
		//File download 
		elseif($cta_type == 'file'):?>
        <p class="text-center"><a href="<?php echo $file_download['url'];?>" class="button upper base-background" download="<?php echo $button_text;?>"><?php echo $button_text;?></a></p>
    <?php
		//Form shortcode
    	elseif($cta_type == 'form'):?>
        <?php echo $form_shortcode;?>
    <?php endif;?>
</div>