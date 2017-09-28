$(document).ready(function(){
	
	// slide in nav
	

	
	$(window).scroll(function(){
		if($(window).scrollTop() >= 600){
			$('.header-nav').addClass('slideDown');
		}
	else{
		$('.header-nav').removeClass('slideDown');
	}
	
	});

	
	
	
  $('.home-section-6').slick({
	  prevArrow: $('#homeBlogPrevious'),
	  nextArrow: $('#homeBlogNext'),
	    slide: '.slickWrapper',
	    infinite: true,
	    slidesToShow: 1,
	   	slidesToScroll: 1
  });
  
  	$('.testimonialHoverText').hide();
  	$('.testimonialOpacity').hide();
   
    $(' .hoverWrapper').mouseenter(function() {
	  	$(this).children('.testimonialHoverText').fadeIn();
	  	$(this).children('.testimonialOpacity').fadeIn();		 
    });
    
        $(' .hoverWrapper').mouseleave(function() {
	  	$(this).children('.testimonialHoverText').fadeOut();
	  	$(this).children('.testimonialOpacity').fadeOut();		 
    });
  
  
});