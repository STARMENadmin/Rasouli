$(document).ready(function(){$(window).scroll(function(){$(window).scrollTop()>=600?$(".header-nav").addClass("slideDown"):$(".header-nav").removeClass("slideDown")}),$(".home-section-6").slick({prevArrow:$("#homeBlogPrevious"),nextArrow:$("#homeBlogNext"),slide:".slickWrapper",infinite:!0,slidesToShow:1,slidesToScroll:1}),$(".testimonialHoverText").hide(),$(".testimonialOpacity").hide(),$(" .hoverWrapper").mouseenter(function(){$(this).children(".testimonialHoverText").fadeIn(),$(this).children(".testimonialOpacity").fadeIn()}),$(" .hoverWrapper").mouseleave(function(){$(this).children(".testimonialHoverText").fadeOut(),$(this).children(".testimonialOpacity").fadeOut()}),$(" .copyWrapper").mouseenter(function(){$(this).children(".proPara").slideToggle()}),$(" .copyWrapper").mouseleave(function(){$(this).children(".proPara").slideToggle()})});