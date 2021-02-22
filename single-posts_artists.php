<?php get_header(); ?>

<!-- CONTENT IS BELOW -->

<div id="page_wrapper" class="container">
	<div id="artist-bio_container">
		<?php $image_id = get_post_thumbnail_id(''); ?>
		<?php $image_url = wp_get_attachment_image_src($image_id, 'artist-gallery');?>
		<div class="row" id="artist-pic_box">
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<div class="col-md-4" id="artist-bio">
					<?php if ( has_post_thumbnail() ) : ?>
					<a href="<?php the_permalink(); ?>" title="<//?php// the_title_attribute(); ?>">
						<div class="bot-pad">
							<?php the_post_thumbnail(); ?>
						</div>
					</a>
					<?php else:?>
						<img src="<?php echo site_url();?>/wp-content/uploads/2021/02/Screen-Shot-2021-02-07-at-5.45.28-PM.png" alt="placeholder" class="img-responsive">
					<?php endif; ?>
				</div>
				<div class="col-md-8" id="artist-bio">
					<h1><?php echo the_field('_first_&_middle_name'); ?>&nbsp;<?php echo the_field('_last_name'); ?></h1>
					<?php the_content(); ?>
				</div>
			<?php endwhile; endif; wp_reset_query(); ?>
            <!--<div class="one-col_in" id="art-details_link" onclick="javascript:location.href='/artists/'"></div>-->
		</div>
		<div class="row text-center">
			<div class="col-sm-12">
				<a href="/artists" class="btn">Back to All Artists</a>
			</div>
		</div>
	</div>
		<div class="row" id="artist-works"> 
            <?php
            $posts = get_field( 'artists_galleries' );
            if ( $posts ) : ?>
                <?php foreach( $posts as $post) : ?>
                    <?php setup_postdata( $post ); ?>
                    <div class="" id="art-thumb_box">
                        <div class="art-thumbs">
                            <a href="<?php the_permalink(); ?>">
                                <?php the_post_thumbnail('artist-gallery'); ?>
                            </a>
                        </div>
                    </div>
			        <div class="art-title">
                        <p><?php echo the_field('_artwork_title'); ?></p>
                    </div>
                <?php endforeach; ?>
                <?php wp_reset_postdata(); ?>
            <?php endif; ?>
		</div>
            <!--Old code below-->
            <?php query_posts('gallery_artists='.get_the_title().'&post_status=publish,future');?> <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?> <div class="three-col_nine" id="art-thumb_box">
		<div class="art-thumbs">
			<a href="<?php the_permalink(); ?>">
				<?php the_post_thumbnail('artist-gallery'); ?>
			</a>
		</div>
		<div class="art-title">
			<p><?php echo the_field('_artwork_title'); ?></p>
		</div>
		<?php endwhile; endif; wp_reset_query(); ?>
	</div>
	<?php get_template_part('template-parts/aux_artist-sidebar.php'); ?>
</div>
<!-- CONTENT STOPS HERE -->
<?php get_footer(); ?>