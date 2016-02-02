<?php

/**
 * @file
 * template.php
 */

/**
 * Implements hook_js_alter().
 */
 /**
function blackberry_2016_js_alter(&$javascript) {
  $js_base = drupal_get_path('theme', 'blackberry_2016').'/js/';
  //$javascript['misc/jquery.js']['type'] = 'external';
  //$javascript['misc/jquery.js']['data'] = 'https://code.jquery.com/jquery-1.11.1.min.js';
  $javascript['misc/jquery.js']['data'] = $js_base.'vendor/jquery-1.10.2.min.js';
  
}
**/

 $js_base = drupal_get_path('theme', 'blackberry_2016').'/js/';

drupal_add_js($js_base.'jquery-migrate-1.2.1.min.js', array(
  'type' => 'file',
  'scope' => 'header',
  'group' => JS_DEFAULT,
  'weight' => 0,
));

drupal_add_js($js_base.'modernizr.custom.js', array(
  'type' => 'file',
  'scope' => 'header',
  'group' => JS_DEFAULT,
  'weight' => 0,
));

drupal_add_js($js_base.'jquery.smoothState.js', array(
  'type' => 'file',
  'scope' => 'header',
  'group' => JS_LIBRARY,
  'weight' => 3,
));

drupal_add_js($js_base.'jquery.scrollTo.min.js', array(
  'type' => 'file',
  'scope' => 'footer',
  'group' => JS_LIBRARY,
  'weight' => 6,
));


drupal_add_js($js_base.'jquery.focuspoint.min.js', array(
  'type' => 'file',
  'scope' => 'footer',
  'group' => JS_LIBRARY,
  'weight' => 9,
));

drupal_add_js($js_base.'jquery.flexslider-min.js', array(
  'type' => 'file',
  'scope' => 'footer',
  'group' => JS_LIBRARY,
  'weight' => 10,
));


drupal_add_js($js_base.'jquery.mmenu.min.all.js', array(
  'type' => 'file',
  'scope' => 'footer',
  'group' => JS_LIBRARY,
  'weight' => 12,
));

drupal_add_js($js_base.'stacktable.js', array(
  'type' => 'file',
  'scope' => 'footer',
  'group' => JS_LIBRARY,
  'weight' => 13,
));


drupal_add_js($js_base.'main.js', array(
  'type' => 'file',
  'scope' => 'footer',
  'group' => JS_THEME,
  'weight' => 20,
));


function blackberry_2016_preprocess_page(&$vars) {
  if (isset($vars['node']->type)) {
    $vars['theme_hook_suggestions'][] = 'page__' . $vars['node']->type;
  }
  //slack webhook integrtion
  if (isset($_POST['token'])) {
	  watchdog('slack access', 'token POST: '.$_POST['token']);
    $vars['theme_hook_suggestions'][] = 'page__headless';
  }
  
}

function blackberry_2016_preprocess_html(&$vars) {
  if (isset($_POST['token'])) {
	  watchdog('slack access', 'token POST: '.$_POST['token']);
    $vars['theme_hook_suggestions'][] = 'html__headless';
  }
}

function blackberry_2016_preprocess_node(&$vars) {
	 if (isset($_POST['token'])) {
    $vars['theme_hook_suggestions'][] = 'node__headless';
  }
}

function blackberry_2016_preprocess_block(&$vars) {
	 if (isset($_POST['token'])) {
    $vars['theme_hook_suggestions'][] = 'block__headless';
  }
}

function blackberry_2016_preprocess_region(&$vars) {
	 if (isset($_POST['token'])) {
    $vars['theme_hook_suggestions'][] = 'region__headless';
  }
}





function blackberry_2016_status_messages($variables) {
 
    
  $display = $variables['display'];
  $output = '';
  
  	  $status_heading = array(
	    'status' => t('Status message'), 
	    'error' => t('Error message'), 
	    'warning' => t('Warning message'),
	  );
	  foreach (drupal_get_messages($display) as $type => $messages) {
		  
		// skip all error/warning messages for anonymous users
		  if (!user_is_logged_in() && ($type == 'PHP')) {
		     
		  }
		  // default processing
		  else {
			  $output .= '<div class="alert alert-block alert-'.$type.'"><div class="container"><div class="row"><div class="col-xs-12">';
	    
			    if (!empty($status_heading[$type])) {
			      $output .= '<h2 class="element-invisible">' . $status_heading[$type] . '</h2>';
			    }
			    if (count($messages) > 1) {
			      $output .= '<ul>';
			      foreach ($messages as $message) {
			        $output .= '  <li>' . $message . '</li>';
			      }
			      $output .= '</ul>';
			    }
			    else {
			      $output .= $messages[0];
			    }
			    $output .= '</div></div></div><a class="close" data-dismiss="alert" href="#">×</a></div>';
		
		  }
  
		  
	   }
	  return $output; 
	 
 
}

function blackberry_2016_form_alter(&$form, &$form_state, $form_id) {
	 
	 if($form['#id'] == 'registration-form'){
	  	 
		$form['actions']['submit']['#value'] = 'Anmeldung absenden <i class="icon icon-check"></i>'; 	
		$form['anon_mail']['#title'] = 'E-Mail <span class="form-required" title="Diese Angabe wird benötigt.">*</span>';

						
	  } 

 
}


?>