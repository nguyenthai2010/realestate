$(document).ready(function() {
	jQuery.validator.addMethod('selectcheck', function (value) {
        return (value != '0');
    }, "");
    $("#presstoJim").validate({
		rules: {
			'firstname': {
				required: true
			},
			'surname': {
				required: true
			},
			/*'phone': {
				required: true
			},*/
            'email': { 
                required: true, 
                email: true
            },
            /*'comments':{
            	required: true 
            },
            'buildin' : {
            	required: true
            },
            'choosedesign': { 
                selectcheck: true
            },
            'displayvillage': {
            	selectcheck: true
            },
            'contactyou': {
            	selectcheck: true
            }*/
		},
		 
        errorPlacement: function(error, element){},
        highlight: function(element) {
            //console.log(element);
            if($(element).is(':checkbox'))
            {
                var name = $(element).attr('name');
                $('input[name='+name+']').parent('.checkboxStyle').addClass('error');
            }
            else
            {
                $(element).addClass('error');
            }
        },
         unhighlight: function(element, errorClass, validClass) {
		    $(element).removeClass(errorClass).addClass(validClass); // remove error class from elements/add valid class
		    $('.checkboxStyle').removeClass(errorClass); // remove error class from ul element for checkbox groups and radio inputs
		  },
		submitHandler: function(form) {
			var boxes = $('.ipinterests:checkbox');
            if(boxes.length > 0) {
                if( $('.ipinterests:checkbox:checked').length < 1) {
                    alert('Please select at least one checkbox');
                    boxes[0].focus();
                    return false;
                }
            }
            form.submit();
		},
	});
});