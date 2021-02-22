<?php
/*
Template Name: Artists
*/
 get_header(); ?>


<!-- CONTENT IS BELOW -->
<div id="page_wrapper">

<div class="ten-col_container">
	
	<!-- Artist Group START -->
	<div class="ten-col_w group-header">
		<div class="six-col_in">
			<h4><a href="/prairie-print-makers/" target="_blank">Prairie Print Makers</a></h4>
		</div>
		<!--<div class="one-col_in" id="art-details_link" onclick="javascript:location.href='/prairie-print-makers/'"></div>-->
	</div>
	<div class="nine-col_w category_container">
		<?php $the_query = new WP_Query( 
			array(
				'post_type' => 'posts_gallery',
				'gallery_artists' => 'prairie-print-makers',
				'gallery_slides' => 'category-feature',
				'posts_per_page' => 1
			)
		);?>
		<?php if ( $the_query->have_posts() ) : ?>
		<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
			<div class="three-col_nine" id="art-thumb_box">
				<div class="art-thumbs"><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('artist-gallery'); ?></a></div>
			</div>
			<div class="six-col_in">
			<?php
			$featured_posts = get_field('_artist-relationship');
			if( $featured_posts ): ?>
				<ul>
				<?php foreach( $featured_posts as $featured_post ): 
					$permalink = get_permalink( $featured_post->ID );
					$title = get_the_title( $featured_post->ID );
					$custom_field = get_field( 'field_name', $featured_post->ID );
					?>
					<li>
						<a href="<?php echo esc_url( $permalink ); ?>"><?php echo esc_html( $title ); ?></a>
						<span>A custom field from this post: <?php echo esc_html( $custom_field ); ?></span>
					</li>
				<?php endforeach; ?>
				</ul>
			<?php endif; ?>

				
			</div>
		<?php endwhile; endif; wp_reset_query(); ?>
	</div>
	<!-- Artist Group END -->
	
	<!-- Artist Group START -->
	<div class="ten-col_w group-header">
		<div class="six-col_in">
			<h4><a href="/associated-american-artists/" target="_blank">Associated Amercian Artists</a></h4>
		</div>
		<!--<div class="one-col_in" id="art-details_link" onclick="javascript:location.href='/associated-american-artists/'"></div>-->
	</div>
	<div class="nine-col_w category_container">
	<?php $the_query = new WP_Query( array( 'gallery_artists' => 'associated-american-artists', 'gallery_slides' => 'category-feature', 'posts_per_page' => 1 ) ); ?>
	<?php if ( $the_query->have_posts() ) : ?>
	<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
		<div class="three-col_nine" id="art-thumb_box">
			<div class="art-thumbs"><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('artist-gallery'); ?></a></div>
		</div>
		<div class="six-col_in">
			<?php $posts = get_field('_artist-relationship'); if( $posts ): ?>
			<?php foreach( $posts as $p ): ?>
			<h4><?php echo get_the_title( $p->ID ); ?></h4>
			<?php endforeach; ?>
			<?php endif; ?>
			<?php wp_reset_postdata(); ?>
		</div>
	<?php endwhile; endif; wp_reset_query(); ?>
	</div>
	<!-- Artist Group END -->
	
	<!-- Artist Group START -->
	<div class="ten-col_w group-header">
		<div class="six-col_in">
			<h4>Contemporary Kansas & Regional Artists</h4>
		</div>
		<div class="one-col_in" id="art-details_link" onclick="javascript:location.href='/contemporary-kansas-regional-artists/'"></div>
	</div>
	<div class="nine-col_w category_container">
	<?php $the_query = new WP_Query( array( 'gallery_artists' => 'contemporary-kansas-artist', 'gallery_slides' => 'category-feature', 'posts_per_page' => 1 ) ); ?>
	<?php if ( $the_query->have_posts() ) : ?>
	<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
		<div class="three-col_nine" id="art-thumb_box">
			<div class="art-thumbs"><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('artist-gallery'); ?></a></div>
		</div>
		<div class="six-col_in">
			<?php $posts = get_field('_artist-relationship'); if( $posts ): ?>
			<?php foreach( $posts as $p ): ?>
			<h4><?php echo get_the_title( $p->ID ); ?></h4>
			<?php endforeach; ?>
			<?php endif; ?>
			<?php wp_reset_postdata(); ?>
		</div>
	<?php endwhile; endif; wp_reset_query(); ?>
	</div>
	<!-- Artist Group END -->
	
	<!-- Artist Group START -->
	<div class="ten-col_w group-header">
		<div class="six-col_in">
			<h4>Special Consignments</h4>
		</div>
		<div class="one-col_in" id="art-details_link" onclick="javascript:location.href='/special-consignments/'"></div>
	</div>
	<div class="nine-col_w category_container">
	<?php $the_query = new WP_Query( array( 'gallery_artists' => 'special-consignments', 'gallery_slides' => 'category-feature', 'posts_per_page' => 1 ) ); ?>
	<?php if ( $the_query->have_posts() ) : ?>
	<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
		<div class="three-col_nine" id="art-thumb_box">
			<div class="art-thumbs"><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('artist-gallery'); ?></a></div>
		</div>
		<div class="six-col_in">
			<?php $posts = get_field('_artist-relationship'); if( $posts ): ?>
			<?php foreach( $posts as $p ): ?>
			<h4><?php echo get_the_title( $p->ID ); ?></h4>
			<?php endforeach; ?>
			<?php endif; ?>
			<?php wp_reset_postdata(); ?>
		</div>
	<?php endwhile; endif; wp_reset_query(); ?>
	</div>
	<!-- Artist Group END -->
	
	<!-- Artist Group START -->
	<div class="ten-col_w group-header">
		<div class="six-col_in">
			<h4>Three Dimensional Artists</h4>
		</div>
		<div class="one-col_in" id="art-details_link" onclick="javascript:location.href='/three-dimensional-art/'"></div>
	</div>
	<div class="nine-col_w category_container">
	<?php $the_query = new WP_Query( array( 'gallery_artists' => 'three-dimensional-art', 'gallery_slides' => 'category-feature', 'posts_per_page' => 1 ) ); ?>
	<?php if ( $the_query->have_posts() ) : ?>
	<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
		<div class="three-col_nine" id="art-thumb_box">
			<div class="art-thumbs"><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('artist-gallery'); ?></a></div>
		</div>
		<div class="six-col_in">
			<?php $posts = get_field('_artist-relationship'); if( $posts ): ?>
			<?php foreach( $posts as $p ): ?>
			<h4><?php echo get_the_title( $p->ID ); ?></h4>
			<?php endforeach; ?>
			<?php endif; ?>
			<?php wp_reset_postdata(); ?>
		</div>
	<?php endwhile; endif; wp_reset_query(); ?>
	</div>
	<!-- Artist Group END -->
	
</div>

<div class="six-col_container sidebar">
    <?php get_template_part('template-parts/aux_artist-sidebar.php'); ?>
</div>


</div>
<!-- CONTENT STOPS HERE -->


<?php get_footer(); ?>