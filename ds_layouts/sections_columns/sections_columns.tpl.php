<?php
/**
 * @file
 * Display Suite Sections Columns template.
 *
 * Available variables:
 *
 * Layout:
 * - $classes: String of classes that can be used to style this layout.
 * - $contextual_links: Renderable array of contextual links.
 * - $layout_wrapper: wrapper surrounding the layout.
 *
 * Regions:
 *
 * - $section_a_1: Rendered content for the "Section A 1" region.
 * - $section_a_1_classes: String of classes that can be used to style the "Section A 1" region.
 *
 * - $section_a_2: Rendered content for the "Section A 2" region.
 * - $section_a_2_classes: String of classes that can be used to style the "Section A 2" region.
 *
 * - $section_b_1: Rendered content for the "Section B 1" region.
 * - $section_b_1_classes: String of classes that can be used to style the "Section B 1" region.
 *
 * - $section_b_2: Rendered content for the "Section B 2" region.
 * - $section_b_2_classes: String of classes that can be used to style the "Section B 2" region.
 *
 * - $section_c_1: Rendered content for the "Section C 1" region.
 * - $section_c_1_classes: String of classes that can be used to style the "Section C 1" region.
 *
 * - $section_c_2: Rendered content for the "Section C 2" region.
 * - $section_c_2_classes: String of classes that can be used to style the "Section C 2" region.
 *
 * - $section_d_1: Rendered content for the "Section D 1" region.
 * - $section_d_1_classes: String of classes that can be used to style the "Section D 1" region.
 *
 * - $section_d_2: Rendered content for the "Section D 2" region.
 * - $section_d_2_classes: String of classes that can be used to style the "Section D 2" region.
 */
?>
<<?php print $layout_wrapper; print $layout_attributes; ?> class="<?php print $classes;?> clearfix">

  <!-- Needed to activate contextual links -->
  <?php if (isset($title_suffix['contextual_links'])): ?>
    <?php print render($title_suffix['contextual_links']); ?>
  <?php endif; ?>

    <<?php print $section_a_1_wrapper; ?> class="ds-section-a-1<?php print $section_a_1_classes; ?>">
      <?php print $section_a_1; ?>
    </<?php print $section_a_1_wrapper; ?>>

    <<?php print $section_a_2_wrapper; ?> class="ds-section-a-2<?php print $section_a_2_classes; ?>">
      <?php print $section_a_2; ?>
    </<?php print $section_a_2_wrapper; ?>>

    <<?php print $section_b_1_wrapper; ?> class="ds-section-b-1<?php print $section_b_1_classes; ?>">
      <?php print $section_b_1; ?>
    </<?php print $section_b_1_wrapper; ?>>

    <<?php print $section_b_2_wrapper; ?> class="ds-section-b-2<?php print $section_b_2_classes; ?>">
      <?php print $section_b_2; ?>
    </<?php print $section_b_2_wrapper; ?>>

    <<?php print $section_c_1_wrapper; ?> class="ds-section-c-1<?php print $section_c_1_classes; ?>">
      <?php print $section_c_1; ?>
    </<?php print $section_c_1_wrapper; ?>>

    <<?php print $section_c_2_wrapper; ?> class="ds-section-c-2<?php print $section_c_2_classes; ?>">
      <?php print $section_c_2; ?>
    </<?php print $section_c_2_wrapper; ?>>

    <<?php print $section_d_1_wrapper; ?> class="ds-section-d-1<?php print $section_d_1_classes; ?>">
      <?php print $section_d_1; ?>
    </<?php print $section_d_1_wrapper; ?>>

    <<?php print $section_d_2_wrapper; ?> class="ds-section-d-2<?php print $section_d_2_classes; ?>">
      <?php print $section_d_2; ?>
    </<?php print $section_d_2_wrapper; ?>>

</<?php print $layout_wrapper ?>>

<!-- Needed to activate display suite support on forms -->
<?php if (!empty($drupal_render_children)): ?>
  <?php print $drupal_render_children ?>
<?php endif; ?>
