<?php
    $content_text = get_sub_field('content_text');
    $content_options = get_sub_field('content_options');
        $class = get_sub_field('content_class');
        $int_link = get_sub_field('content_intlink');
        $ext_link = get_sub_field('content_extlink');
?>
<!--Add Div with a Class-->
<?php if ($content_options && in_array('class', $content_options)):?>
    <div class="<?php echo $class;?>">
<?php endif;?>

<!--Internal Link-->
<?php if ($content_options && in_array('int_link', $content_options)):?>
    <a href="<?php echo $int_link;?>">
<?php endif;?>
        
<!--External Link-->
<?php if ($content_options && in_array('ext_link', $content_options)):?>
    <a href="<?php echo $ext_link;?>" target="_blank">
<?php endif;?>
        
        <!--Main Content area-->
        <?php echo $content_text;?>

        
<!--Close Internal Link-->
<?php if ($content_options && in_array('int_link', $content_options)):?>
    </a>
<?php endif;?>
<!--Close External Link-->
<?php if ($content_options && in_array('ext_link', $content_options)):?>
    </a>
<?php endif;?>       
        
<!--End div with a class-->      
<?php if ($content_options && in_array('class', $content_options)):?>
    </div>
<?php endif;?>