<?php
function ds_sectors_columns() {
  return array(
    'label' => t('Sector Columns'),
    'regions' => array(
      'sector_a_row_1' => t('Sector A Row 1'),
      'sector_a_row_2' => t('Sector A Row 2'),
      'sector_b_row_1' => t('Sector B Row 1'),
      'sector_b_row_2' => t('Sector B Row 2'),
      'sector_c_row_1' => t('Sector C Row 1'),
      'sector_c_row_2' => t('Sector C Row 2'),
      'sector_d_row_1' => t('Sector D Row 1'),
      'sector_d_row_2' => t('Sector D Row 2'),
    ),
    // Add this line if there is a default css file.
    'css' => FALSE,
    // Add this line if you're using DS 2.x for icon preview
    'image' => TRUE,
  );
}