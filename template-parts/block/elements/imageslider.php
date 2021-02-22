<?php 
if( get_sub_field('image_slide_transition') == 'fade' ) {
    $data_options= 'animInFromLeft:fade-in; animInFromRight:fade-in; animOutToLeft:fade-out; animOutToRight:fade-out;';
} elseif ( get_sub_field( 'image_slide_transition' ) == 'left-slidein' ){
	$data_options= 'slide-in-left';
} elseif ( get_sub_field( 'image_slide_transition' ) == 'slide-out-left' ){
    $data_options= 'slide-out-left';
} elseif ( get_sub_field( 'image_slide_transition' ) == 'slide-in-right' ){
    $data_options= 'slide-in-right';
} elseif ( get_sub_field( 'image_slide_transition' ) == 'slide-out-right' ){
    $data_options= 'slide-out-right';
} elseif ( get_sub_field('image_slide_transition') == '' ) {
    $data_options= 'animInFromLeft:fade-in; animInFromRight:fade-in; animOutToLeft:fade-out; animOutToRight:fade-out;';
} else {
	$data_options ='';
}; ?>


<?php if( have_rows('image_slider') ):?>
<div class="row expanded bot-marr">
    <div class="small-12 medium-12 large-12 column">
        <div id="slide-wrapper">
            <div class="orbit" role="region" aria-label="Slides" data-orbit data-options="<?php echo $data_options;?>">
                  <ul class="orbit-container">
                    <button class="orbit-previous" aria-label="previous"><span class="show-for-sr">Previous Slide</span>&#9664;&#xFE0E;</button>
                    <button class="orbit-next" aria-label="next"><span class="show-for-sr">Next Slide</span>&#9654;&#xFE0E;</button>
                    <?php $count = 0; while( have_rows('image_slider') ): the_row(); 
						  $text = get_sub_field('slide_text');
						  $desktop_image = get_sub_field('desktop_image');
						  $mobile_image = get_sub_field('mobile_image');
                      ?>
                    <li class="<?php if($count == 0) : echo "is-active"; endif; ?> orbit-slide">
                        <img class="orbit-image show-for-large" src="<?php echo esc_url( $desktop_image['url'] ); ?>" alt="<?php echo esc_attr( $desktop_image['alt'] ); ?>">
                        <img class="orbit-image hide-for-large" src="<?php echo esc_url( $mobile_image['url'] ); ?>" alt="<?php echo esc_attr( $mobile_image['alt'] ); ?>">
    					<figcaption class="orbit-caption"><?php echo $text;?></figcaption>
                    </li>
                    <?php ++$count; endwhile; ?>
                    <span class="clearfix"></span>
                  </ul>
                  <nav class="orbit-bullets hide-for-medium">
                   <?php $count = 0; while( have_rows('slides') ): the_row(); ?>
                   <button <?php if($count == 0) : echo 'class="is-active"'; endif; ?> data-slide="<?php echo $count; ?>"><span class="show-for-sr">Slide <?php echo $count; ?> details.</span><span class="show-for-sr">Current Slide</span></button>
                   
                   <?php ++$count; endwhile; ?>
                 </nav>
            </div>
        </div>
    </div>
</div>
<?php endif;?>