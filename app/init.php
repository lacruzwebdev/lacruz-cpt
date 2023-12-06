<?php

namespace PRX\CPT;

// Set up plugin class
class Init
{

  function __construct()
  {

    // Include all post types
    foreach (glob(CPT_PLUGIN_DIR . "app/types/*.php") as $filename) {
      include $filename;
    }

    // Include all ACFs
    foreach (glob(CPT_PLUGIN_DIR . "app/acf/*.php") as $filename) {
      include $filename;
    }
    
  }


  
}
