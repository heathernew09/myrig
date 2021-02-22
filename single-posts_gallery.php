<?php get_header(); ?>

<!-- CONTENT IS BELOW -->
<div id="page_wrapper" class="container">

<div class="row">
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

	<div class="col-sm-6">	
		
			<?php $posts = get_field('_artist-relationship'); if( $posts ): ?>
			<?php foreach( $posts as $p ): ?>
			<h1><a href="<?php echo get_permalink( $p->ID ); ?>"><?php echo get_the_title( $p->ID ); ?></a></h1>
			<?php endforeach; ?>
			<?php endif; ?>
			<?php wp_reset_postdata(); ?>
		
		<!--<div class="one-col_in" id="art-details_link" onclick="javascript:location.href='<?php// echo get_permalink( $p->ID ); ?>'"></div>-->
	</div>


	<div class="col-sm-6" id="artist-works">
		<div class="">
		
			<div class="" id="art-thumb_box">
				<div class="art-view"><?php the_post_thumbnail(); ?></div>
			</div>
			<div class="" id="art-info_box-title">
				<p><?php echo the_field('_artwork_title'); ?></p>
			</div>
			<div class="" id="art-info_box-info">
				<p><?php echo the_field('_year'); ?><span class="divide">|</span><?php echo the_field('_art_medium'); ?><span class="divide">|</span><?php echo the_field('_subject'); ?><span class="divide">|</span><?php echo the_field('_size'); ?><span class="divide">|</span>$<?php echo the_field('_price'); ?></p>
			</div>
			<div class="" id="art-content">
				<?php the_content(); ?>
			</div>
			<div class="three-col_nine" id="secondary-image_container"><a href="<?php $second_image1 = MultiPostThumbnails::get_post_thumbnail_url(get_post_type(), 'secondary-image1'); echo $second_image1; ?>" rel="lightbox"><?php if (class_exists('MultiPostThumbnails')) : MultiPostThumbnails::the_post_thumbnail(get_post_type(), 'secondary-image1'); endif; ?></a></div>
			<div class="three-col_nine" id="secondary-image_container"><a href="<?php $second_image2 = MultiPostThumbnails::get_post_thumbnail_url(get_post_type(), 'secondary-image2'); echo $second_image2; ?>" rel="lightbox"><?php if (class_exists('MultiPostThumbnails')) : MultiPostThumbnails::the_post_thumbnail(get_post_type(), 'secondary-image2'); endif; ?></a></div>
			<div class="three-col_nine" id="secondary-image_container"><a href="<?php $second_image3 = MultiPostThumbnails::get_post_thumbnail_url(get_post_type(), 'secondary-image3'); echo $second_image3; ?>" rel="lightbox"><?php if (class_exists('MultiPostThumbnails')) : MultiPostThumbnails::the_post_thumbnail(get_post_type(), 'secondary-image3'); endif; ?></a></div>
			<div class="three-col_nine" id="secondary-image_container"><a href="<?php $second_image4 = MultiPostThumbnails::get_post_thumbnail_url(get_post_type(), 'secondary-image4'); echo $second_image4; ?>" rel="lightbox"><?php if (class_exists('MultiPostThumbnails')) : MultiPostThumbnails::the_post_thumbnail(get_post_type(), 'secondary-image4'); endif; ?></a></div>
		</div>
	</div>
	
<?php endwhile; endif; wp_reset_query(); ?>
</div>


<!--div class="six-col_container sidebar">
    <//?php get_template_part('template-parts/aux_artist-sidebar.php'); ?>
</div>-->

</div>
<!-- CONTENT STOPS HERE -->


<?php get_footer(); ?>