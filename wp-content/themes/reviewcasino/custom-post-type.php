<?php
/*Reviews*/
function reviews_custom_post_type() {
	$labels = array(
		'name'               => __( 'Reviews' ),
		'singular_name'      => __( 'Reviews' ),
		'menu_name'          => __( 'Reviews' ),
		'parent_item_colon'  => __( 'Parent Resource' ),
		'all_items'          => __( 'All Reviews' ),
		'view_item'          => __( 'view  Reviews' ),
		'add_new_item'       => __( 'Add New Reviews' ),
		'add_new'            => __( 'Add new' ),
		'edit_item'          => __( 'Редактировать Reviews' ),
		'update_item'        => __( 'update Reviews' ),
		'search_items'       => __( 'Search Reviews' ),
		'not_found'          => __( 'Reviews not found' ),
		'not_found_in_trash' => __( 'Not found in Trash' )
	);
	$args   = array(
		'label'               => __( 'reviews' ),
		'description'         => __( 'reviews' ),
		'labels'              => $labels,
		'supports'            => array(
			'title',
			'editor',
			'excerpt',
			'tags',
			'author',
			'comments',
			'thumbnail',
			'revisions',
			'custom-fields'
		),
//		'taxonomies' => array('reviews_cat','reviews_tag'),
		'public'              => true,
		'hierarchical'        => false,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => true,
		'has_archive'         => false,
		'can_export'          => true,
		'exclude_from_search' => false,
		'yarpp_support'       => true,
		'publicly_queryable'  => true,
		'capability_type'     => 'page'
	);
	register_post_type( 'reviews', $args );
}

add_action( 'init', 'reviews_custom_post_type', 0 );

add_action( 'init', 'reviews_custom_taxonomy', 0 );

//create a custom taxonomy name it "type" for your posts
function reviews_custom_taxonomy() {
	$labels = array(
		'name'              => _x( 'Reviews Categories', 'taxonomy general name' ),
		'singular_name'     => _x( 'Reviews Categories', 'taxonomy singular name' ),
		'search_items'      => __( 'Search Types' ),
		'all_items'         => __( 'All Types' ),
		'parent_item'       => __( 'Parent Type' ),
		'parent_item_colon' => __( 'Parent Type:' ),
		'edit_item'         => __( 'Edit Type' ),
		'update_item'       => __( 'Update Type' ),
		'add_new_item'      => __( 'Add New Type' ),
		'new_item_name'     => __( 'New Type Name' ),
		'menu_name'         => __( 'Reviews Categories' ),
	);

	register_taxonomy( 'reviews_cat', array( 'reviews' ), array(
		'hierarchical'      => true,
		'labels'            => $labels,
		'show_ui'           => true,
		'show_admin_column' => true,
		'query_var'         => true,
		'rewrite'           => array( 'slug' => 'reviews_cat' ),
	) );
	$tags_labels = array(
		'name'              => _x( 'Reviews tags', 'taxonomy general name' ),
		'singular_name'     => _x( 'Reviews tags', 'taxonomy singular name' ),
		'search_items'      => __( 'Search Types' ),
		'all_items'         => __( 'All Types' ),
		'parent_item'       => __( 'Parent Type' ),
		'parent_item_colon' => __( 'Parent Type:' ),
		'edit_item'         => __( 'Edit Type' ),
		'update_item'       => __( 'Update Type' ),
		'add_new_item'      => __( 'Add New Type' ),
		'new_item_name'     => __( 'New Type Name' ),
		'menu_name'         => __( 'Reviews tags' ),
	);
	$args        = array(
		'hierarchical'      => false,
		'labels'            => $tags_labels,
		'show_ui'           => true,
		'show_admin_column' => true,
		'query_var'         => true,
		'rewrite'           => array( 'slug' => 'Tags' ),
	);
	register_taxonomy( 'reviews_tag', array( 'reviews' ), $args );
}

/*FAQ*/
// Register Custom Post Type
function faqs() {

	$labels = array(
		'name'                  => _x( 'Faqs', 'Post Type General Name', 'reviews' ),
		'singular_name'         => _x( 'Faqs', 'Post Type Singular Name', 'reviews' ),
		'menu_name'             => __( 'Faqs', 'reviews' ),
		'name_admin_bar'        => __( 'Faqs', 'reviews' ),
		'archives'              => __( 'Faq Archives', 'reviews' ),
		'attributes'            => __( 'Faq Attributes', 'reviews' ),
		'parent_item_colon'     => __( 'Parent faq:', 'reviews' ),
		'all_items'             => __( 'All faqs', 'reviews' ),
		'add_new_item'          => __( 'Add New Faq', 'reviews' ),
		'add_new'               => __( 'Add New', 'reviews' ),
		'new_item'              => __( 'New faq', 'reviews' ),
		'edit_item'             => __( 'Edit faq', 'reviews' ),
		'update_item'           => __( 'Update Faq', 'reviews' ),
		'view_item'             => __( 'View Faq', 'reviews' ),
		'view_items'            => __( 'View Faqs', 'reviews' ),
		'search_items'          => __( 'Search Faq', 'reviews' ),
		'not_found'             => __( 'Not found', 'reviews' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'reviews' ),
		'featured_image'        => __( 'Featured Image', 'reviews' ),
		'set_featured_image'    => __( 'Set featured image', 'reviews' ),
		'remove_featured_image' => __( 'Remove featured image', 'reviews' ),
		'use_featured_image'    => __( 'Use as featured image', 'reviews' ),
		'insert_into_item'      => __( 'Insert into Faq', 'reviews' ),
		'uploaded_to_this_item' => __( 'Uploaded to this faq', 'reviews' ),
		'items_list'            => __( 'Faqs list', 'reviews' ),
		'items_list_navigation' => __( 'Faqs list navigation', 'reviews' ),
		'filter_items_list'     => __( 'Filter Faqs list', 'reviews' ),
	);
	$args   = array(
		'label'               => __( 'Faqs', 'reviews' ),
		'description'         => __( 'Questions and answers', 'reviews' ),
		'labels'              => $labels,
		'supports'            => array(
			'title',
			'editor',
			'excerpt',
			'tags',
			'author',
			'comments',
			'thumbnail',
			'revisions',
			'custom-fields'
		),
		'taxonomies'          => array( 'question_cat', 'post_tag' ),
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'menu_position'       => 5,
		'show_in_admin_bar'   => true,
		'show_in_nav_menus'   => true,
		'can_export'          => true,
		'has_archive'         => true,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'capability_type'     => 'page',
	);
	register_post_type( 'faqs', $args );

}

add_action( 'init', 'faqs', 0 );
/*Payments*/
function payments_custom_post_type() {
	$labels = array(
		'name'               => __( 'Payments' ),
		'singular_name'      => __( 'Payments' ),
		'menu_name'          => __( 'Payments' ),
		'parent_item_colon'  => __( 'Parent Resource' ),
		'all_items'          => __( 'All Payments' ),
		'view_item'          => __( 'view  Payments' ),
		'add_new_item'       => __( 'Add New Payments' ),
		'add_new'            => __( 'Add new' ),
		'edit_item'          => __( 'Редактировать payments' ),
		'update_item'        => __( 'update payments' ),
		'search_items'       => __( 'Search payments' ),
		'not_found'          => __( 'payments not found' ),
		'not_found_in_trash' => __( 'Not found in Trash' )
	);
	$args   = array(
		'label'               => __( 'payments' ),
		'description'         => __( 'payments' ),
		'labels'              => $labels,
		'supports'            => array(
			'title',
			'editor',
			'excerpt',
			'tags',
			'author',
			'comments',
			'thumbnail',
			'revisions',
			'custom-fields'
		),
		'public'              => true,
		'hierarchical'        => false,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => true,
		'has_archive'         => false,
		'can_export'          => true,
		'exclude_from_search' => false,
		'yarpp_support'       => true,
		'publicly_queryable'  => true,
		'capability_type'     => 'page'
	);
	register_post_type( 'payments', $args );
}

add_action( 'init', 'payments_custom_post_type', 0 );

add_action( 'init', 'payments_custom_taxonomy', 0 );

//create a custom taxonomy name it "type" for your posts
function payments_custom_taxonomy() {
	$labels = array(
		'name'              => _x( 'Payments Categories', 'taxonomy general name' ),
		'singular_name'     => _x( 'Payments Categories', 'taxonomy singular name' ),
		'search_items'      => __( 'Search Types' ),
		'all_items'         => __( 'All Types' ),
		'parent_item'       => __( 'Parent Type' ),
		'parent_item_colon' => __( 'Parent Type:' ),
		'edit_item'         => __( 'Edit Type' ),
		'update_item'       => __( 'Update Type' ),
		'add_new_item'      => __( 'Add New Type' ),
		'new_item_name'     => __( 'New Type Name' ),
		'menu_name'         => __( 'Payments Categories' ),
	);

	register_taxonomy( 'payments_cat', array( 'payments' ), array(
		'hierarchical'      => true,
		'labels'            => $labels,
		'show_ui'           => true,
		'show_admin_column' => true,
		'query_var'         => true,
		'rewrite'           => array( 'slug' => 'payments_cat' ),
	) );
	$tags_labels = array(
		'name'              => _x( 'Payments tags', 'taxonomy general name' ),
		'singular_name'     => _x( 'Payments tags', 'taxonomy singular name' ),
		'search_items'      => __( 'Search Types' ),
		'all_items'         => __( 'All Types' ),
		'parent_item'       => __( 'Parent Type' ),
		'parent_item_colon' => __( 'Parent Type:' ),
		'edit_item'         => __( 'Edit Type' ),
		'update_item'       => __( 'Update Type' ),
		'add_new_item'      => __( 'Add New Type' ),
		'new_item_name'     => __( 'New Type Name' ),
		'menu_name'         => __( 'Reviews tags' ),
	);
	$args        = array(
		'hierarchical'      => false,
		'labels'            => $tags_labels,
		'show_ui'           => true,
		'show_admin_column' => true,
		'query_var'         => true,
		'rewrite'           => array( 'slug' => 'Tags' ),
	);
	register_taxonomy( 'payments_tag', array( 'payments' ), $args );
}

/*Games*/
// Register Custom Post Type
function games_custom_post_type() {
	$labels = array(
		'name'               => __( 'Games' ),
		'singular_name'      => __( 'Games' ),
		'menu_name'          => __( 'Games' ),
		'parent_item_colon'  => __( 'Parent Resource' ),
		'all_items'          => __( 'All Games' ),
		'view_item'          => __( 'View  Games' ),
		'add_new_item'       => __( 'Add New games' ),
		'add_new'            => __( 'Add new' ),
		'edit_item'          => __( 'Редактировать games' ),
		'update_item'        => __( 'update games' ),
		'search_items'       => __( 'Search games' ),
		'not_found'          => __( 'games not found' ),
		'not_found_in_trash' => __( 'Not found in Trash' )
	);
	$args   = array(
		'label'               => __( 'games' ),
		'description'         => __( 'games' ),
		'labels'              => $labels,
		'supports'            => array(
			'title',
			'editor',
			'excerpt',
			'tags',
			'author',
			'comments',
			'thumbnail',
			'revisions',
			'custom-fields'
		),
		'public'              => true,
		'hierarchical'        => false,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => true,
		'has_archive'         => false,
		'can_export'          => true,
		'exclude_from_search' => false,
		'yarpp_support'       => true,
		'publicly_queryable'  => true,
		'capability_type'     => 'page'
	);
	register_post_type( 'games', $args );
}

add_action( 'init', 'games_custom_post_type', 0 );

add_action( 'init', 'games_custom_taxonomy', 0 );

//create a custom taxonomy name it "type" for your posts
function games_custom_taxonomy() {
	$labels = array(
		'name'              => _x( 'Games Categories', 'taxonomy general name' ),
		'singular_name'     => _x( 'Games Categories', 'taxonomy singular name' ),
		'search_items'      => __( 'Search Types' ),
		'all_items'         => __( 'All Types' ),
		'parent_item'       => __( 'Parent Type' ),
		'parent_item_colon' => __( 'Parent Type:' ),
		'edit_item'         => __( 'Edit Type' ),
		'update_item'       => __( 'Update Type' ),
		'add_new_item'      => __( 'Add New Type' ),
		'new_item_name'     => __( 'New Type Name' ),
		'menu_name'         => __( 'Games Categories' ),
	);

	register_taxonomy( 'games_categories', array( 'games' ), array(
		'hierarchical'      => true,
		'labels'            => $labels,
		'show_ui'           => true,
		'show_admin_column' => true,
		'query_var'         => true,
		'rewrite'           => array( 'slug' => 'games_categories' ),
	) );
}

/*News*/
function news_custom_post_type() {
	$labels = array(
		'name'               => __( 'News' ),
		'singular_name'      => __( 'News' ),
		'menu_name'          => __( 'News' ),
		'parent_item_colon'  => __( 'Parent Resource' ),
		'all_items'          => __( 'All News' ),
		'view_item'          => __( 'view  news' ),
		'add_new_item'       => __( 'Add New news' ),
		'add_new'            => __( 'Add new' ),
		'edit_item'          => __( 'Редактировать news' ),
		'update_item'        => __( 'update news' ),
		'search_items'       => __( 'Search News' ),
		'not_found'          => __( 'news not found' ),
		'not_found_in_trash' => __( 'Not found in Trash' )
	);
	$args   = array(
		'label'               => __( 'news' ),
		'description'         => __( 'News' ),
		'labels'              => $labels,
		'supports'            => array(
			'title',
			'editor',
			'excerpt',
			'tags',
			'author',
			'comments',
			'thumbnail',
			'revisions',
			'custom-fields'
		),
		'public'              => true,
		'hierarchical'        => false,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => true,
		'has_archive'         => false,
		'can_export'          => true,
		'exclude_from_search' => false,
		'yarpp_support'       => true,
		'publicly_queryable'  => true,
		'capability_type'     => 'page'
	);
	register_post_type( 'news', $args );
}

add_action( 'init', 'news_custom_post_type', 0 );

add_action( 'init', 'news_custom_taxonomy', 0 );

//create a custom taxonomy name it "type" for your posts
function news_custom_taxonomy() {
	$labels = array(
		'name'              => _x( 'News Categories', 'taxonomy general name' ),
		'singular_name'     => _x( 'News Categories', 'taxonomy singular name' ),
		'search_items'      => __( 'Search Types' ),
		'all_items'         => __( 'All Types' ),
		'parent_item'       => __( 'Parent Type' ),
		'parent_item_colon' => __( 'Parent Type:' ),
		'edit_item'         => __( 'Edit Type' ),
		'update_item'       => __( 'Update Type' ),
		'add_new_item'      => __( 'Add New Type' ),
		'new_item_name'     => __( 'New Type Name' ),
		'menu_name'         => __( 'News Categories' ),
	);

	register_taxonomy( 'news_categories', array( 'news' ), array(
		'hierarchical'      => true,
		'labels'            => $labels,
		'show_ui'           => true,
		'show_admin_column' => true,
		'query_var'         => true,
		'rewrite'           => array( 'slug' => 'news_categories' ),
	) );
}

