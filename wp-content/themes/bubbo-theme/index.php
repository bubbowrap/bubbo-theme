<?php
/**
 * The main template file

 */

if ( ! class_exists( 'Timber' ) ) {
	echo 'Timber not activated. Make sure you activate the plugin in <a href="/wp-admin/plugins.php#timber">/wp-admin/plugins.php</a>';
	return;
}
$context = Timber::get_context();
$context['posts'] = Timber::get_posts();

$posts_displayed = get_option('posts_per_page');
$query_args = array(
    'post_type' => 'post',
    'posts_per_page' => $posts_displayed,
    'paged' => $paged
);

$context['title'] = 'Blog';

if ( is_day() ) {
	$context['title'] = 'Archive: '.get_the_date( 'D M Y' );
} else if ( is_month() ) {
	$context['title'] = 'Archive: '.get_the_date( 'M Y' );
} else if ( is_year() ) {
	$context['title'] = 'Archive: '.get_the_date( 'Y' );
} else if ( is_tag() ) {
	$context['title'] = single_tag_title( '', false );
} else if ( is_category() ) {
	$context['title'] = single_cat_title( '', false );
	array_unshift( $templates, 'archive-' . get_query_var( 'cat' ) . '.twig' );
} else if ( is_post_type_archive() ) {
	$context['title'] = post_type_archive_title( '', false );
	array_unshift( $templates, 'archive-' . get_post_type() . '.twig' );
}

// Get List of Categories
$context['categories'] = Timber::get_terms('category');

$templates = array( 'index.twig' );
if ( is_home() ) {
	
	//add homepage file if home
	array_unshift( $templates, 'archive.twig' );
}

Timber::render( $templates, $context );
