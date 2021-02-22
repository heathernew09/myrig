<div class="row tb-padd">
    <?php
        // vars
        $photo = get_field('photo');
        $name = get_field('name');
        $bio = get_field('bio');
        $title = get_field('title');
    ?> 
        <div class="col-sm-12 col-md-3 col-lg-2">
            <img src="<?php echo esc_url( $photo['url'] ); ?>" alt="<?php echo esc_attr( $photo['alt'] ); ?>" />
        </div>
        <div class="col-sm-12 col-md-3 col-lg-10">
            <h2><?php echo $name;?></h2>
            <h3><?php echo $title;?></h3>
            <p><?php echo $bio;?></p>
        </div>
</div>