<?php
    $images = get_field( 'images' );
    if ( $images ) : ?> 
    <script src="https://cdn.jsdelivr.net/npm/masonry-layout@4.2.2/dist/masonry.pkgd.min.js" integrity="sha384-GNFwBvfVxBkLMJpYMOABq3c+d3KnQxudP/mGPkzpZSTYykLBNsZEnG2D9G/X/+7D" crossorigin="anonymous" async></script>
        <div class="all-padd">
            <div class="row" data-masonry='{"percentPosition": true }'>
                <?php foreach( $images as $image ) : ?>
                    <div class="col-sm-6 col-lg-3 mb-3">
                        <div class="card">
                            <a href="<?php echo esc_url( $image['url'] ); ?>">
                                <img src="<?php echo esc_url( $image['sizes']['medium'] ); ?>" alt="<?php echo esc_attr( $image['alt'] ); ?>" class="img-responsive"/>
                                <div class="card-body">
                                    <p class="card-caption"><?php echo esc_html($image['description']); ?></p>
                                </div>
                            </a>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
        <div class="clearfix"></div>
<?php endif; ?>