$(document).ready(function() {
/********************Menu************************************/
 /* $('ul.nav li.dropdown, ul.nav li.dropdown-submenu').hover(function() {
		$(this).find(' > .dropdown-menu').stop(true, true).delay(200).fadeIn();
	}, function() {
		$(this).find(' > .dropdown-menu').stop(true, true).delay(200).fadeOut();
	});*/

/***********************************Eventos Home*************************/
	$('.prox-event').click(function(){
		if($(this).css("background-color")=="rgb(61, 74, 83)")
		{
			$('.prox-event').css("background-color","#E24046");	
			$('.event-act').css("background-color","#3D4A53");	
			$('.eventos_home').slideToggle();
			$('.prox_eventos_home').slideToggle();
		}
	});
	$('.event-act').click(function(){		
		if($(this).css("background-color")=="rgb(61, 74, 83)")
		{
			$('.prox-event').css("background-color","#3D4A53");	
			$('.event-act').css("background-color","#E24046");	
			$('.eventos_home').slideToggle();
			$('.prox_eventos_home').slideToggle();
		}
	});

/***********************************Slider*************************/
$('.bxslider').bxSlider({auto: true, captions: true});

/******************************************************************/


});