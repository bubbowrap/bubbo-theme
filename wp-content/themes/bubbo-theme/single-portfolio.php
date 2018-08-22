<?php
$context = Timber::get_context();
$context['post'] = new Timber\Post();
Timber::render( array( 'single-team.twig', 'single.twig' ), $context );
