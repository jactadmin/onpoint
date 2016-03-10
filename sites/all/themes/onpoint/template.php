<?php

/**
 * @file
 * Template overrides as well as (pre-)process and alter hooks for the
 * onpoint theme.
 */


/*
* Override filter.module's theme_filter_tips() function to disable tips display.
*/
function onpoint_filter_tips($tips, $long = FALSE, $extra = '') {
  return '';
}
function onpoint_filter_tips_more_info () {
  return '';
}

/*
* Front page node template suggestion
*/

function onpoint_preprocess_node ( &$vars ) {
    if (isset($vars['node'])) {
    	if ($vars['node']->type == 'homepage') {
			$vars["theme_hook_suggestions"][] = "node__front";
	    }

	}
}

/**
 * Add information about the number of sidebars
 */
function onpoint_preprocess_html(&$variables) {
  // Code borrowed/adapted from D7 core.
  // Classes originally added by D7 core, then removed by Omega 4 and now put back (ish) by this function.
  // NOTE: D7 core used hyphens in class names, we need to use different classes so we're
  // replacing hyphens with underscores (make sure your CSS is expecting this).
  if (!empty($variables['page']['sidebar_first']) && !empty($variables['page']['sidebar_second'])) {
    $variables['classes_array'][] = 'two_sidebars';
  }
  elseif (!empty($variables['page']['sidebar_first'])) {
    $variables['classes_array'][] = 'one_sidebar sidebar_first';
  }
  elseif (!empty($variables['page']['sidebar_second'])) {
    $variables['classes_array'][] = 'one_sidebar sidebar_second';
  }
  else {
    $variables['classes_array'][] = 'no_sidebars';
  }
}