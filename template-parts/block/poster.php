<main class="home-poster-grid">
  <div class="title title--primary">
    <?php if ( $top_text = get_field( 'top_text' ) ) : ?>
      <span class="text-light">
        <?php echo esc_html( $top_text ); ?>
      </span>
    <?php endif; ?>
    <?php if ( $artist_name = get_field( 'artist_name' ) ) : ?>
      <span class="text-bold"><?php echo esc_html( $artist_name ); ?></span>
    <?php endif; ?>
  </div>
  <div class="cover">
    <?php
      $link = get_field( 'link' );
      if ( $link ) :
        $link_url = $link['url'];
        $link_title = $link['title'];
        $link_target = $link['target'] ? $link['target'] : '_self';
        ?>
        <a class="button" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>" rel="noopener noreferrer">
    <?php endif; ?>
    <?php
      $image = get_field( 'image' );
      if ( $image ) : ?>
        <img src="<?php echo esc_url( $image['url'] ); ?>" alt="<?php echo esc_attr( $image['alt'] ); ?>" />
    <?php endif; ?>
    <?php  if ( $link ) :?></a><?php endif; ?>
  </div>
  <?php if ( $info = get_field( 'info' ) ) : ?>
    <div class="info">
      <?php echo $info; ?>
    </div>
  <?php endif; ?>

  <div class="title title--secondary">
    <?php if ( $bottom_text_small = get_field( 'bottom_text_small' ) ) : ?>
	    <span class="text-light"><?php echo esc_html( $bottom_text_small ); ?></span>
    <?php endif; ?>
    <?php if ( $bottom_text_large = get_field( 'bottom_text_large' ) ) : ?>
	    <span class="text-bold"><?php echo esc_html( $bottom_text_large ); ?></span>
    <?php endif; ?>
  </div>
</main>
<style>
img {
  display: block;
  width: 100%;
  height: auto;
}
.home-poster-grid {
  font-family: var(--monts), serif;
  font-size: 20px;
  font-weight: 300;
  display: grid;
  grid-gap: 2em;
  min-height: 100vh;
  text-transform: uppercase;
}
.home-poster-grid span {
  display: block;
}

.cover img {
  height: 100%;
  object-fit: cover;
}

.title .text-bold {
  font-family: var(--monts) , serif;
}

.title--primary,
.title--secondary,
.info {
  z-index: 2;
}

.title--secondary {
  text-align: right;
}

.title--secondary .text-bold {
  font-size: max(5vw, 30px);
  line-height: 1em;
}

.title--primary .text-bold {
  font-size: max(10vw, 60px);
}

.info {
  grid-column: 1/2;
  list-style: none;
  margin: 0;
  padding: 0;
}

.info li {
  margin-top: 1.5em;
}

@media (min-width: 860px) {
  .home-poster-grid {
    grid-template-rows: minmax(0em, auto) max-content 1fr 3em minmax(1em, auto);
    grid-template-columns: 4fr repeat(4, 1fr) 4fr;
    grid-gap: 0 10px;
    height: 100vh;
    min-height: 600px;
  }

  .title--secondary {
    grid-row: 2/3;
    grid-column: 1 / 3;
  }

  .text--secondary .text-light {
    /* grid-column: 2/3; */
  }

  .title--secondary .text-bold {
    /* grid-column: 2/3; */
  }

  .title--primary {
    grid-row: 4/6;
    grid-column: 5/7;
  }

  .cover {
    grid-row: 2/5;
    grid-column: 2 / span 4;
  }

  .info {
    grid-row: 3/5;
    grid-column: 1/2;
    align-self: flex-end;
  }
}
/*Heather Modifications*/
span.text-light, span.text-bold {
    text-shadow: 1px 2px 4px #8c8c8c8c;
}
</style>