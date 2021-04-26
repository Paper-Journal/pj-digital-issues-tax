<?php
// Plugin Name:			Paper Journal Online Issues
// Plugin URI:			https://github.com/jclwilson/pj-online-issues-tax
// Description:			Lets you link posts by online issue number, requires the Advanced Custom Fields (ACF) plugin to be installed.
// Version:				1.0.1
// Author:				Jacob Charles Wilson
// Author URI:			https://jacobcharleswilson.com
// License:				GNU General Public License v2
// License URI:			http://www.gnu.org/licenses/gpl-2.0.html
// Text Domain:			pj-online-issues-tax
// GitHub Plugin URI:	https://github.com/jclwilson/pj-online-issues-tax

//hook into the init action and call create_contributors_taxonomy when it fires
 
function create_online_issues_taxonomy() {

// Labels part for the GUI

$labels = array(
    'name' => _x( 'Online Issues', 'taxonomy general name' ),
    'singular_name' => _x( 'Online Issue', 'taxonomy singular name' ),
    'search_items' =>  __( 'Search Online issues' ),
    'popular_items' => __( 'Popular Online Issues' ),
    'all_items' => __( 'All Online Issues' ),
    'parent_item' => null,
    'parent_item_colon' => null,
    'edit_item' => __( 'Edit Online Issue' ), 
    'update_item' => __( 'Update Online Issue' ),
    'add_new_item' => __( 'Add New Online Issue' ),
    'new_item_name' => __( 'New Online Issue Name' ),
    'separate_items_with_commas' => __( 'Separate Online Issues with commas' ),
    'add_or_remove_items' => __( 'Add or remove Online Issues' ),
    'choose_from_most_used' => __( 'Choose from the most used Online Issues' ),
    'menu_name' => __( 'Online Issues' ),
  ); 
 
// Now register the non-hierarchical taxonomy like tag
 
  register_taxonomy('online-issues','post',array(
    'hierarchical' => false,
    'labels' => $labels,
    'show_ui' => true,
	'show_in_menu' => true,
	'show_in_rest' => true,
	'public' => true,
	'show_in_quick_edit' => false,
    	'show_admin_column' => true,
    'update_count_callback' => '_update_post_term_count',
    'query_var' => true,
    'rewrite' => array( 'slug' => 'online-issue' ),
   	'show_in_nav_menus'     => true,
  ));
}
add_action( 'init', 'create_online_issues_taxonomy', 0 );

?>
