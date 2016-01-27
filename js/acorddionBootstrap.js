// JavaScript Document

$(function() {

  "use strict";

//animate anchor top
$('.btn.btn-info.top1').on('click', function (e) {
		e.preventDefault();
		$('html, body').animate({
		scrollTop: $('#top').offset().top
		},1000);
	});
	
	
$('#customBootstrap #accordion').on('shown.bs.collapse', function () {
	//fade in body when shown
	$('#customBootstrap #accordion').find('.panel-collapse.collapse.in .panel-body').animate({opacity: 1}, {duration: 500, 
		 specialeasing: {
			 scrollTop:'easeIn'
			 }
		});
	//cross-browser opacity
	$('#customBootstrap #accordion').find('.panel-collapse.collapse .panel-body').css("filter", "alpha(opacity=1)");
	
	//animate accordion on view when shown	
	$('html, body').animate({
	scrollTop: $('#customBootstrap #accordion').offset().top
	},/*1000*/
		{duration: 1000, 
		 specialeasing: {
			 scrollTop:'easeInBounce'
			 }
		});
	});	
	
//set opacity to 0 on panel-body when is hidden to fade it again on shown
$('#customBootstrap #accordion').on('hidden.bs.collapse', function () {
	$('#customBootstrap #accordion').find('.panel-collapse.collapse .panel-body').animate({opacity: 0}, 500);
	//cross-browser opacity
	$('#customBootstrap #accordion').find('.panel-collapse.collapse .panel-body').css("filter", "alpha(opacity=0)");
	});

//glyphs change on click header	
$('#customBootstrap div#accordion.panel-group .panel-info a').click(function(){
	$('#accordion .panel-info span.glyphicon.glyphicon-menu-down').fadeOut('slow').addClass('hidden').removeClass('visible');
	$('#accordion .panel-info span.glyphicon.glyphicon-menu-right').fadeIn('slow').addClass('visible').removeClass('hidden');
	var a_href = $(this).attr('href');
	if ($('a[href=' + a_href + ']').attr('aria-expanded') === 'true')  {
		  $('a[href=' + a_href +'] span.glyphicon.glyphicon-menu-right').fadeIn('slow').addClass('visible').removeClass('hidden');
		  $('a[href=' + a_href +'] span.glyphicon.glyphicon-menu-down').fadeOut('slow').addClass('hidden').removeClass('visible');
		} else {
		  $('a[href=' + a_href +'] span.glyphicon.glyphicon-menu-right').fadeOut('slow').addClass('hidden').removeClass('visible');
		  $('a[href=' + a_href + '] span.glyphicon.glyphicon-menu-down').fadeIn('slow').addClass('visible').removeClass('hidden');
		}
	});	
})		

