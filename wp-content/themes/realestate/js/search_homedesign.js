$(function() {
	$('#gallery .homedesignGallery .item').click(function(){
		var src = $(this).find('.pic img').attr('src');
		$('.sliderStyleHomeDesign .homedesignGallery .bigImage img').attr('src',src);
	});
	
	$('.subtab .btn-homepage-menu').click(function(){
		$('.subtab .btn-homepage-menu').removeClass('active');
		$(this).addClass('active');
		var href = $(this).attr('data-id');
		$('.singleTab .homedesignGallery').removeClass('current').animate({
			'display':'none', 'opacity': 0
		},200);
		$('.singleTab').find(href).addClass('current').animate({
			'display':'block', 'opacity': 1
		},200);
		return false;
	});
	
	$('.viewhomeland a').click(function(){
		$('.viewhomeland a').removeClass('active');
		$(this).addClass('active');
		var href = $(this).attr('href');
		$('#landpageList .homelandTab').removeClass('active').animate({
			'display':'none', 'opacity': 0
		},200);
		$('#landpageList').find(href).addClass('active').animate({
			'display':'block', 'opacity': 1
		},200);
		return false;
	});
	$('.viewhomeland a.viewlist').click(function(){
		$('.headerbox .paging, .headerbox .orderbybox').css({'opacity':1,'pointer-events':'fill'});
		$('#viewmap').css({'display':'none','opacity':0});
		$('#viewlist').css({'display':'block','opacity':1});
	});
	$('.viewhomeland a.viewmap').click(function(){
		$('.headerbox .paging, .headerbox .orderbybox').css({'opacity':0,'pointer-events':'none'});
		$('#viewmap').css({'display':'block','opacity':1});
		$('#viewlist').css({'display':'none','opacity':0});
	});
});

$(window).load(function(){
	$('#viewmap').css({'display':'none','opacity':0});
});
