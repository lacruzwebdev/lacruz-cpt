<?php
/*
Plugin Name: Custom Post Types & ACF Builder
Plugin URI: 
Description: Adds CPTs and ACFs
Version: 1.0
Author: Ignacio Lacruz
Author URI: https://lacruzwebdev.com
License: MIT
*/

namespace PRX\CPT;


//Set up autoloader
require __DIR__ . '/vendor/autoload.php';

//Define Constants
define('CPT_PLUGIN_DIR', plugin_dir_path(__FILE__));
define('CPT_PLUGIN_URL', plugin_dir_url(__FILE__));

// Autoload the Init class
$init = new Init();