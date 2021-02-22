Masonry post coming soon.
<?php
$select_posts = get_field( 'select_posts' );
if ( $select_posts ) :?>
    <ul class="masonry-image">
        <?php
            $post = $select_posts;
            setup_postdata( $post ); 
        ?>
        <li><a href="<?php the_permalink(); ?>">
            <?php if ( has_post_thumbnail() ) {
                the_post_thumbnail();
            }?>
            <figure class="caption"><?php the_title(); ?></figure>
        </a></li>
	<?php wp_reset_postdata(); ?>
    </ul>
<?php endif; ?>
<style>
ul.masonry-image {
  column-width: 400px;
  column-gap: 5px;
  padding: 10px;
}
ul.masonry-image li img{
   width: 100%;
   height: auto;
   display: inline-block;
   margin-bottom: 5px;
}
ul.masonry-image li {
  list-style: none;
}
</style>