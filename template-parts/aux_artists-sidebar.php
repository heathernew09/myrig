<script type="text/javascript">
 
$(document).ready(function(){
		$('.artistList-a').hide();
		$('.show_hide-a').show().text("View all...");
		$('.show_hide-a').click( function() {
  		$('.artistList-a').toggle();
  	
  	$('.list-a').toggle('1000', function(){
	if ($('.artistList-a').is(':visible')) {
	 		$('.list-a').val('Hide');
	 		$(".show_hide-a").show().text("Hide all...");
	} else {
		$('.show_hide-a').show().text("View all...")
	  }
    });
  });
});

$(document).ready(function(){
		$('.artistList-b').hide();
		$('.show_hide-b').show().text("View all...");
		$('.show_hide-b').click( function() {
  		$('.artistList-b').toggle();
  	
  	$('.list-b').toggle('1000', function(){
	if ($('.artistList-b').is(':visible')) {
	 		$('.list-b').val('Hide');
	 		$(".show_hide-b").show().text("Hide all...");
	} else {
		$('.show_hide-b').show().text("View all...")
	  }
    });
  });
});

$(document).ready(function(){
		$('.artistList-c').hide();
		$('.show_hide-c').show().text("View all...");
		$('.show_hide-c').click( function() {
  		$('.artistList-c').toggle();
  	
  	$('.list-c').toggle('1000', function(){
	if ($('.artistList-c').is(':visible')) {
	 		$('.list-c').val('Hide');
	 		$(".show_hide-c").show().text("Hide all...");
	} else {
		$('.show_hide-c').show().text("View all...")
	  }
    });
  });
});

$(document).ready(function(){
		$('.artistList-d').hide();
		$('.show_hide-d').show().text("View all...");
		$('.show_hide-d').click( function() {
  		$('.artistList-d').toggle();
  	
  	$('.list-d').toggle('1000', function(){
	if ($('.artistList-d').is(':visible')) {
	 		$('.list-d').val('Hide');
	 		$(".show_hide-d").show().text("Hide all...");
	} else {
		$('.show_hide-d').show().text("View all...")
	  }
    });
  });
});

$(document).ready(function(){
		$('.artistList-e').hide();
		$('.show_hide-e').show().text("View all...");
		$('.show_hide-e').click( function() {
  		$('.artistList-e').toggle();
  	
  	$('.list-e').toggle('1000', function(){
	if ($('.artistList-d').is(':visible')) {
	 		$('.list-d').val('Hide');
	 		$(".show_hide-e").show().text("Hide all...");
	} else {
		$('.show_hide-e').show().text("View all...")
	  }
    });
  });
});

</script>

<div class="sidenav-btn"></div>
<div id="sidebar_container">
	
	
	<div class="five-col_ml sidebar-group_container" id="contemporary-kansas-artists">
		<div class="group-title"><h3><a href="/prairie-print-makers/">Prairie Print Makers</a></h3></div>
		<ul class="artistList-view list-a">
			<?php $the_query = new WP_Query( array( 'post_type' => 'posts_artists', 'artists_category' => 'prairie-print-makers', 'orderby' => 'meta_value', 'meta_key' => '_last_name', 'order' => 'ASC', 'posts_per_page' => 6, ) ); ?>
			<?php if ( $the_query->have_posts() ) : ?>
			<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
			<li><a href="<?php the_permalink(); ?>"><?php echo the_field('_first_&_middle_name'); ?>&nbsp;<?php echo the_field('_last_name'); ?></a></li>
			<?php endwhile; endif; wp_reset_query(); ?>
		</ul>
		<ul class="hide-bar"><li class="show_hide-a"></li></ul>
		<ul class="artistList-a">
			<?php $the_query = new WP_Query( array( 'post_type' => 'posts_artists', 'artists_category' => 'prairie-print-makers', 'orderby' => 'meta_value', 'meta_key' => '_last_name', 'order' => 'ASC', 'posts_per_page' => -1 ) ); ?>
			<?php if ( $the_query->have_posts() ) : ?>
			<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
			<li><a href="<?php the_permalink(); ?>"><?php echo the_field('_first_&_middle_name'); ?>&nbsp;<?php echo the_field('_last_name'); ?></a></li>
			<?php endwhile; endif; wp_reset_query(); ?>
		</ul>
	</div>
	
	<div class="five-col_ml sidebar-group_container" id="contemporary-kansas-artists">
		<div class="group-title"><h3><a href="/associated-american-artists/">Associated American Artists</a></h3></div>
		<ul class="artistList-view list-b">
			<?php $the_query = new WP_Query( array( 'post_type' => 'posts_artists', 'artists_category' => 'associated-american-artists', 'orderby' => 'meta_value', 'meta_key' => '_last_name', 'order' => 'ASC', 'posts_per_page' => 6, ) ); ?>
			<?php if ( $the_query->have_posts() ) : ?>
			<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
			<li><a href="<?php the_permalink(); ?>"><?php echo the_field('_first_&_middle_name'); ?>&nbsp;<?php echo the_field('_last_name'); ?></a></li>
			<?php endwhile; endif; wp_reset_query(); ?>
		</ul>
		<ul class="hide-bar"><li class="show_hide-b"></li></ul>
		<ul class="artistList-b">
			<?php $the_query = new WP_Query( array( 'post_type' => 'posts_artists', 'artists_category' => 'associated-american-artists', 'orderby' => 'meta_value', 'meta_key' => '_last_name', 'order' => 'ASC', 'posts_per_page' => -1 ) ); ?>
			<?php if ( $the_query->have_posts() ) : ?>
			<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
			<li><a href="<?php the_permalink(); ?>"><?php echo the_field('_first_&_middle_name'); ?>&nbsp;<?php echo the_field('_last_name'); ?></a></li>
			<?php endwhile; endif; wp_reset_query(); ?>
		</ul>
	</div>
	
	<div class="five-col_ml sidebar-group_container" id="contemporary-kansas-artists">
		<div class="group-title"><h3><a href="/contemporary-kansas-regional-artists/">Contemporary Kansas & Regional Artists</a></h3></div>
		<ul class="artistList-view list-c">
			<?php $the_query = new WP_Query( array( 'post_type' => 'posts_artists', 'artists_category' => 'contemporary-kansas-artists', 'orderby' => 'meta_value', 'meta_key' => '_last_name', 'order' => 'ASC', 'posts_per_page' => 6, ) ); ?>
			<?php if ( $the_query->have_posts() ) : ?>
			<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
			<li><a href="<?php the_permalink(); ?>"><?php echo the_field('_first_&_middle_name'); ?>&nbsp;<?php echo the_field('_last_name'); ?></a></li>
			<?php endwhile; endif; wp_reset_query(); ?>
		</ul>
		<ul class="hide-bar"><li class="show_hide-c"></li></ul>
		<ul class="artistList-c">
			<?php $the_query = new WP_Query( array( 'post_type' => 'posts_artists', 'artists_category' => 'contemporary-kansas-artists', 'orderby' => 'meta_value', 'meta_key' => '_last_name', 'order' => 'ASC', 'posts_per_page' => -1 ) ); ?>
			<?php if ( $the_query->have_posts() ) : ?>
			<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
			<li><a href="<?php the_permalink(); ?>"><?php echo the_field('_first_&_middle_name'); ?>&nbsp;<?php echo the_field('_last_name'); ?></a></li>
			<?php endwhile; endif; wp_reset_query(); ?>
		</ul>
	</div>
	
	<div class="five-col_ml sidebar-group_container" id="contemporary-kansas-artists">
		<div class="group-title"><h3><a href="/special-consignments/">Special Consignments</a></h3></div>
		<ul class="artistList-view list-d">
			<?php $the_query = new WP_Query( array( 'post_type' => 'posts_artists', 'artists_category' => 'special-consignments', 'orderby' => 'meta_value', 'meta_key' => '_last_name', 'order' => 'ASC', 'posts_per_page' => 6, ) ); ?>
			<?php if ( $the_query->have_posts() ) : ?>
			<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
			<li><a href="<?php the_permalink(); ?>"><?php echo the_field('_first_&_middle_name'); ?>&nbsp;<?php echo the_field('_last_name'); ?></a></li>
			<?php endwhile; endif; wp_reset_query(); ?>
		</ul>
		<ul class="hide-bar"><li class="show_hide-d"></li></ul>
		<ul class="artistList-d">
			<?php $the_query = new WP_Query( array( 'post_type' => 'posts_artists', 'artists_category' => 'special-consignments', 'orderby' => 'meta_value', 'meta_key' => '_last_name', 'order' => 'ASC', 'posts_per_page' => -1 ) ); ?>
			<?php if ( $the_query->have_posts() ) : ?>
			<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
			<li><a href="<?php the_permalink(); ?>"><?php echo the_field('_first_&_middle_name'); ?>&nbsp;<?php echo the_field('_last_name'); ?></a></li>
			<?php endwhile; endif; wp_reset_query(); ?>
		</ul>
	</div>
	
	<div class="five-col_ml sidebar-group_container" id="contemporary-kansas-artists">
		<div class="group-title"><h3><a href="/three-dimensional-art/">Three Dimensional Artists</a></h3></div>
		<ul class="artistList-view list-e">
			<?php $the_query = new WP_Query( array( 'post_type' => 'posts_artists', 'artists_category' => 'three-dimensional-art', 'orderby' => 'meta_value', 'meta_key' => '_last_name', 'order' => 'ASC', 'posts_per_page' => 6, ) ); ?>
			<?php if ( $the_query->have_posts() ) : ?>
			<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
			<li><a href="<?php the_permalink(); ?>"><?php echo the_field('_first_&_middle_name'); ?>&nbsp;<?php echo the_field('_last_name'); ?></a></li>
			<?php endwhile; endif; wp_reset_query(); ?>
		</ul>
		<ul class="hide-bar"><li class="show_hide-e"></li></ul>
		<ul class="artistList-e">
			<?php $the_query = new WP_Query( array( 'post_type' => 'posts_artists', 'artists_category' => 'three-dimensional-art', 'orderby' => 'meta_value', 'meta_key' => '_last_name', 'order' => 'ASC', 'posts_per_page' => -1 ) ); ?>
			<?php if ( $the_query->have_posts() ) : ?>
			<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
			<li><a href="<?php the_permalink(); ?>"><?php echo the_field('_first_&_middle_name'); ?>&nbsp;<?php echo the_field('_last_name'); ?></a></li>
			<?php endwhile; endif; wp_reset_query(); ?>
		</ul>
	</div>
	
</div>


<script>
$('.sidenav-btn').click(function() {
	$('#sidebar_container').toggle();
})

$(window).resize(function() {
	if ( $(window).width() > 650 ) {
		$('#sidebar_container').removeAttr('style');
	}
})
</script>