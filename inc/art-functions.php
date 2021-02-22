<?php 
/*  FEATURED IMAGES - Not implemented carried over from old site
________________________________________________________________________*/

if ( function_exists( 'add_theme_support' ) ) { 
	add_theme_support( 'post-thumbnails' );
	//set_post_thumbnail_size( 250, 133 );
	
	// all available image sizes
	
	add_image_size( 'home-gallery', 600, 9999 ); //300 pixels wide (and unlimited height)
	add_image_size( 'artist-gallery', 600, 9999 );
	
	}
	
	if (class_exists('MultiPostThumbnails')) {
	
	
	new MultiPostThumbnails(array(
	'label' => 'Group Thumbnail',
	'id' => 'group-thumb',
	'post_type' => 'posts_artists',
	 ) );
	
	
	new MultiPostThumbnails(array(
	'label' => 'Secondary Image - 1',
	'id' => 'secondary-image1',
	'post_type' => 'posts_gallery',
	 ) );
	 
	 new MultiPostThumbnails(array(
	'label' => 'Secondary Image - 2',
	'id' => 'secondary-image2',
	'post_type' => 'posts_gallery',
	 ) );
	 
	  new MultiPostThumbnails(array(
	'label' => 'Secondary Image - 3',
	'id' => 'secondary-image3',
	'post_type' => 'posts_gallery',
	 ) );
	 
	  new MultiPostThumbnails(array(
	'label' => 'Secondary Image - 4',
	'id' => 'secondary-image4',
	'post_type' => 'posts_gallery',
	 ) );
	
	
	
	//end of multi post images
	 }

/*  POSTTYPES
________________________________________________________________________*/
// post type names can not be longer than 20 characters


add_action( 'init', 'custom_post_types' );
function custom_post_types() {

		register_post_type('posts_artists', 
			array(
				'label' => 'Artists',
				'description' => '',
				'public' => true,
				'show_ui' => true,
				'capability_type' => 'post',
				'hierarchical' => true,
				'rewrite' => array('slug' => '/artists'),
				'query_var' => true,
				'supports' => array(
								'title',
								'editor',
								'excerpt',
								'thumbnail',
								'post-formats',)
								) );
								
		register_post_type('posts_gallery', 
			array(
				'label' => 'Gallery',
				'description' => '',
				'public' => true,
				'show_ui' => true,
				'capability_type' => 'post',
				'hierarchical' => true,
				'rewrite' => array('slug' => 'gallery'),
				'query_var' => true,
				'supports' => array(
								'title',
								'editor',
								'excerpt',
								'thumbnail',
								'post-formats',
								'page-attributes',)
								) );
}

add_action( 'init', 'build_taxonomies' ); 
function build_taxonomies() {
    
    register_taxonomy(
    'artists_category', // category name
    'posts_artists', // custom post type name(s)
    array(
        'label' => 'Artist Categories',
        'hierarchical' => true,
        'query_var' => true,
        'rewrite' => true,
    ));
    /*
    register_taxonomy(
    'artists_feature', // category name
    'posts_gallery', // custom post type name(s)
    array(
        'label' => 'Artists Featured',
        'hierarchical' => true,
        'query_var' => true,
        'rewrite' => true,
    ));
    */
    register_taxonomy(
    'gallery_artists', // category name
    'posts_gallery', // custom post type name(s)
    array(
        'label' => 'Gallery Artists',
        'hierarchical' => true,
        'query_var' => true,
        'rewrite' => array('slug' => '/artists'),
    ));
    
    register_taxonomy(
    'gallery_slides', // category name
    'posts_gallery', // custom post type name(s)
    array(
        'label' => 'Featured Sections',
        'hierarchical' => true,
        'query_var' => true,
        'rewrite' => true
    ));
    
}


// this allows categories to be used with our custom post types, listed above
function my_query_post_type($query) {
    if ( is_category() && false == $query->query_vars['suppress_filters'] )
        $query->set( 'post_type', array( 'post' ) );
    return $query;
}
add_filter('pre_get_posts', 'my_query_post_type');



// lets custom post types be found in searches
function search_filter($query) {
  if ( !is_admin() && $query->is_main_query() ) {
    if ($query->is_search) {
      $query->set('post_type', array( 'post', 'posts_gallery', 'posts_artists' ) );
    }
  }
}
add_action('pre_get_posts','search_filter');