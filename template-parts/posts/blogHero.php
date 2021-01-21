<?php if( !is_front_page()):?>

<?php if ( get_field('use_hero_image' , get_option('page_for_posts')) ): 
    $whatHeroOverlay = get_field('item_over_hero' , get_option('page_for_posts'));
        $imgSmall = get_field('hero_image_small' , get_option('page_for_posts'));
        $imgMedium = get_field('hero_image_medium' , get_option('page_for_posts'));
        $imgLarge = get_field('hero_image_large' , get_option('page_for_posts'));
?>

<div class="row expanded sky-blogHero bot-marr">
 <div class="small-12 medium-12 large-12">
  <img class="w100" data-interchange="
              <?php if ( get_field('hero_image_small' , get_option('page_for_posts')) ) : 
					echo '['.$imgSmall["url"].', small],'; 
				  else:
					echo '['.$imgLarge["url"].', small],';
				  endif;
				  // Medium Image
				  if ( get_field('hero_image_medium' , get_option('page_for_posts')) ) : 
					echo '['.$imgMedium["url"].', medium],'; 
				  else:
					echo '['.$imgLarge["url"].', medium],';
				  endif;
				  // Large Image
					echo '['.$imgLarge["url"].', large] "'; 
				  echo 'alt="'.$imgLarge["alt"].'" ';
					?>">
				   

	<?php if ($whatHeroOverlay != '0'): ?>
		<div class="sky-blogHeroOverlay">
			<!-- type -->
			<?php if ($whatHeroOverlay == '1') :
				echo get_field('hero_overlay_type', get_option('page_for_posts'));
			endif; ?>
			<!-- CTA -->
			<?php if ($whatHeroOverlay == '2') :
                include(get_template_directory() . 'template-parts/posts/postheroparts/post-overimagecta.php');
            endif;?>
            <!-- Custom -->
            <?php if ($whatHeroOverlay == '3') :
                    include(get_template_directory() . 'template-parts/posts/postheroparts/post-overimagecustom.php');
            endif; ?>
            
		</div> <!-- /sky-heroOverlayCont -->
	<?php endif ?> <!-- /show Overlay -->
	</div><!--small med large 12 column-->
</div> <!-- /sky-heroCont -->
<?php endif; ?> <!-- /show hero -->
<?php endif;?>