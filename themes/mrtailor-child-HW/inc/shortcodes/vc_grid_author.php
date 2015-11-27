<?php

// Post ID

add_filter( 'vc_grid_item_shortcodes', 'my_module_add_grid_shortcodes' );

function my_module_add_grid_shortcodes( $shortcodes ) {
   $shortcodes['vc_post_author'] = array(
     'name' => __( 'Post author', 'my-text-domain' ),
     'base' => 'vc_post_author',
     'category' => __( 'Content', 'my-text-domain' ),
     'description' => __( 'Show current post author', 'my-text-domain' ),
     'post_type' => Vc_Grid_Item_Editor::postType(),
  );

   return $shortcodes;
}

// output function
add_shortcode( 'vc_post_author', 'vc_post_author_render' );
function vc_post_author_render() {
  return '<h2>{{ post_data:post_author }}</h2>'; // usage of template variable post_data with argument "author"
}
