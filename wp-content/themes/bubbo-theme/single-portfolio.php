<?php
$context = Timber::get_context();
$context['post'] = new Timber\Post();
Timber::render( array( 'singles/single-portfolio.twig', 'single.twig' ), $context );
