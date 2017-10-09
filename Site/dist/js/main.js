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
    

    $('.column').click(function() {
	    $(this).children('.copyWrapper').fadeOut(200);
	    $(this).siblings().children('.copyWrapper').fadeOut();
	    
	    $('.CloseRoundButton').delay(500).animate({opacity: 1});
	    
	   $(this).children('.columnOverlay').fadeOut();
	   $(this).siblings().children('.columnOverlay').fadeIn();
	   
	   $(this).children('.columnOpen').delay(400).fadeIn(300);
	   $(this).siblings().children('.columnOpen').fadeOut(100);
	   
	   
	   $(this).siblings().children('.verticalText').fadeIn();
	   $(this).children('.verticalText').hide();
	   
	   $(this).siblings().animate({width: '5%'});
	   $(this).animate({width: '85%'});
    });
    
    $(' .CloseRoundButton').mouseenter(function() {
	    
	   $(this).children('.bg').addClass('bgOver');
       $(this).children('.cross').children('.a').addClass('blackBG');
       $(this).children('.cross').children('.b').addClass('blackBG');
       
        
    });
    
    $('.CloseRoundButton').mouseleave(function() {
	   $(this).children('.bg').removeClass('bgOver');
       $(this).children('.cross').children('.a').removeClass('blackBG');
	   $(this).children('.cross').children('.b').removeClass('blackBG');
    });
    
    $('.CloseRoundButton').click(function() {
	    $('.column').children('.columnOpen').fadeOut(100);
	    $(this).children('.copyWrapper').delay(500).fadeIn();
	    $('.CloseRoundButton').animate({opacity: 0}, 200);
	    $('.column').children('.columnOverlay').fadeOut();
	    $('.proceduresMenu .column').animate({width: '25%'});
	    $('.column').siblings().children('.verticalText').fadeOut();
	    $('.column').siblings().children('.copyWrapper').fadeIn();
	    
	});
    
    
    // The conditions page spinal video dropdown menu
    
     $('.dropbtn').click(function() {
            $('.dropdown-content').addClass('show');
         });
    
         $('.buttonLink').click(function() {
            $('.dropdown-content').removeClass('show');
         });
    
    
    // video buttons
     $(' .video-Button').mouseenter(function() { 
        $(this).children('.videoButtonOverlay').stop().fadeOut();
         $(this).children('.videoText-2').stop().fadeIn();
         $(this).children('.downArrowSmall').stop().fadeIn();
     });
     $('.video-Button').mouseleave(function() { 
         $(this).children('.videoButtonOverlay').stop().fadeIn();
         $(this).children('.videoText-2').stop().fadeOut();
         $(this).children('.downArrowSmall').stop().fadeOut();
     });
    
    // video selecting
    
 
       
         $('.video-Button').click(function() {
              var videoButtonID = this.id.slice(-1);
              var copyId = "#player-copy-" + videoButtonID;
              var videoPlayerID = "#player-" + videoButtonID;
             //hides and shows text
             $(".player-copy").hide();
             $(copyId).show();
             //hides and shows video players
              $(".video-player").hide();
             $(videoPlayerID).show();
             //scroll to
             var offset = 150;
            $('html, body').animate({
                    scrollTop: $(".video-player-section").offset().top - offset
            }, 500);
             
         });
    
        $('.buttonLink').click(function() {
              var videoButtonID = this.id.slice(-1);
              var copyId = "#player-copy-" + videoButtonID;
              var videoPlayerID = "#player-" + videoButtonID;
             //hides and shows text
             $(".player-copy").hide();
             $(copyId).show();
             //hides and shows video players
              $(".video-player").hide();
             $(videoPlayerID).show();
            //scroll to
             var offset = 150;
            $('html, body').animate({
                    scrollTop: $(".video-player-section").offset().top - offset
            }, 500);
         });
         
     
     
     
     
     
		     //twitter 
		     var $iframeHead;
		
			 var twitterStylesTimer = window.setInterval(function(){
		
		    $iframeHead = $("iframe#twitter-widget-0").contents().find('head');
		
		    if( !$('#twitter-widget-styles', $iframeHead).length ){ //If our stylesheet does not exist tey to place it
		        $iframeHead.append('<link rel="stylesheet" href="../css/twitter-widget.css" id="twitter-widget-styles">');
		        
		       
		        
		    }else if( $('#twitter-widget-styles', $iframeHead).length ){    //If stylesheet exists then quit timer
		        clearInterval(twitterStylesTimer);
		     
		    }
		
		}, 200);
		
		

		  
		     
		     
		 $('.tweet').twittie({
            dateFormat: '%b. %d, %Y',
            template: '{{tweet}} <div class="date">{{date}}</div> <a href="{{url}}" target="_blank">Details</a>',
            count: 5,
            hideReplies: true
        }, function() {
	        
	        $('.tweet ul').slick({
			    infinite: true,
			    autoplay: true,
			    fade: true,
			    arrows: false,
			    slidesToShow: 1,
			   	slidesToScroll: 1
		  	});
		  
		  	$( ".tweet ul li" ).wrapInner( "<p class='tweetText'></p>");
		  	$('.tweet ul li').prepend('  <div class="twitterLogo"><img src="../img/twitterLogo.png" /></div>');
        
		});
        

        
		      
  
  
});