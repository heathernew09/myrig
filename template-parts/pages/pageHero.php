<?php if( !is_front_page()):?>
	<?php if ( get_field('use_hero_image') ): 
        $whatHeroOverlay = get_field("item_over_hero");
            $imgSmall = get_field('hero_image_small');
            $imgMedium = get_field('hero_image_medium');
            $imgLarge = get_field('hero_image_large');
    ?>
    
    <div class="row expanded sky-pageHero">
     <div class="small-12 medium-12 large-12">
      <img class="img-responsive" data-interchange="
                  <?php if ( get_field('hero_image_small') ) : 
                        echo '['.$imgSmall["url"].', small],'; 
                      else:
                        echo '['.$imgLarge["url"].', small],';
                      endif;
                      // Medium Image
                      if ( get_field('hero_image_medium') ) : 
                        echo '['.$imgMedium["url"].', medium],'; 
                      else:
                        echo '['.$imgLarge["url"].', medium],';
                      endif;
                      // Large Image
                        echo '['.$imgLarge["url"].', large] "'; 
                      echo 'alt="'.$imgLarge["alt"].'" ';
                        ?>">
                       
    
        <?php if ($whatHeroOverlay != '0'): ?>
            <div class="sky-pageHeroOverlay">
                <!-- type -->
                <?php if ($whatHeroOverlay == '1') :
                    echo get_field('hero_overlay_type');
                endif; ?>
                <!-- CTA -->
                <?php if ($whatHeroOverlay == '2') :
                    include(get_template_directory() . 'template-parts/pages/pageheroparts/page-overimagecta.php');
                endif;?>
                <!-- Custom -->
                <?php if ($whatHeroOverlay == '3') :
                        include(get_template_directory() . 'template-parts/pages/pageheroparts/page-overimagecustom.php');
                endif; ?>
                
            </div><!--Overlay-->
        <?php endif ?>
        </div><!--Grid-->
    </div> <!-- /sky-pageHero -->
    <?php endif; ?>
<?php endif;?>