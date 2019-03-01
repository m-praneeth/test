 jQuery(document).ready(function() {

	var windowHeight = jQuery(window).height();
	// var headerheight = jQuery('.header').height(); 
    var bannerheight = jQuery('.main-banner').height();
   
    
    if( bannerheight !== windowHeight ) {
        // var headerheight = jQuery(window).height(); 
        var headerheight = jQuery('.header').height();
        var sliderHeight = jQuery('.main-banner').height();       
        
      jQuery('.main-banner').height(windowHeight - headerheight);
     
    }

 jQuery('#return_to_top').click(function() {      
          jQuery('body,html').animate({
              scrollTop : 0                      
          }, 500);
      });
  });
