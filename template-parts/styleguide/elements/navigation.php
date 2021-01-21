<?php
// navigation layout
	if( get_row_layout() == 'navigation' ) { 
?>
<?php if ( have_rows( 'nav_options' ) ) : ?>
	<?php while ( have_rows( 'nav_options' ) ) :
		the_row(); ?>
		
		<?php if ( $label = get_sub_field( 'label' ) ) : ?>
			<?php echo esc_html( $label ); ?>
		<?php endif; ?>

		<?php
		$screenshot = get_sub_field( 'screenshot' );
		if ( $screenshot ) : ?>
			<img src="<?php echo esc_url( $screenshot['url'] ); ?>" alt="<?php echo esc_attr( $screenshot['alt'] ); ?>" />
		<?php endif; ?>

	<?php endwhile; ?>
<?php endif; ?>
<?php };?>