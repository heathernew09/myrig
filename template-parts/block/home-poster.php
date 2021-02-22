<?php if ( have_rows( 'slides' ) ) : ?>
    <div id="homeSlider" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-inner">
      <ol class="carousel-indicators">
        <?php $counted = 0; while ( have_rows( 'slides' ) ) :the_row(); ?>
        <li data-bs-target="#homeSlider" data-bs-slide-to="<?php echo $counted;?>" <?php if( $counted == 0 ):?>class="active"<?php endif; ?>></li>
        <?php ++$counted; endwhile;?>
      </ol>
          <?php $count = 0; while ( have_rows( 'slides' ) ) :the_row(); ?>
            <div class="carousel-item <?php if( $count == 0 ) : echo "active"; endif; ?>">
              <div class="container">
                  <?php //mobile size
                        $poster_image_mobile = get_sub_field( 'home_poster_poster_image_mobile' );
                        if ( $poster_image_mobile ) : ?>
                          <img src="<?php echo esc_url( $poster_image_mobile['url'] ); ?>" alt="<?php echo esc_attr( $poster_image['alt'] ); ?>" class="slider-image-mobile"/>
                  <?php endif; ?>
                <div class="carousel-caption text-start">
                  <!--Credit text-->
                  <?php if ( $credit_text = get_sub_field( 'credit_text' ) ) : ?>
                    <div class="credit-text"><p><?php echo esc_html( $credit_text ); ?></p></div>
                  <?php endif; ?>
                  <?php 
                    $link = get_field('home_poster_link');
                    if( $link ): 
                        $link_url = $link['url'];
                        $link_title = $link['title'];
                        $link_target = $link['target'] ? $link['target'] : '_self';
                        ?>
                    
                    <a href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>">
                      <div class="slide-text">
                        <!--Top Text- Designer changed to Show Title-->
                        <?php if ( $top_text = get_sub_field( 'home_poster_top_text' ) ) : ?>
                        <p class="top-text"><?php echo esc_html( $top_text ); ?></p>
                        <?php endif; ?>
                        <!--Artists Name Designer changed to Subtitle-->
                        <?php if ( $artist_name = get_sub_field( 'home_poster_artist_name' ) ) : ?>
                          <h2 class="artists-name"><?php echo esc_html( $artist_name ); ?></h2>
                        <?php endif; ?>
						            <!--Byline-->
                        <?php if ( $byline = get_sub_field( 'byline' ) ) : ?>
                          <p class="byline"><?php echo esc_html( $byline ); ?></p>
                        <?php endif; ?>
                        <hr class="greenunderline">
                        <!--Info / Date Designer changed from WYSIWYG to text only p styled-->
                        <?php if ( $info = get_sub_field( 'home_poster_info' ) ) : ?>
                            <div class="info">
                              <?php echo $info; ?>
                            </div>
                        <?php endif; ?>
                      </div><!--slide text-->
                    </a>
					            
                    <?php else: ?>
                      <div class="slide-text">
                        <!--Top Text-->
                        <?php if ( $top_text = get_sub_field( 'home_poster_top_text' ) ) : ?>
                        <p class="top-text"><?php echo esc_html( $top_text ); ?></p>
                        <?php endif; ?>
                        <!--Artists Name-->
                        <?php if ( $artist_name = get_sub_field( 'home_poster_artist_name' ) ) : ?>
                        <h2 class="artists-name"><?php echo esc_html( $artist_name ); ?></h2>
                        <?php endif; ?>
						            <!--Byline-->
                        <?php if ( $byline = get_sub_field( 'byline' ) ) : ?>
                          <p class="byline"><?php echo esc_html( $byline ); ?></p>
                        <?php endif; ?>
                        <hr class="greenunderline">
                        <!--Info / Date-->
                        <?php if ( $info = get_sub_field( 'home_poster_info' ) ) : ?>
                            <div class="info">
                              <?php echo $info; ?>
                            </div>
                        <?php endif; ?>
                        
                      </div><!--slide text-->
                
					              
                    <?php endif; ?>
                </div><!--caption-->
                
                    
                      <?php //desktop size
                        $poster_image = get_sub_field( 'home_poster_poster_image' );
                        if ( $poster_image ) : ?>
                          <img src="<?php echo esc_url( $poster_image['url'] ); ?>" alt="<?php echo esc_attr( $poster_image['alt'] ); ?>" class="slider-image-desktop"/>
                        <?php endif; ?>
                        
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