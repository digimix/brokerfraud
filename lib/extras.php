<?php

namespace Roots\Sage\Extras;

use Roots\Sage\Setup;

require_once locate_template('/lib/post-types/reviews.php');
require_once locate_template('/lib/post-types/cases.php');
require_once locate_template('/lib/taxonomy.php');


/**
 * Add <excerpts> to pages post type
 */

add_action( 'init', __NAMESPACE__ . '\\mix_add_excerpts_to_pages' );
function mix_add_excerpts_to_pages() {
	add_post_type_support( 'page', 'excerpt' );
}

/**
 * Add <body> classes
 */
function body_class($classes) {
  // Add page slug if it doesn't exist
  if (is_single() || is_page() && !is_front_page()) {
    if (!in_array(basename(get_permalink()), $classes)) {
      $classes[] = basename(get_permalink());
    }
  }

  // Add class if sidebar is active
  if (Setup\display_sidebar()) {
    $classes[] = 'sidebar-primary';
  }

  return $classes;
}
add_filter('body_class', __NAMESPACE__ . '\\body_class');

/**
 * Clean up the_excerpt()
 */
function excerpt_more() {
  return ' &hellip; <a href="' . get_permalink() . '">' . __('Continued', 'sage') . '</a>';
}
add_filter('excerpt_more', __NAMESPACE__ . '\\excerpt_more');


function mix_filter_claims_term_links( $list ) {
    $list = str_replace('rel="tag">', 'rel="tag"><span>', $list);
    $list = str_replace('</a>', ' Claims</span></a>', $list);
    return $list;
}
add_filter( 'term_links-claims',  __NAMESPACE__ . '\\mix_filter_claims_term_links' );
