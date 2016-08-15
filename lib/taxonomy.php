<?php
// Register Custom Taxonomies
function mix_tax_claims() {

	$labels = array(
		'name'                       => _x( 'Stock Fraud Claims', 'Taxonomy General Name', 'text_domain' ),
		'singular_name'              => _x( 'Stock Fraud Claim', 'Taxonomy Singular Name', 'text_domain' ),
		'menu_name'                  => __( 'Claims', 'text_domain' ),
		'all_items'                  => __( 'All Claims', 'text_domain' ),
		'parent_item'                => __( 'Parent Item', 'text_domain' ),
		'parent_item_colon'          => __( 'Parent Item:', 'text_domain' ),
		'new_item_name'              => __( 'New Claim', 'text_domain' ),
		'add_new_item'               => __( 'Add New Claim', 'text_domain' ),
		'edit_item'                  => __( 'Edit Claim', 'text_domain' ),
		'update_item'                => __( 'Update Claim', 'text_domain' ),
		'separate_items_with_commas' => __( 'Separate Claims with commas', 'text_domain' ),
		'search_items'               => __( 'Search Claims', 'text_domain' ),
		'add_or_remove_items'        => __( 'Add or remove Claims', 'text_domain' ),
		'choose_from_most_used'      => __( 'Choose from the most used Claims', 'text_domain' ),
		'not_found'                  => __( 'Not Found', 'text_domain' ),
	);

	$rewrite = array(
		'slug'                       => 'stock-fraud-claims',
		'with_front'                 => true,
		'hierarchical'               => false,
	);

	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => true,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => true,
		'rewrite'                    => $rewrite,
	);
	register_taxonomy( 'claims', array( 'cases' ), $args );
}

// Hook into the 'init' action
add_action( 'init', 'mix_tax_claims', 0 );

?>