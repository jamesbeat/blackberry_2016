	<div id="page">
	
	
	<?php if (!empty($primary_nav)): ?>
	<div id="navigation">
		<div id="navbar" role="banner" class="<?php print $navbar_classes; ?>">
		  <div class="row">
		    <div class="navbar-header">
			    			    
				<?php if($logo){ ?>
				      <a class="logo" href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>">
				        <img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" />
				      </a>
				<?php } 
					else{ ?>
						 <a class="logo" href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>"></a>
					<?php }?>
					
		    </div>

		
		    <?php if (!empty($primary_nav) || !empty($secondary_nav) || !empty($page['navigation'])): ?>
		      <div class="navbar">
		        <nav role="navigation">
		                
		            <?php print render($primary_nav); ?>
		         	          
		        </nav>
		        		        	        
		      </div>
		       <div class="nav-snap">
			      <a href="/" id="snap_btn"><i></i></a> 	
		       </div>
		    <?php endif; ?>
		  </div>
		</div>
	</div>
	<?php endif; ?>
	
	<?php if($page['calltoaction'] || $messages){ ?>
		<div id="stickybar">
			<?php if($messages){ ?>
				<div id="messagebar">
				   <?php print $messages; ?>
				</div>
			<?php } ?>
			<?php if($page['calltoaction']){ ?> 
				<div id="cta">
					<?php print render($page['calltoaction']); ?>
				</div>
			<?php } ?>
		</div>
	<?php } ?>

	
	<?php if($page['stage']){ ?>
	<header role="banner" id="stage">
	      <div id="shades">
		      <div class="highlighted">
		      
		      <?php if (!empty($page['highlighted'])): ?>
			   <?php print render($page['highlighted']); ?>
			  <?php endif; ?>
		  	</div>
	      </div>
	      <?php print render($page['stage']); ?>
	</header> <!-- /#page-header -->
	<?php } ?>
			
	<div id="main">
	   	
   		<?php print $messages; ?>
	   
	      <?php if (!empty($page['highlighted'])): ?>
	      <div class="highlighted jumbotron"><?php print render($page['highlighted']); ?></div>
	      <?php endif; ?>
	      
	      <?php if (!empty($breadcrumb)): print $breadcrumb; endif;?>
	     
	      <a id="main-content"></a>
	      <?php print render($title_prefix); ?>
	     
	      <?php if (!empty($title)): ?>
	      <div class="container">
		  		<div class="row"><h1 class="page-header"><?php print $title; ?></h1></div>
	      </div>
	      <?php endif; ?>
	      <?php print render($title_suffix); ?>
	                 
	      <?php if (!empty($page['help'])): ?>
	        <?php print render($page['help']); ?>
	      <?php endif; ?>
	        
	       <div class="container">
		       <center>  
			   <?php print render($page['content']); ?>
		       </center>
	       </div>
	       <?php if (!empty($action_links)): ?>
	        <ul class="action-links"><?php print render($action_links); ?></ul>
	      <?php endif; ?>
	      
	      <?php if (!empty($tabs)): ?>
	        <?php print render($tabs); ?>
	      <?php endif; ?>
	   
	
	</div>
	</div>
	<footer class="footer">
	  <div class="container">
	  <?php print render($page['footer']); ?>
	  </div>
	</footer>

