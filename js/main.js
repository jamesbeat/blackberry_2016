jQuery( document ).ready(function($) {
		
			
    $("nav#main-nav").mmenu({
	    
	    "slidingSubmenus": false,
        "extensions": [
            "pageshadow"
        ],
        "offCanvas": {
           "position": "right"
        }
	   // options
	}, {
	   // configuration
	   clone: true
	});

    
    $('.scroll-btn').on('click', function(e){
	  
	    e.preventDefault();
	    $.scrollTo( $('.field-group-htabs-wrapper'), 800 );
	    $('.horizontal-tab-button a[href="#registration"]').click(); 	        
    });
    
    $('.view-termine .views-table').stacktable();
    
    
    	
	$(window).scroll(function() {
		
	  var p = $(window);	
		
	  if(p.scrollTop() >= 60){
		$( "#stickybar" ).addClass('stuck'); 
		
	  }
	  else{
		$( "#stickybar" ).removeClass('stuck'); 
		
	  }
	  
	  
	});
	
	
	    
    $('.toplink').on('click', function(e){
	    e.preventDefault();
	    scrollTopAnimation();
	});
	
	$('.ctalink').on('click', function(e){
	    e.preventDefault();
	    var target = $(this).data('target');
	  
	    scrollCTAAnimation(target);
	});
        
    var scrollTopAnimation = function() {
	    
	    
	    $("html, body").delay(100).animate({ scrollTop: 0 }, 'slow');
	   
	 
    }

	var scrollCTAAnimation = function(target) {
		var offset = 100;
		
		if(target =="anchor-description"){
			var offset = 100;
		}
		else if(target =="anchor-agenda"){
			var offset = 100;
		}
				
		
		
		$("html, body").delay(200).animate({ scrollTop: $('#'+target).offset().top - offset }, 'slow');
				
    }
    
    
    $('.flexslider').css("display","none");

	$('.flexslider').flexslider({
    	
    	slideshowSpeed: 8000,          
		animationSpeed: 500,
		controlNav: false,               
		directionNav: true,          
		prevText: "",      
		nextText: "",
	
    	start: function(){
	    	console.log('slide start');
	    	$('.flexslider').fadeIn(3000);
	    	
    	}
    });


	

	
});