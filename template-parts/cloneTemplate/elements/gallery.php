<?php 
    $gallery_slider = get_sub_field('gallery_slider');
    $gallery_name = get_sub_field('gallery_name');
?>


<?php if ( get_sub_field( 'type_of_gallery' ) == 'orbit' ) : ?>
<!--orbit-->
	<?php if ($gallery_slider) : ?>
        <div class="orbit" id="<?php echo $gallery_name;?>" role="region" aria-label="Slides" data-orbit data-options="animInFromLeft:fade-in; animInFromRight:fade-in; animOutToLeft:fade-out; animOutToRight:fade-out;">
          <ul class="orbit-container">
            <button class="orbit-previous" aria-label="previous"><span class="show-for-sr">Previous Slide</span><i class="fa fa-chevron-left"></i></button>
            <button class="orbit-next" aria-label="next"><span class="show-for-sr">Next Slide</span><i class="fa fa-chevron-right"></i></button>
            <?php $count = 0; foreach( $gallery_slider as $image ) : ?>
            
            <li class="<?php if($count == 0) : echo "is-active"; endif; ?> orbit-slide">
                   <img class="orbit-image" src="<?php echo esc_url($image['sizes']['large']); ?>" alt="<?php echo esc_attr($image['alt']); ?>">
                   <?php if ( get_sub_field( 'show_image_captions' ) ) : ?>
						<figcaption class="orbit-caption">
							<?php echo esc_html($image['caption']); ?>
						</figcaption>
                  <?php endif; ?>
            </li>
            <?php ++$count; endforeach;?>
            <span class="clearfix"></span>
          </ul>
          <nav class="orbit-bullets">
           <?php $count = 0; foreach( $gallery_slider as $image  ):?>
           <button <?php if($count == 0) : echo 'class="is-active"'; endif; ?> data-slide="<?php echo $count; ?>"><span class="show-for-sr">Slide <?php echo $count; ?> details.</span><span class="show-for-sr">Current Slide</span></button>

           <?php ++$count; endforeach; ?>
         </nav>
        </div>
	<?php endif; wp_reset_query();?>

<?php elseif ( get_sub_field( 'type_of_gallery' ) == 'gliding' ) : ?>
<!--Gliding-->

<?php if ($gallery_slider) : 
	$key = 'field_' . uniqid(); //not stored in db yet?>
<div class="app" data-state="<?php echo $key;?>">
	  <div class="ui-big-images">
		  <?php $count = 0; foreach( $gallery_slider as $image ) : ?>
			<div class="ui-big-image" data-key="<?php echo $count;?>">
			  <img src="<?php echo esc_url($image['sizes']['large']); ?>" alt="<?php echo esc_attr($image['alt']); ?>"/>
			</div>
		  <?php ++$count; endforeach;?>
	  </div>
	  <div class="ui-thumbnails">
		<?php $count = 0; foreach( $gallery_slider as $image  ):?>
		<div class="ui-thumbnail" tabindex="-1" data-key="<?php echo $count;?>">
		  <img src="<?php echo esc_url($image['sizes']['thumbnail']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
		  <div class="ui-cuticle" data-flip-key="cuticle"></div>
		</div>
		<?php ++$count; endforeach;?>
	  </div>
	  <div class="ui-content">
		<nav class="ui-nav">
		  <button id="prev" tabindex="-1" title="Previous">&lt;</button>
		  <button id="next" tabindex="-1" title="Next">&gt;</button>
		</nav>
		<div class="ui-articles">
		  <?php $count = 0; foreach( $gallery_slider as $image  ):?>
		  <article class="ui-article" data-key="<?php echo $count;?>">
				<h2 class="ui-heading"><?php echo esc_attr($image['title']); ?></h2>
				<p class="ui-paragraph"><?php echo esc_html($image['caption']); ?></p>
		  </article>
		  <?php ++$count; endforeach; ?>
		</div>
	  </div>
</div>
<?php endif; wp_reset_query();?>

<?php elseif ( get_sub_field( 'type_of_gallery' ) == 'masonry' ) : ?>
<!--Masonry-->
Masonry Gallery is not programmed here yet
<?php endif;?>