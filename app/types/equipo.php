<?php
/*
Docs: https://github.com/jjgrainger/PostTypes
*/

use PostTypes\PostType;

// Post type names 
$names = [
	'name' => 'Equipo',
	'singular' => 'Equipo',
	'plural' => 'Equipo',
	'slug' => 'equipo'
];

// Post type options
$options = [
	'supports' => [ 'title', 'editor', 'page-attributes', 'thumbnail' ],
	'capability_type' => 'page',
	'show_in_rest' => true,
	'show_in_graphql' => true, //Show in GraphQL
	'graphql_single_name' => 'equipo' //Name in GraphQL
];

// Register post type
$example = new PostType($names, $options);

// Set post type dashicon from Dashicons: https://developer.wordpress.org/resource/dashicons/#chart-bar
$example->icon('dashicons-no');

// Register the "Example" post type with WordPress
$example->register(); 

