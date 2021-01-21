<?php
$defaultimgoptions = get_field( 'default_post_image', get_option('page_for_posts'));
?>
  
<div class="wrap-img-blog">
    <?php if ( has_post_thumbnail() ) : ?>
		<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
			<div class="bot-pad">
				<?php the_post_thumbnail(); ?>
			</div>
		</a>
    <?php else:?>
        <img class="my-hero superman" data-interchange="[<?php echo esc_url( $defaultimgoptions['url'] ); ?>, default], [<?php echo $defaultimgoptions; ?>, small], [<?php echo esc_url( $defaultimgoptions['url'] ); ?>, medium], [<?php echo esc_url( $defaultimgoptions['url'] ); ?>, large]" alt="<?php echo esc_attr( $$defaultimgoptions['alt'] ); ?>" />
		<noscript><img src="<?php echo esc_url( $defaultimgoptions['url'] ); ?>" alt="<?php echo esc_attr( $$defaultimgoptions['alt'] ); ?>" /></noscript>
	<?php endif; ?>
</div>