<?php
// button layout
	if( get_row_layout() == 'buttons' ) { 
?>
	<?php if ( have_rows( 'button' ) ) : ?>
        <?php while ( have_rows( 'button' ) ) :
            the_row(); ?>
            
            <?php if ( $label = get_sub_field( 'label' ) ) : ?>
                <?php echo esc_html( $label ); ?>
            <?php endif; ?>
    
            <?php
            $screenshot = get_sub_field( 'screenshot' );
            if ( $screenshot ) : ?>
                <img src="<?php echo esc_url( $screenshot['url'] ); ?>" alt="<?php echo esc_attr( $screenshot['alt'] ); ?>" />
            <?php endif; ?>
    
            <?php
            $hover = get_sub_field( 'hover' );
            if ( $hover ) : ?>
                <img src="<?php echo esc_url( $hover['url'] ); ?>" alt="<?php echo esc_attr( $hover['alt'] ); ?>" />
            <?php endif; ?>
    
        <?php endwhile; ?>
    <?php endif; ?>
<?php }; ?>