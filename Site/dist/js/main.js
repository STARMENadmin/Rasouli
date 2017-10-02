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
    
    // procedure section
    $(' .column').mouseenter(function() {
        $(this).children('.copyWrapper').children('.proPara').slideToggle();
        $(this).children('.copyWrapper').children('.roundButton').children('.bg').addClass('bgOver');
        $(this).children('.copyWrapper').children('.roundButton').children('.cross').children('.a').addClass('blackBG');
        $(this).children('.copyWrapper').children('.roundButton').children('.cross').children('.b').addClass('blackBG');
       $(this).children('.copyWrapper').children('.roundButton').children('.readmore').fadeIn();
    });
    
     $(' .column').mouseleave(function() {
         
         $(this).children('.copyWrapper').children('.proPara').slideToggle();
         $(this).children('.copyWrapper').children('.roundButton').children('.bg').removeClass('bgOver');
         $(this).children('.copyWrapper').children('.roundButton').children('.cross').children('.a').removeClass('blackBG');
		 $(this).children('.copyWrapper').children('.roundButton').children('.cross').children('.b').removeClass('blackBG');
		 $(this).children('.copyWrapper').children('.roundButton').children('.readmore').fadeOut();
    });
    
    var cHeight = $('.column').height();
    $('.column').click(function() {
	    
	   $('.column').height(cHeight);
	   $('.column').children('img').delay(300).animate({opacity:'0'});
	   $('.copyWrapper').fadeOut();
	   $(this).siblings().children('.verticalText').fadeIn();
	   $(this).children('.verticalText').hide();
	   
	   
	   $(this).siblings().animate({width: '5%'});
	   $(this).animate({width: '85%'});
	   
	   var column = $(this).attr('class').split(' ')[1];
	   //var bgImage =  $('.proceduresBackgroundWrapper').children(img).attr('column');
	   var imageID = '#' + column;
	   
	   	//alert(imageID);
	   	
	    //$('.proceduresBackgroundWrapper').children(imageID).height(cHeight);
	    $('.proceduresBackgroundWrapper').children(imageID).siblings().delay(300).animate({opacity:'0'});
	    $('.proceduresBackgroundWrapper').children(imageID).delay(300).animate({opacity:'1'});
    });
  
  
});