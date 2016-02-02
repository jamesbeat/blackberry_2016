<?php
	$node = $params['simplenews_source']->getNode();
	
	$path = drupal_get_path('theme', 'blackberry_2016');
	
	$css_file = $path.'/css/mail.css';
	
	if (!empty($css_file) && file_exists($css_file)) {
	    $css = file_get_contents($css_file);
	}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <title><?php echo $node->title; ?></title>
        <style type="text/css">
		<?php echo $css; ?>
		</style>
	</head>
	<body leftmargin="0" marginwidth="0" topmargin="0" marginheight="0" offset="0" class="htmlmail">
		
    	<center>
			<!-- Headband -->
			<table id="mail_head_band" border="0" cellpadding="0" cellspacing="0" width="600">
				<tr>
				 	<td>
					 	<div class="htmlmail-welcome">	
					 		<p><?php echo $node->field_welcome['und'][0]['value']; ?></p>
					 	</div>
				 	</td>
				 	<td>
				 		<?php if ($key == 'node' || $key == 'test'): ?>
						<div class="htmlmail-simplenews-link">
						  <p>Die E-Mail wird nicht richtig dargestellt? <a id="node_link" href="<?php echo url('node/' . $node->nid, array('absolute' => TRUE)); ?>">Zur online-Version</a></p>
						</div>
						<?php endif; ?>
				</tr>
    		</table>
    	    <!-- END Headband -->	
    	    <!-- BODY -->
        	<table id="mail_body" border="0" cellpadding="0" cellspacing="0" width="600">
                       
            	<tr>
		            <td align="left" valign="top" width="600">
						<?php echo $body; ?>
		            </td>
		         </tr>
        	</table>
        	<!-- END BODY -->
    	</center>
	</body>
</html>