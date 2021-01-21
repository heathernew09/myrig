<?php if( have_rows('content') ):
    // loop through the rows of data
    while ( have_rows('content') ) : the_row();
	  // Accordion
	  if(get_row_layout()== 'accordion'){
	  get_template_part('template-parts/cloneTemplate/elements/accordion');
	  }
	  // Blockquote
	  if(get_row_layout()== 'blockquote'){
	  get_template_part('template-parts/cloneTemplate/elements/blockquote');
	  }
	  // Blog Post
	  if(get_row_layout()== 'post_clone'){
	  get_template_part('template-parts/cloneTemplate/elements/blogpost');
	  }
	  // Button
	  if( get_row_layout() == 'button_clone' ) {
	  get_template_part('template-parts/cloneTemplate/elements/button');
	  }
	  // CTA
	  if( get_row_layout() == 'cta_clone' ) {
	  get_template_part('template-parts/cloneTemplate/elements/cta');
	  }
	  // Content
	  if( get_row_layout() == 'content_clone' ) {
	  get_template_part('template-parts/cloneTemplate/elements/content');
	  }
	  // Gallery
	  if(get_row_layout()== 'gallery_clone'){
	  get_template_part('template-parts/cloneTemplate/elements/gallery');
	  }
	  // Headline
	  if( get_row_layout() == 'headline_clone' ) {
	  get_template_part('template-parts/cloneTemplate/elements/headline');
	  }
	  // Icon Stat
	  if( get_row_layout() == 'icon_stat' ) {
	  get_template_part('template-parts/cloneTemplate/elements/iconstat');
	  }
	  // Image
	  if( get_row_layout() == 'image_clone' ) {
	  get_template_part('template-parts/cloneTemplate/elements/image');
	  }
	  // Image Slider
	  if( get_row_layout() == 'image_slider' ) {
	  get_template_part('template-parts/cloneTemplate/elements/imageslider');
	  }
	  // List
	  if( get_row_layout() == 'list_clone' ) {
	  get_template_part('template-parts/cloneTemplate/elements/list');
	  }
	  // Member Expander
	  if(get_row_layout()== 'member_expander'){
	  get_template_part('template-parts/cloneTemplate/elements/memberexpander');
	  
	  }
	  // Quotes 
	  if( get_row_layout() == 'quotes_clone' ) {
	  get_template_part('template-parts/cloneTemplate/elements/quoterepeater');
	  }
	  // Table
	  if( get_row_layout() == 'table_clone' ) {
	  get_template_part('template-parts/cloneTemplate/elements/table');
	  }
	  // Video
	  if( get_row_layout() == 'video_clone' ) {
	  get_template_part('template-parts/cloneTemplate/elements/video');
	  
	  }
	  // CUSTOM
	  if( get_row_layout() == 'custom_clone' ) {
	  $custom = get_sub_field('custom_block');
	  include(ABSPATH.'wp-content/themes/Sky/inc/pages/'.$custom);
	  }

  endwhile; // have_rows('col1_content')
endif; // have_rows('col1_content')
// End if 1 col layout
?>