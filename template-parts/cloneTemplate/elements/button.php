<?php
	$button_text = get_sub_field('button_text'); 
	$button_class = get_sub_field('button_class'); 
	$button_link_ext = get_sub_field('button_link'); 
	$button_link_int = get_sub_field('button_link_int');
    $anchor = get_sub_field('anchor_link');
	$file_download = get_sub_field('file_download');
	$type_of_button = get_sub_field('type_of_button');?>

	<?php if ($type_of_button == 'int') : ?>
		<a href="<?php echo $button_link_int;?>" class="button <?php echo $button_class;?>"><?php echo $button_text;?></a>
	<?php endif; ?>
	<?php if ($type_of_button == 'ext') : ?>
		<a href="<?php echo $button_link_ext;?>" class="button <?php echo $button_class;?>" target="_blank"><?php echo $button_text;?></a>
	<?php endif; ?>
	<?php if ($type_of_button == 'file') : ?>
		<a href="<?php echo $file_download['url'];?>" class="button <?php echo $button_class;?>" download="<?php echo $button_text;?>"><?php echo $button_text;?></a>
    <?php endif; ?>
    <?php if ($type_of_button == 'anchor') : ?>
		<a href="<?php echo $anchor;?>" class="button <?php echo $button_class;?>"><?php echo $button_text;?></a>
	<?php endif; ?>