<?php

/**
 * @file
 * Display Suite Sections Columns configuration.
 */

function ds_sections_columns() {
  return array(
    'label' => t('Sections Columns'),
    'regions' => array(
      'section_a_1' => t('Section A 1'),
      'section_a_2' => t('Section A 2'),
      'section_b_1' => t('Section B 1'),
      'section_b_2' => t('Section B 2'),
      'section_c_1' => t('Section C 1'),
      'section_c_2' => t('Section C 2'),
      'section_d_1' => t('Section D 1'),
      'section_d_2' => t('Section D 2'),
    ),
    // Uncomment if you want to include a CSS file for this layout (sections_columns.css)
    'css' => TRUE,
    // Uncomment if you want to include a preview for this layout (sections_columns.png)
    'image' => TRUE,
  );
}
