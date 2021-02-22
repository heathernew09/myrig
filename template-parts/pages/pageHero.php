<?php if( is_front_page() ):?>
  <?php if ( have_rows( 'slides' ) ) : ?>
    <div id="homeSlider" class="carousel slide" data-bs-ride="carousel">
      <ol class="carousel-indicators">
        <?php $counted = 0; while ( have_rows( 'slides' ) ) :the_row(); ?>
        <li data-bs-target="#homeSlider" data-bs-slide-to="<?php echo $counted;?>" <?php if( $counted == 0 ):?>class="active"<?php endif; ?>></li>
        <?php ++$counted; endwhile;?>
      </ol>
      <div class="carousel-inner">
          <?php $count = 0; while ( have_rows( 'slides' ) ) :the_row(); ?>
            <div class="carousel-item <?php if( $count == 0 ) : echo "active"; endif; ?>">
              <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"/></svg>
              
              <div class="container">
                <div class="carousel-caption text-start">
                  <!--Top Text-->
                  <?php if ( $top_text = get_sub_field( 'home_poster_top_text' ) ) : ?>
                          <?php echo esc_html( $top_text ); ?>
                  <?php endif; ?>
                  <!--Artists Name-->
                  <?php if ( $artist_name = get_sub_field( 'home_poster_artist_name' ) ) : ?>
                        <?php echo esc_html( $artist_name ); ?>
                  <?php endif; ?>
                  <?php 
                    $link = get_field('home_poster_link');
                    if( $link ): 
                        $link_url = $link['url'];
                        $link_title = $link['title'];
                        $link_target = $link['target'] ? $link['target'] : '_self';
                        ?>
                        <a class="button" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
                    <?php endif; ?>

                      <?php
                        $poster_image = get_sub_field( 'home_poster_poster_image' );
                        if ( $poster_image ) : ?>
                          <img src="<?php echo esc_url( $poster_image['url'] ); ?>" alt="<?php echo esc_attr( $poster_image['alt'] ); ?>" class="slider-image"/>
                        <?php endif; ?>
                    

                    <?php if ( $info = get_sub_field( 'home_poster_info' ) ) : ?>
                      <div class="info">
                        <?php echo $info; ?>
                      </div>
                    <?php endif; ?>

                    <?php if ( $bottom_text_small = get_sub_field( 'home_poster_bottom_text_small' ) ) : ?>
                      <span class="text-light"><?php echo esc_html( $bottom_text_small ); ?></span>
                    <?php endif; ?>
                    <?php if ( $bottom_text_large = get_sub_field( 'home_poster_bottom_text_large' ) ) : ?>
                      <span class="text-bold"><?php echo esc_html( $bottom_text_large ); ?></span>
                    <?php endif; ?>
                </div>  
              </div>
            </div>
          <?php ++$count; endwhile; ?>
      </div>
      <a class="carousel-control-prev" href="#homeSlider" role="button" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
      </a>
      <a class="carousel-control-next" href="#homeSlider" role="button" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </a>
    </div>    
    <?php endif; ?>
<?php endif;?>