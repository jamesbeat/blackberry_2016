<?php if ($header): ?>
          <?php print $header; ?>
     <?php endif; ?>

<?php if ($rows): ?>
         <?php print $rows; ?>
  
  <?php elseif ($empty): ?>
    
      <?php print $empty; ?>
     <?php endif; ?>

  
<?php if ($footer): ?>
    
      <?php print $footer; ?>
    <?php endif; ?>
