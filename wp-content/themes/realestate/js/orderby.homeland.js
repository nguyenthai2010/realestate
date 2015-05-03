$(document).ready(function(){
	var asc = false;
	var desc = false;
	$('.orderbybox .orderbyleft select.select').change(function(){
    // store the li items
    var sort = $(this).val();
	    var sorted = $('.homeLand .landList .item').sort(function(a,b){
	    	if(sort == 'desc'){
	    		return (asc == $(a).attr('order') > $(b).attr('order')) ? 1 : -1;	
	            asc = asc ? false : true;
	    	}else{
	    		return (desc == $(a).attr('order') < $(b).attr('order')) ? 1 : -1;
	            desc = desc ? false : true;
	    	}
	    });
	    
	    // clear the list and re-add sorted items on button click 
	    jQuery('#viewlist').css('opacity',0);
		jQuery('#viewlist').html();
		jQuery('#viewlist').html( sorted );
		jQuery('#viewlist').animate({'opacity':1},500);	
		
		//var url_ajax = $('.ajaxurl').val();
		/** Get Post ID */
		/*var order = $(this).val();
		var taxid = $('.taxid').val();
		var taxcount = $('.taxcount').val();
		var taxpage = $('.taxpage').val();
		
		jQuery('#landpageList').css('opacity',0);
		 $.ajaxSetup({
	        cache: false
	    });
		/** Ajax Call 
		$.ajax({
		  url: url_ajax,
		  type: 'POST',
		  dataType: 'html',
		  data: ({ action:'orderbyHomeLand', order:order, taxid:taxid,taxcount:taxcount,taxpage:taxpage}),
		  cache: false
		}).
		done(function( html ) {
		    //var $ajax_response = $( data );
			jQuery('#landpageList').html();
			jQuery('#landpageList').html( html );
			jQuery('#landpageList').animate({'opacity':1},500);	
		})
		.error(function(){
			console.log('error');
		});	*/	
	});
		
});
