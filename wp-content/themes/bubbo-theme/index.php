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

$templates = array( 'index.twig' );
if ( is_home() ) {
	
	//add homepage file if home
	array_unshift( $templates, 'front-page.twig' );
}
Timber::render( $templates, $context );
