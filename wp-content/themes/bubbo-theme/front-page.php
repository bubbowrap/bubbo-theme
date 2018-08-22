<?php
/**
* Template Name: Front Page

 */

$context = Timber::get_context();
$context['post'] = new Timber\Post();

// get latest portfolio items
$args = array(
	'post_type' => 'portfolio',
	'posts_per_page' => 8,
);
$context['portfolio'] = Timber::get_posts($args);

//get categories
$context['categories'] =  Timber::get_terms('portfolio-category', array('parent' => 0));


Timber::render( 'front-page.twig', $context );
