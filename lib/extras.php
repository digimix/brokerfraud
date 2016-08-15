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
 * Change amount of posts that show by archive template
 */

function mix_post_pagesize( $query ) {
    if ( is_admin() || ! $query->is_main_query() )
        return;

    if ( is_home() ) {
        // Display only 1 post for the original blog archive
        $query->set( 'posts_per_page', 1 );
        return;
    }

    if ( is_post_type_archive( 'cases' ) ) {
        // Display 50 posts for a custom post type called 'movie'
        $query->set( 'posts_per_page', 6 );
        return;
    }
}
add_action( 'pre_get_posts', __NAMESPACE__ . '\\mix_post_pagesize', 1 );



/**
 * Post list navigation button’s text
 */

add_filter( 'tc_list_nav_next_text' , __NAMESPACE__ . '\\my_list_nav_buttons_text');
add_filter( 'tc_list_nav_previous_text' , __NAMESPACE__ . '\\my_list_nav_buttons_text');

function my_list_nav_buttons_text() {
    switch ( current_filter() ) {
        case 'tc_list_nav_next_text':
            $text = '<span class="meta-nav">&larr;</span> old posts';
            break;

        case 'tc_list_nav_previous_text':
            $text = 'new posts <span class="meta-nav">&rarr;</span>';
            break;
    }
    return $text;
}


add_filter('next_posts_link_attributes',  __NAMESPACE__ . '\\posts_link_attributes');
add_filter('previous_posts_link_attributes',  __NAMESPACE__ . '\\posts_link_attributes');

function posts_link_attributes() {
    return 'rel="nav"';
}


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
