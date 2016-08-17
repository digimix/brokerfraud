<?php

namespace Roots\Sage\Extras;

use Roots\Sage\Setup;

require_once locate_template('/lib/post-types/reviews.php');
require_once locate_template('/lib/post-types/cases.php');
require_once locate_template('/lib/taxonomy.php');

if ( ! class_exists( 'cmb_Meta_Box' ) ) {
	require_once locate_template('/lib/metabox.php');
}

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
    if ( is_tax( 'claims' ) ) {
        // Display 50 posts for a custom post type called 'movie'
        $query->set( 'posts_per_page', -1 );
        $query->set( 'post_type', 'cases' );
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



// remove category base
add_filter('category_rewrite_rules', __NAMESPACE__ . '\\no_category_base_rewrite_rules');
function no_category_base_rewrite_rules($category_rewrite) {
	$category_rewrite=array();
	$categories=get_categories(array('hide_empty'=>false));
	foreach($categories as $category) {
	$category_nicename = $category->slug;
	if ( $category->parent == $category->cat_ID )
	$category->parent = 0;
	elseif ($category->parent != 0 )
	$category_nicename = get_category_parents( $category->parent, false, '/', true ) . $category_nicename;
	$category_rewrite['('.$category_nicename.')/(?:feed/)?(feed|rdf|rss|rss2|atom)/?$'] = 'index.php?category_name=$matches[1]&feed=$matches[2]';
	$category_rewrite['('.$category_nicename.')/page/?([0-9]{1,})/?$'] = 'index.php?category_name=$matches[1]&paged=$matches[2]';
	$category_rewrite['('.$category_nicename.')/?$'] = 'index.php?category_name=$matches[1]';
	}
	global $wp_rewrite;
	$old_base = $wp_rewrite->get_category_permastruct();
	$old_base = str_replace( '%category%', '(.+)', $old_base );
	$old_base = trim($old_base, '/');
	$category_rewrite[$old_base.'$'] = 'index.php?category_redirect=$matches[1]';
	return $category_rewrite;
}

// remove tag base
/*
add_filter('tag_rewrite_rules', __NAMESPACE__ . '\\no_tag_base_rewrite_rules');
function no_tag_base_rewrite_rules($tag_rewrite) {
$tag_rewrite=array();
$tags=get_tags(array('hide_empty'=>false));
foreach($tags as $tag) {
$tag_nicename = $tag->slug;
if ( $tag->parent == $tag->tag_ID )
$tag->parent = 0;
elseif ($tag->parent != 0 )
$tag_nicename = get_tag_parents( $tag->parent, false, '/', true ) . $tag_nicename;
$tag_rewrite['('.$tag_nicename.')/(?:feed/)?(feed|rdf|rss|rss2|atom)/?$'] = 'index.php?tag=$matches[1]&feed=$matches[2]';
$tag_rewrite['('.$tag_nicename.')/page/?([0-9]{1,})/?$'] = 'index.php?tag=$matches[1]&paged=$matches[2]';
$tag_rewrite['('.$tag_nicename.')/?$'] = 'index.php?tag=$matches[1]';
}
global $wp_rewrite;
$old_base = $wp_rewrite->get_tag_permastruct();
$old_base = str_replace( '%tag%', '(.+)', $old_base );
$old_base = trim($old_base, '/');
$tag_rewrite[$old_base.'$'] = 'index.php?tag_redirect=$matches[1]';
return $tag_rewrite;
}
*/

 // remove author base
/*
add_filter('author_rewrite_rules', __NAMESPACE__ . '\\no_author_base_rewrite_rules');
function no_author_base_rewrite_rules($author_rewrite) {
global $wpdb;
$author_rewrite = array();
$authors = $wpdb->get_results("SELECT user_nicename AS nicename from $wpdb->users");
foreach($authors as $author) {
$author_rewrite["({$author->nicename})/(?:feed/)?(feed|rdf|rss|rss2|atom)/?$"] = 'index.php?author_name=$matches[1]&feed=$matches[2]';
$author_rewrite["({$author->nicename})/page/?([0-9]+)/?$"] = 'index.php?author_name=$matches[1]&paged=$matches[2]';
$author_rewrite["({$author->nicename})/?$"] = 'index.php?author_name=$matches[1]';
}
return $author_rewrite;}
add_filter('author_link', 'no_author_base', 1000, 2);
function no_author_base($link, $author_id) {
$link_base = trailingslashit(get_option('home'));
$link = preg_replace("|^{$link_base}author/|", '', $link);
return $link_base . $link;
}
*/