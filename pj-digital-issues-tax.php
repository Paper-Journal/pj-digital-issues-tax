<?php
// Plugin Name:			Paper Journal Digital Issues
// Plugin URI:			https://github.com/jclwilson/pj-digital-issues-tax
// Description:			Lets you link posts by digital issue number, requires the Advanced Custom Fields (ACF) plugin to be installed.
// Version:				1.0.1
// Author:				Jacob Charles Wilson
// Author URI:			https://jacobcharleswilson.com
// License:				GNU General Public License v2
// License URI:			http://www.gnu.org/licenses/gpl-2.0.html
// Text Domain:			pj-digital-issues-tax
// GitHub Plugin URI:	https://github.com/jclwilson/pj-digital-issues-tax

//hook into the init action and call create_contributors_taxonomy when it fires
 
function create_digital_issues_taxonomy() {

// Labels part for the GUI

$labels = array(
    'name' => _x( 'Digital Issues', 'taxonomy general name' ),
    'singular_name' => _x( 'Digital Issue', 'taxonomy singular name' ),
    'search_items' =>  __( 'Search Digital issues' ),
    'popular_items' => __( 'Popular Digital Issues' ),
    'all_items' => __( 'All Digital Issues' ),
    'parent_item' => null,
    'parent_item_colon' => null,
    'edit_item' => __( 'Edit Digital Issue' ), 
    'update_item' => __( 'Update Digital Issue' ),
    'add_new_item' => __( 'Add New Digital Issue' ),
    'new_item_name' => __( 'New Digital Issue Name' ),
    'separate_items_with_commas' => __( 'Separate Digital Issues with commas' ),
    'add_or_remove_items' => __( 'Add or remove Digital Issues' ),
    'choose_from_most_used' => __( 'Choose from the most used Digital Issues' ),
    'menu_name' => __( 'Digital Issues' ),
  ); 
 
// Now register the non-hierarchical taxonomy like tag
 
  register_taxonomy('digital-issues','post',array(
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
    'rewrite' => array( 'slug' => 'digital-issue' ),
   	'show_in_nav_menus'     => true,
  ));
}
add_action( 'init', 'create_digital_issues_taxonomy', 0 );

?>
