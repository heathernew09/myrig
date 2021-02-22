<?php
	$type_of_video = get_sub_field('type_of_video'); // Get post ID from ACF
	$video_options = get_sub_field('video_options'); // Get post ID from ACF
    $class = get_sub_field('class');
    //Lightbox additional options
    $video_options = get_sub_field('video_options');
    $embed_code = get_sub_field('embed_code');
    $screen_cover = get_sub_field('screen_cover');
    $custom_button = get_sub_field('custom_button');
    $count = 1;
?>
<?php if ( get_sub_field( 'type_of_video' ) == 'embed' ) : ?>
    <div class="responsive-embed <?php echo $class;?>">
        <?php echo $embed_code;?>
    </div>
<?php endif;?>
<?php // Lightbox Video
	if ( get_sub_field( 'type_of_video' ) == 'lightbox' ) : ?>
    <div class="reveal <?php echo $class;?>" id="Modal<?php echo $count;?>" data-reveal>
        <div class="responsive-embed">
			<?php echo $embed_code;?>
        </div>
		<button class="close-button" data-close aria-label="Close modal" type="button">
    		<span aria-hidden="true">&times;</span>
  		</button>
        <?php if ( $additional_lightbox_content = get_sub_field( 'additional_lightbox_content' ) ) : ?>
			<?php echo $additional_lightbox_content; ?>
        <?php endif; ?>
	</div>
	<div class="pad <?php echo $class;?>">
		<img src="<?php echo $screen_cover['url']; ?>" alt="<?php echo $screen_cover['alt']; ?> Photos" class="img-responsive" data-open="Modal<?php echo $count;?>">
        <?php // Custom Play Button
			if ($video_options == 'custom_button') : ?>
            <div class="custom_button">
                <img src="<?php echo $custom_button['url'];?>" alt="lightbox play button" data-open="Modal<?php echo $count;?>">
            </div>
        <?php else:?>
            <div class="custom_button">
                <i class="fa fa-play-circle" data-open="Modal<?php echo $count;?>"></i>
            </div>
        <?php endif;?>
    </div>
    <?php $count++;?>
<?php endif;?>