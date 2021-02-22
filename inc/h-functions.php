<?php
/**
 * [these are functions I'm utilizing to expand the functionality of the calendar and theme development.]
 * 
 */
/* calendar function to show past events not working yet*/ 
add_action( 'tribe_events_after_loop', 'add_past_events' );

function add_past_events() {
	if ( ! tribe_is_list_view() || ! tribe_is_upcoming() ) return;
	remove_action( 'tribe_events_after_loop', 'add_past_events' );

	$past_events = tribe_get_events( array(
		'eventDisplay' => 'past'
	) );

	foreach ( $past_events as $event )
		echo "$event->post_title - $event->EventStartDate <br/>";
}

/*function to remove has-sidebar class from body */
add_filter( 'body_class', 'remove_body_class' );
function remove_body_class( $classes ) { 
	$remove_class = ['has-sidebar'];
	$classes = array_diff($classes, $remove_class); 
    if ( is_page_template( array('front-page.php', 'template-team.php', 'template-smart.php', 'template-artists-.php' ) ) ) {
       
	}
	if ( is_front_page() && is_home() ) {
		// Default homepage
	  } elseif ( is_front_page() ) {
		// static homepage
	  } elseif ( is_home() ) {
		// blog page
	  } else {
		//everything else
	  }

    return $classes;    
}