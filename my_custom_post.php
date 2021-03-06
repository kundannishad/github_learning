<?php 


// Creating a Deals Custom Post Type
function crunchify_deals_custom_post_type() {
	$labels = array(
		'name'                => __( 'Deals' ),
		'singular_name'       => __( 'Deal'),
		'menu_name'           => __( 'Deals'),
		'parent_item_colon'   => __( 'Parent Deal'),
		'all_items'           => __( 'All Deals'),
		'view_item'           => __( 'View Deal'),
		'add_new_item'        => __( 'Add New Deal'),
		'add_new'             => __( 'Add New'),
		'edit_item'           => __( 'Edit Deal'),
		'update_item'         => __( 'Update Deal'),
		'search_items'        => __( 'Search Deal'),
		'not_found'           => __( 'Not Found'),
		'not_found_in_trash'  => __( 'Not found in Trash')
	);
	$args = array(
		'label'               => __( 'deals'),
		'description'         => __( 'Best Crunchify Deals'),
		'labels'              => $labels,
		'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'revisions', 'custom-fields'),
		'public'              => true,
		'hierarchical'        => false,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => true,
		'has_archive'         => true,
		'can_export'          => true,
		'exclude_from_search' => false,
	    'yarpp_support'       => true,
		'taxonomies' 	      => array('post_tag'),
		'publicly_queryable'  => true,
		'capability_type'     => 'page'
);
	register_post_type( 'deals', $args );
}
add_action( 'init', 'crunchify_deals_custom_post_type', 0 );

/*Custom Post type start*/
// Let us create Taxonomy for Custom Post Type
add_action( 'init', 'crunchify_create_deals_custom_taxonomy', 0 );
 
//create a custom taxonomy name it "type" for your posts
function crunchify_create_deals_custom_taxonomy() {
 
  $labels = array(
    'name' => _x( 'Types', 'taxonomy general name' ),
    'singular_name' => _x( 'Type', 'taxonomy singular name' ),
    'search_items' =>  __( 'Search Types' ),
    'all_items' => __( 'All Types' ),
    'parent_item' => __( 'Parent Type' ),
    'parent_item_colon' => __( 'Parent Type:' ),
    'edit_item' => __( 'Edit Type' ), 
    'update_item' => __( 'Update Type' ),
    'add_new_item' => __( 'Add New Type' ),
    'new_item_name' => __( 'New Type Name' ),
    'menu_name' => __( 'Types' ),
  ); 	
 
  register_taxonomy('types',array('deals'), array(
    'hierarchical' => true,
    'labels' => $labels,
    'show_ui' => true,
    'show_admin_column' => true,
    'query_var' => true,
    'rewrite' => array( 'slug' => 'type' ),
  ));
}


//  FOR  Muvies Post 

function easytuts_games_post() {
  $labels = array(
    'name'               => _x( 'Muvies', 'post type general name' ),
    'singular_name'      => _x( 'Muvies', 'post type singular name' ),
    'add_new'            => _x( 'Add New', 'muvies' ),
    'add_new_item'       => __( 'Add New Games' ),
    'edit_item'          => __( 'Edit muvies' ),
    'new_item'           => __( 'New muvies' ),
    'all_items'          => __( 'All muvies' ),
    'view_item'          => __( 'View muvies' ),
    'search_items'       => __( 'Search muvies' ),
    'not_found'          => __( 'No muvies found' ),
    'not_found_in_trash' => __( 'No muvies found in the Trash' ), 
    'parent_item_colon'  => '',
    'taxonomies' 	      => array('post_tag'),
    'menu_name'          => 'Muvies',

   $args = array(
		'label'               => __( 'muvies'),
		'description'         => __( 'Best Crunchify Deals'),
		'labels'              => $labels,
		'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'revisions', 'custom-fields'),
		'public'              => true,
		'hierarchical'        => false,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => true,
		'has_archive'         => true,
		'can_export'          => true,
		'exclude_from_search' => false,
	    'yarpp_support'       => true,
		'taxonomies' 	      => array('post_tag'),
		'publicly_queryable'  => true,
		'capability_type'     => 'page'
  ));

  register_post_type( 'muvies', $args ); 
}
add_action( 'init', 'easytuts_games_post' );

function easytuts_taxonomies_games() {
  $labels = array(
    'name'              => _x( 'Muvies Categories', 'taxonomy general name' ),
    'singular_name'     => _x( 'Muvies Category', 'taxonomy singular name' ),
    'search_items'      => __( 'Search Muvies Categories' ),
    'all_items'         => __( 'All Muvies Categories' ),
    'parent_item'       => __( 'Parent Muvies Category' ),
    'parent_item_colon' => __( 'Parent Muvies Category:' ),
    'edit_item'         => __( 'Edit Muvies Category' ), 
    'update_item'       => __( 'Update Muvies Category' ),
    'add_new_item'      => __( 'Add New Muvies Category' ),
    'new_item_name'     => __( 'New Muvies Category' ),
    'menu_name'         => __( 'Muvies Categories' ),
  );
  $args = array(
    'labels' => $labels,
    'hierarchical' => true,
  );
 // register_taxonomy( 'leagues', 'muvies', $args );

  register_taxonomy('leagues',array('muvies'), array(
    'hierarchical' => true,
    'labels' => $labels,
    'show_ui' => true,
    'show_admin_column' => true,
    'query_var' => true,
    'rewrite' => array( 'slug' => 'leagues' ),
  ));
}
add_action( 'init', 'easytuts_taxonomies_games', 0 );
?>