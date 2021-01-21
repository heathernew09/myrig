<div class="socialCont">
      <?php if (get_field('facebook', 'option')) { ?>
      <a class="footlink" href="<?php the_field('facebook', 'option') ?>">
        <span class="fa fa-facebook" aria-hidden="true"></span>
      </a>
      <?php } ?>
      <?php if (get_field('pinterest', 'option')) { ?>
      <a href="<?php the_field('pinterest', 'option') ?>">
        <span class="fa fa-pinterest" aria-hidden="true"></span>
      </a>
      <?php } ?>
      <?php if (get_field('instagram', 'option')) { ?>
      <a href="<?php the_field('instagram', 'option') ?>">
        <span class="fa fa-instagram" aria-hidden="true"></span>
      </a>
      <?php } ?>
      <?php if (get_field('youtube', 'option')) { ?>
      <a href="<?php the_field('youtube', 'option') ?>">
        <span class="fa fa-youtube-play" aria-hidden="true"></span>
      </a>
      <?php } ?>
      <?php if (get_field('linkedin', 'option')) { ?>
      <a href="<?php the_field('linkedin', 'option') ?>">
        <span class="fa fa-linkedin" aria-hidden="true"></span>
      </a>
      <?php } ?>
      <?php if (get_field('twitter', 'option')) { ?>
      <a href="<?php the_field('twitter', 'option') ?>">
        <span class="fa fa-twitter" aria-hidden="true"></span>
      </a>
      <?php } ?>
</div><!--Closing of social wrapper-->