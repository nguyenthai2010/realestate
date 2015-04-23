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
});