<?php
/**
 * @package SI
 */

if ( ! function_exists( '_wp_render_title_tag' ) ) {
	function theme_slug_render_title() {
?>
<title><?php wp_title( '|', true, 'right' ); ?></title>
<?php
	}
	add_action( 'wp_head', 'theme_slug_render_title' );
}

  if ( ! isset( $content_width ) ) {
    $content_width = 600;
  }

function xtreme_enqueue_comments_reply() {
	if( get_option( 'thread_comments' ) )  {
		wp_enqueue_script( 'comment-reply' );
	}
}
  
 add_action( 'comment_form_before', 'xtreme_enqueue_comments_reply' );
  add_theme_support( 'automatic-feed-links' );
	register_nav_menus( array(
		'primary' => __( 'Primary Menu',      'SI' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form', 'comment-form', 'comment-list', 'gallery', 'caption'
	) );

  
function case_studies() {
  $labels = array(
    'name'               => _x( 'case-studies', 'post type general name' ),
    'singular_name'      => _x( 'case_study', 'post type singular name' ),
    'add_new'            => _x( 'Add New', 'book' ),
    'add_new_item'       => __( 'Add New Case Study' ),
    'edit_item'          => __( 'Edit Case Study' ),
    'new_item'           => __( 'New Case Study' ),
    'all_items'          => __( 'All Case Studies' ),
    'menu_name'          => 'Case Studies'
  );
  $args = array(
    'labels'        => $labels,
    'description'   => 'Shows Case Studies',
    'public'        => true,
    'menu_position' => 5,
    'supports'      => array( 'title', 'editor', 'thumbnail', 'excerpt' ),
    'has_archive'   => true,
    'capability_type'    => 'page',
    'singular_name' => 'case-studies',
    'archive_name'  => 'case-studies'
  );
  register_post_type( 'case-studies', $args ); 
}
add_action( 'init', 'case_studies' );


function text() {
  $labels = array(
    'name'               => _x( 'texts', 'post type general name' ),
    'singular_name'      => _x( 'text', 'post type singular name' ),
    'add_new'            => _x( 'Add New', 'book' ),
    'add_new_item'       => __( 'Add New Text' ),
    'edit_item'          => __( 'Edit Text' ),
    'new_item'           => __( 'New Text' ),
    'all_items'          => __( 'All Text' ),
    'menu_name'          => 'Text'
  );
  $args = array(
    'labels'        => $labels,
    'description'   => 'Shows Text',
    'public'        => true,
    'menu_position' => 5,
    'supports'      => array( 'title', 'editor', 'thumbnail' ),
    'has_archive'   => true,
    'capability_type'    => 'page',
    'singular_name' => 'text',
    'archive_name'  => 'text'
  );
  register_post_type( 'text', $args ); 
}
add_action( 'init', 'text' );

function client() {
  $labels = array(
    'name'               => _x( 'clients', 'post type general name' ),
    'singular_name'      => _x( 'client', 'post type singular name' ),
    'add_new'            => _x( 'Add New', 'book' ),
    'add_new_item'       => __( 'Add New Client' ),
    'edit_item'          => __( 'Edit Client' ),
    'new_item'           => __( 'New Client' ),
    'all_items'          => __( 'All Cient' ),
    'menu_name'          => 'Client'
  );
  $args = array(
    'labels'        => $labels,
    'description'   => 'Shows Client',
    'public'        => true,
    'menu_position' => 5,
    'supports'      => array( 'title', 'editor', 'thumbnail' ),
    'has_archive'   => true,
    'capability_type'    => 'page',
    'singular_name' => 'text',
    'archive_name'  => 'text'
  );
  register_post_type( 'client', $args ); 
}
add_action( 'init', 'client' );

function dividers() {
  $labels = array(
    'name'               => _x( 'dividers', 'post type general name' ),
    'singular_name'      => _x( 'divider', 'post type singular name' ),
    'add_new'            => _x( 'Add New', 'book' ),
    'add_new_item'       => __( 'Add New Divider' ),
    'edit_item'          => __( 'Edit Divider' ),
    'new_item'           => __( 'New Divider' ),
    'all_items'          => __( 'All Divider' ),
    'menu_name'          => 'Dividers'
  );
  $args = array(
    'labels'        => $labels,
    'description'   => 'Shows Divider',
    'public'        => true,
    'menu_position' => 5,
    'supports'      => array( 'title', 'editor', 'thumbnail' ),
    'has_archive'   => true,
    'capability_type'    => 'page',
    'singular_name' => 'divider',
    'archive_name'  => 'divider'
  );
  register_post_type( 'divider', $args ); 
}
add_action( 'init', 'dividers' );

function pagedivider() {
  $labels = array(
    'name'               => _x( 'pagedividers', 'post type general name' ),
    'singular_name'      => _x( 'pagedivider', 'post type singular name' ),
    'add_new'            => _x( 'Add New', 'book' ),
    'add_new_item'       => __( 'Add New pagedivider' ),
    'edit_item'          => __( 'Edit pagedivider' ),
    'new_item'           => __( 'New pagedivider' ),
    'all_items'          => __( 'All pagedivider' ),
    'menu_name'          => 'pagedividers'
  );
  $args = array(
    'labels'        => $labels,
    'description'   => 'Shows Page-Divider',
    'public'        => true,
    'menu_position' => 5,
    'supports'      => array( 'title', 'editor', 'thumbnail', 'excerpt' ),
    'has_archive'   => true,
    'capability_type'    => 'page',
    'singular_name' => 'page-divider',
    'archive_name'  => 'page-divider'
  );
  register_post_type( 'page-divider', $args ); 
}
add_action( 'init', 'pagedivider' );

function whatwedo() {
  $labels = array(
    'name'               => _x( 'whatwedos', 'post type general name' ),
    'singular_name'      => _x( 'whatwedor', 'post type singular name' ),
    'add_new'            => _x( 'Add New', 'book' ),
    'add_new_item'       => __( 'Add New What We Do' ),
    'edit_item'          => __( 'Edit whatwedo' ),
    'new_item'           => __( 'New whatwedo' ),
    'all_items'          => __( 'All whatwedo' ),
    'menu_name'          => 'What We Do'
  );
  $args = array(
    'labels'        => $labels,
    'description'   => 'Shows What We Do',
    'public'        => true,
    'menu_position' => 5,
    'supports'      => array( 'title', 'editor', 'thumbnail', 'excerpt' ),
    'has_archive'   => true,
    'capability_type'    => 'page',
    'singular_name' => 'whatwedo',
    'archive_name'  => 'whatwedo'
  );
  register_post_type( 'whatwedo', $args ); 
}
add_action( 'init', 'whatwedo' );

function teams() {
  $labels = array(
    'name'               => _x( 'teams', 'post type general name' ),
    'singular_name'      => _x( 'team', 'post type singular name' ),
    'add_new'            => _x( 'Add New', 'book' ),
    'add_new_item'       => __( 'Add New Team' ),
    'edit_item'          => __( 'Edit Team' ),
    'new_item'           => __( 'New Team' ),
    'all_items'          => __( 'All Team' ),
    'menu_name'          => 'Teams'
  );
  $args = array(
    'labels'        => $labels,
    'description'   => 'Shows Team',
    'public'        => true,
    'menu_position' => 5,
    'supports'      => array( 'title', 'editor', 'excerpt', 'thumbnail' ),
    'has_archive'   => true,
    'capability_type'    => 'page',
    'singular_name' => 'team',
    'archive_name'  => 'team'
  );
  register_post_type( 'team', $args ); 
}
add_action( 'init', 'teams' );
add_theme_support('post-thumbnails', array( 'post', 'page', 'divider', 'team', 'text', 'case-studies', 'page-divider', 'whatwedo', 'client') );