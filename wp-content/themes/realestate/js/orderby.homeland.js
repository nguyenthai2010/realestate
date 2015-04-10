$(document).ready(function(){
	$('.orderbybox .orderbyleft select.select').change(function(){
		var url_ajax = $('.ajaxurl').val();
		/** Get Post ID */
		var order = $(this).val();
		var taxid = $('.taxid').val();
		var taxcount = $('.taxcount').val();
		var taxpage = $('.taxpage').val();
		
		jQuery('#landpageList, #landpageItem').css('opacity',0);
		jQuery('#landpageItem').remove();
		 $.ajaxSetup({
	        cache: false
	    });
		/** Ajax Call */
		$.ajax({
		  url: url_ajax,
		  type: 'POST',
		  dataType: 'html',
		  data: ({ action:'orderbyHomeLand', order:order, taxid:taxid,taxcount:taxcount,taxpage:taxpage}),
		  cache: false
		}).
		done(function( html ) {
		    //var $ajax_response = $( data );
			jQuery('#landpageList, #landpageItem').html();
			jQuery('#landpageList').html( html );
			jQuery('#landpageList').animate({'opacity':1},500);	
		})
		.error(function(){
			console.log('error');
		});		
	});
		
});
