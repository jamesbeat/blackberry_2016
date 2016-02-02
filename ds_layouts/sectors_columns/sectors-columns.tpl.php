<<?php print $layout_wrapper; print $layout_attributes; ?> class="ds-sectors-columns <?php print $classes;?> clearfix">

  <?php if (isset($title_suffix['contextual_links'])): ?>
  <?php print render($title_suffix['contextual_links']); ?>
  <?php endif; ?>

	<section id="section_a">
		<div class="container">
			<div class="row">
				<?php print $sector_a_row_1; ?>
			</div>
			<div class="row">
				<?php print $sector_a_row_2; ?>
			</div>
		</div>
	</section>	
	
	<section id="section_b">
		<div class="container">
			<div class="row">
				<?php print $sector_b_row_1; ?>
			</div>
			<div class="row">
				<?php print $sector_b_row_2; ?>
			</div>
		</div>
	</section>	
	
	<section id="section_c">
		<div class="container">
			<div class="row">
				<?php print $sector_c_row_1; ?>
			</div>
			<div class="row">
				<?php print $sector_c_row_2; ?>
			</div>
		</div>
	</section>	
	
	<section id="section_d">
		<div class="container">
			<div class="row">
				<?php print $sector_d_row_1; ?>
			</div>
			<div class="row">
				<?php print $sector_d_row_2; ?>
			</div>
		</div>
	</section>	

</<?php print $layout_wrapper ?>>

<?php if (!empty($drupal_render_children)): ?>
  <?php print $drupal_render_children ?>
<?php endif; ?>
