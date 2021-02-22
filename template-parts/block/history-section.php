<div class="row featurette">
	<?php if ( $content = get_field( 'content' ) ) : ?>
      <div class="col-md-7">
		<h2 class="featurette-heading"><?php echo $content; ?></h2>
		<?php if ( $quote_by = get_field( 'quote_by' ) ) : ?>
			<p class="lead"><?php echo esc_html( $quote_by ); ?></p>
		<?php endif; ?>
	  </div>
	  <?php
		$photo = get_field( 'photo' );
		if ( $photo ) : ?>
		<div class="col-md-5">
			<img src="<?php echo esc_url( $photo['url'] ); ?>" alt="<?php echo esc_attr( $photo['alt'] ); ?>" />
		</div>
	<?php endif; ?>
	<?php endif; ?>
</div>