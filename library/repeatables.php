<?php

// Universal utility functions //
/*******************************/

// Adds image based on template name, set $template to false to use base directory structure
function add_image($image,$alt,$template = true) {
  if ($template == true) {
    $page = basename(get_page_template(), '.php') . '/';
  }
  else {
    $page = '';
  }
  $directory = get_stylesheet_directory_uri();
  echo '<img src="'.$directory.'/assets/images/'.$page.''.$image.'" alt="'.$alt.'" class="'.$classarray.'" />';
}

// Formats get_template_part as a string
function str_template($template) {
  ob_start();
    get_template_part($template);
  return ob_get_clean();
}


// Project-specific functions //
/******************************/
