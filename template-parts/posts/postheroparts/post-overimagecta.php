<?php if( have_rows('hero_overlay_cta', get_option('page_for_posts')) ): 
    while( have_rows('hero_overlay_cta', get_option('page_for_posts') ) ): the_row(); 
            $headline = get_sub_field('headline');
            $text = get_sub_field('text');
            $select = get_sub_field('select');
            $button_text = get_sub_field('button_text');
            $internal_link = get_sub_field('internal_link');
            $external_link = get_sub_field('external_link');
            $form_shortcode = get_sub_field('form_shortcode');
    ?>
            <h3><?php echo $headline;?></h3>
            <p><?php echo $text;?></p>
            <!--IF IS FORM-->
            <?php if(get_sub_field('select') == 'form'):?>
                <?php echo $form_shortcode;?>
            <!--IF IS INTERNAL LINK-->
            <?php elseif(get_sub_field('select') == 'internal' ):?>
                <p class="text-center"><a href="<?php $internal_link;?>" class="button upper base-background"><?php echo $button_text;?></a></p>
            <?php elseif(get_sub_field('select') == 'external' ):?>
                <!--IF IS EXTERNAL LINK-->
                <p class="text-center"><a href="<?php echo $external_link;?>" class="button upper base-background" target="_blank"><?php echo $button_text;?></a></p>
            <?php endif;?>
<?php endwhile; endif;?>