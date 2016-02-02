<?php

/**
 * @file
 * Default simple view template to display a list of rows.
 *
 * @ingroup views_templates
 */
?>
<?php if (!empty($title)): ?>
  <h3><?php print $title; ?></h3>
<?php endif; ?>


<?php foreach ($rows as $id => $row): ?>
<?php 
	if(isset($view->result[$id]->_field_data['item_id']['entity']->field_section_wallpaper['und'][0]['uri'])){
		$bg_img = 'background-image:url('.file_create_url($view->result[$id]->_field_data['item_id']['entity']->field_section_wallpaper['und'][0]['uri']).');';
	}
	else{
		$bg_img = '';
	}
	
	if(isset($view->result[$id]->_field_data['item_id']['entity']->field_section_background['und'][0]['rgb'])){
		$bg_col = 'background-color:'.$view->result[$id]->_field_data['item_id']['entity']->field_section_background['und'][0]['rgb'].';';
	}
	else{
		$bg_col = '';
	}
	
 ?>
  <div<?php if ($classes_array[$id]) { print ' class="' . $classes_array[$id] .' full_bar"';  } ?> style="<?php print $bg_img.$bg_col;?>">
    <div class="container">
    <?php print $row; ?>
    </div>
  </div>
<?php endforeach; ?>
