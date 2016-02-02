<?php
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
        <title><?php echo $params['subject']; ?></title>
        <style type="text/css">
		<?php echo $css; ?>
		</style>
	</head>
	<body leftmargin="0" marginwidth="0" topmargin="0" marginheight="0" offset="0" class="htmlmail">
		
    	<center>
			<!-- Headband -->
			<table id="mail_head_band" border="0" cellpadding="0" cellspacing="0" width="600">
				<tr>
				 	<td align="left">
					 	<div class="htmlmail-welcome">
						 	<p><?php echo $params['subject']; ?></p>
					 	</div>
				 	</td>
				 	<td align="right">
				 		
				 	</td>
				</tr>
    		</table>
    	    <!-- END Headband -->	
    	        	   
    	    <!-- BODY -->
        	<table id="mail_body" border="0" cellpadding="0" cellspacing="0" width="600">
            	<tr>
		            <td align="left" valign="top" width="600">
						<?php echo $params['message']; ?>
		            </td>
		         </tr>
        	</table>
        	
        	<!-- Begin Foter -->
        				
			<table id="footer" border="0" cellpadding="0" cellspacing="0" width="600">
				
				<tr>
					<td class="grid_mini">
						<table class="belt-table" border="0" cellpadding="0" cellspacing="0" width="100%" align="left">
							<tr>
						        <td><a href="http://www.linkedin.com/company/blackberry" target="_blank"><img src="http://www.blackberry-summit.de/sites/default/files/mailings/linkedin.png" width="18" height="18" border="0" alt="Linkedin"></a></td>
						        <td><a href="https://twitter.com/blackberry4biz" target="_blank"><img src="http://www.blackberry-summit.de/sites/default/files/mailings/twitter.png" width="19" height="16" border="0" alt="Twitter"></a></td>
						        <td><a href="http://www.facebook.com/BlackBerry" target="_blank"><img src="http://www.blackberry-summit.de/sites/default/files/mailings/facebook.png" width="9" height="18" border="0" alt="Facebook"></a></td>
						        <td><a href="http://www.youtube.com/user/BlackBerry" target="_blank"><img src="http://www.blackberry-summit.de/sites/default/files/mailings/youtube.png" width="20" height="20" border="0" alt="You Tube"></a></td>
						        <td><a href="http://bizblog.blackberry.com/" target="_blank"><img src="http://www.blackberry-summit.de/sites/default/files/mailings/blog.png" width="21" height="20" border="0" alt="Blog"></a></td>
						        <td><a href="https://enterprisestore.ecomm.webapps.blackberry.com/global/country-picker.html" target="_blank"><img src="http://www.blackberry-summit.de/sites/default/files/mailings/enterprisestore.png" width="43" height="22" border="0" alt="Enterprise Store"></a></td>
						    </tr>
						</table>

					</td>
			
				</tr>
				
				<tr>
					<td class="grid_mini">
						<p>Diese Nachricht wurde von oder im Auftrag von BlackBerry Limited &#40;&#8220;BlackBerry&#8221;&#41; gesendet.</p>
						<p>Um Ihre Kontakteinstellungen zu ändern und Marketingmitteilungen oder andere werbliche Informationen von BlackBerry abzubestellen, klicken Sie bitte <a id="unsubscribe_link" href="https://www.blackberry.com/eSubscriptionsManagement/unsubscribe.jsp">hier</a>.</p>
						<p>BlackBerry verfolgt eine langjährige Politik zum Schutz der Privatsphäre der Kunden. Nehmen Sie sich einen Augenblick Zeit, um die Datenschutzrichtlinien von BlackBerry zu lesen, die Sie <a href="http://de.blackberry.com/legal/privacy-policy.html">hier</a> finden. Oder besuchen Sie unsere Website unter <a href="http://de.blackberry.com">www.blackberry.com</a>.</p>
						<p>&copy; 2014 BlackBerry. Alle Rechte vorbehalten. BlackBerry<sup style="line-height:1px; font-size:10px">&reg;</sup>, BBM<sup style="line-height:1px; font-size:10px">&trade;</sup> sowie zugehörige Warenzeichen, Namen und Logos sind Eigentum von BlackBerry Limited &#40;&#8220;BlackBerry&#8221;&#41; und sind in den USA und anderen Ländern registriert und/oder werden dort verwendet. Alle anderen Marken sind Eigentum ihrer jeweiligen Inhaber.</p>
					</td>
				</tr>
			</table>
			
        	<!-- End Foter -->	



    	</center>
	</body>
</html>

