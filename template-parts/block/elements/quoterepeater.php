<?php if( have_rows('quote_slider') ): ?>
  <div class="orbit" role="region" aria-label="Quote Slider" data-orbit data-options="animInFromLeft:fade-in; animInFromRight:fade-in; animOutToLeft:fade-out; animOutToRight:fade-out;">
    <div class="orbit-wrapper">
      <div class="orbit-controls">
        <button class="orbit-previous"><span class="show-for-sr">Previous Slide</span><i class="fa fa-arrow-left" aria-hidden="true"></i></button>
        <button class="orbit-next"><span class="show-for-sr">Next Slide</span><i class="fa fa-arrow-right" aria-hidden="true"></i></button>
      </div>
      <ul class="orbit-container quote">
        <?php while( have_rows('quote_slider') ): the_row();
          $quote = get_sub_field('quote');
		      $quote_by = get_sub_field('quote_by');
		      $title = get_sub_field('title');
        ?>
          <li class="is-active orbit-slide">
            <p class="quote-text">&ldquo;<?php echo $quote;?>&rdquo;</p>					
			      <p class="quote-subtext text-right"><?php echo $quote_by;?><br><?php echo $title;?></p> 
          </li>
        <?php endwhile; ?>
      </ul>
    </div>
</div>
<?php endif; ?>