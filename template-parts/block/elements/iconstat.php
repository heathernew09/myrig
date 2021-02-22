<?php
$image = get_sub_field('image_large');
if( $image ):

    // Image variables.
    $url = $image['url'];
    $title = $image['title'];
    $alt = $image['alt'];
    $caption = $image['caption'];

    // Thumbnail size attributes.
    //$size = 'full';
    //$sizes = 'full';
    //$full = $image['sizes'][ $size ];
    //$width = $image['sizes'][ $size . '-width' ];
    //$height = $image['sizes'][ $size . '-height' ];

	//Checkboxes- added features
    $image_options = get_sub_field('image_options');
    $image_class = get_sub_field('image_class');
    $int_link = get_sub_field('interior_link');
    $ext_link = get_sub_field('exterior_link');
    $imgSmall = get_sub_field('image_small');
    $imgMedium = get_sub_field('image_medium');
    $imgLarge = get_sub_field('image_large');
	$capt = $image['caption'];

    $show_cap = get_sub_field('show_caption');
?>
<?php if ( get_sub_field('image_options') == 'int_link' ) : ?>
<a href="<?php echo $int_link;?>">
<!--Internal Link--> 

<?php elseif ( get_sub_field('image_options') == 'ext_link' ) : ?>
<a href="<?php echo $ext_link;?>" target="_blank">
<!--External Link-->
<?php endif;?>
		
            <!-- Begin caption wrap.-->
            <?php if( $caption ): ?>
                <div class="individual-image-wrapper">
            <?php endif; ?>

                <img src="<?php echo esc_url($url); ?>" alt="<?php echo esc_attr($alt); ?>" class="img-responsive"/>
    
            <?php 
            // End caption wrap.
            if( $caption ): ?>
                    <?php if ($show_cap == "yes") : ?>
                <div class="wp-caption">
                    <p class="wp-caption-text"><?php echo esc_html($caption); ?></p>
                </div>
           
                    <?php endif; ?>
                    
                 </div>
            <?php endif;?>
<?php endif; ?>
<?php if ( get_sub_field('image_options') == 'int_link' ) : ?> 
    </a><!--closing interior link-->
<?php elseif ( get_sub_field('image_options') == 'ext_link' ) : ?>
    </a><!--closing exterior link-->
<?php endif;?>