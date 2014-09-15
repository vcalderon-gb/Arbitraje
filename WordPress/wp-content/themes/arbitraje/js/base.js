 // jQuery.noConflict();
$(document).ready(function() {

/*****************************************************************************/
  /*$('ul.nav li.dropdown, ul.nav li.dropdown-submenu').hover(function() {
		$(this).find(' > .dropdown-menu').stop(true, true).delay(200).fadeIn();
	}, function() {
		$(this).find(' > .dropdown-menu').stop(true, true).delay(200).fadeOut();
	});*/
/*****************************Calendario**********************/
var d = new Date();
var n = d.getMonth(); 
n++;
$('.month-'+n).css("display","block");
/****************************Controles Calendario*************************/

	$('.fl_left').click(function(){
		n--;
		if(n==0)
		n=1;
		
		for(i=1;i<=12;i++)
		{
			if(n==i)
			$('.month-'+n).css("display","block");
			else
			$('.month-'+i).css("display","none");
		}
	});
	
	$('.fl_right').click(function(){
		n++;
		if(n==13)
		n=12;
		
		for(i=1;i<=12;i++)
		{
			if(n==i)
			$('.month-'+n).css("display","block");
			else
			$('.month-'+i).css("display","none");
		}
	});
/*********************************Sidebar slider**************************************/
$('.sidebar_slider1').bxSlider({
	nextSelector:'.triangulo-der',	prevSelector:'.triangulo-izq',
	});
$('.slider_ev2').bxSlider({
	  auto: true,nextSelector:'.triangulo-der-gris',	prevSelector:'.triangulo-izq-gris',
	});

});
