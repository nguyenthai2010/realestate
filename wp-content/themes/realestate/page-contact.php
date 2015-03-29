<?php
	get_header();
?>
  
  <div id="content" class="contactPage bgGray">
    <img src="images/contact.jpg" width="100%"/>
    <div class="container pad40">
    	<div class="span8">
	    	<div class="span4">
	    		<h3> SALES OR GENERAL ENQUIRY</h3>
	    		<img src="images/c-1.jpg"/>
	    		<div class="desc">
					<p>To contact Masterton Homes Sales Department, simply click on the email address below, and send enquiry through to us. Please include your name and contact details if you would like information posted to you.</p>	    			
	    		</div>
	    		<a href="mailto:sales@masterton.com.au" class="link">sales@masterton.com.au</a>
	    	</div>
	    	<div class="span4">
	    		<h3> HOME AND LAND ENQUIRY</h3>
	    		<img src="images/c-2.jpg"/>
	    		<div class="desc">
					<p>To contact Masterton Homes Sales Department, simply click on the email address below, and send enquiry through to us. Please include your name and contact details if you would like information posted to you.</p>	    			
	    		</div>
	    		<a href="mailto:homeland@masterton.com.au" class="link">homeland@masterton.com.au</a>
	    	</div>
	    	<div class="span4">
	    		<h3>CONSTRUCTION ENQUIRY</h3>
	    		<img src="images/c-3.jpg"/>
	    		<div class="desc">
					<p>
						If you are an existing customer and have a construction query, or you would like to receive an update on the progress of your home please click on the email address below.
					</p>	    			
					<p>
						<b>If you would like to receive more information, please include your contact details, phone, fax and postal address.</b>
					</p>
	    		</div>
	    		<a href="mailto:construction@masterton.com.au" class="link">construction@masterton.com.au</a>
	    	</div>
	    	<div class="padtop23"></div>
	    	<div class="span4">
	    		<h3>90 DAY MAINTENANCE ENQUIRY</h3>
	    		<div class="desc">
					<p>
						At Masterton Homes we take pride in being able to supply you with the most up to date information. Not only during the construction period but also for items included in your 90 day maintenance listing.
					</p>	
					<p>
						If you would like to make an enquiry regarding any outstanding items for 90 day maintenance or to receive an update, please click on the address below. 
					</p>    			
					<p>
						<b>
							If you would like a more detailed reply, please include your full name, building address, contact telephone and address details.
						</b>
					</p>
	    		</div>
	    		<a href="mailto:maintenance@masterton.com.au" class="link">maintenance@masterton.com.au</a>
	    	</div>
	    	<div class="span4">
	    		<h3>CAREERS AT MASTERTON HOMES</h3>
	    		<img src="images/c-4.jpg"/>
	    		<div class="desc">
					<p>
						Masterton is committed to employing, developing and retaining the best employees. We are an equal opportunity employer and believe in investing in the development of our people. If you would like to email us and leave your details, we will keep them on file for when a job you are interested in arises. Please submit your resume via email.
					</p>	    			
	    		</div>
	    		<a href="mailto:human_resources@masterton.com.au" class="link">human_resources@masterton.com.au</a>
	    	</div>
	    	<div class="span4">
	    		<h3>COMMENTS ABOUT THE WEBSITE?</h3>
	    		<img src="images/c-3.jpg"/>
	    		<div class="desc">
					<p>
						If you have any comments about the Masterton website, please feel free to email and let us know.
					</p>
	    		</div>
	    		<a href="mailto:webmaster@masterton.com.au" class="link">webmaster@masterton.com.au</a>
	    	</div>
	    </div>
	    <?php
	    if(!empty($_POST['email']))
    	{
	    	$data['firstname'] = $_POST['firstname'];
	        $data['surname'] = $_POST['surname'];
	        $data['email'] = $_POST['email'];
	        $data['phone'] = sha1($_POST['phone']);
	        $data['ipinterests'] = $_POST['ipinterests'];
	        $data['displayvillage'] = $_POST['displayvillage'];
	        $data['contactyou'] = $_POST['contactyou'];
			$sendmail = contact_form($data['firstname'],$data['surname'], $data['email'],$data['phone'],$data['ipinterests'],$data['displayvillage'], $data['contactyou']);
			if($sendmail){ 
			    $message = "Send message successful";
			}		
			else 
			    $message = 'Current can not send message. Please try again.';
		}
	    ?>
	    <div class="span4 rightContact">
	    	<h2>Contact Us</h2>
	    	<?php
                if($message != "")
                {
                    $alert = $logged == true ? "alert-success" : "alert-danger";
                    echo '<div class="alert '.$alert.'">'.$message.'</div>';
                }
                    
            ?> 
	    	<form action="" id="contactForm" method="post">
	    		<p>
	    			<select class="select" name="sexoption">
	    				<option value="mr">Mr.</option>
	    				<option value="mrs">Mrs.</option>
	    			</select>
	    		</p>
	    		<p>
	    			<input value="" type="text" name="firstname" placeholder="First Name (Required)"/>
	    		</p>
	    		<p>
	    			<input value="" type="text" name="surname" placeholder="Surname"/>
	    		</p>
	    		<p>
	    			<input id="email" value="" type="text" name="email" placeholder="Email Address (Required)"/>
	    		</p>
	    		<p>
	    			<input value="" type="text" name="phone" placeholder="Phone (Required)"/>
	    		</p>
	    		<div class="partiBox">
	    			<h4>Particular Interests <span>(Required)</span></h4>
	    			<ul>
	    				<li class="checkboxStyle">
	    					<input type="checkbox" id="interest01" name="ipinterests" class="ipinterests">
	    					<label for="interest01">
	    						Building a new home on vacant land
	    					</label>
	    				</li>
	    				<li class="checkboxStyle">
	    					<input type="checkbox" id="interest02" name="ipinterests" class="ipinterests">
	    					<label for="interest02">
	    						Knockdown Rebuild (KDR)
	    					</label>
	    				</li>
	    				<li class="checkboxStyle">
	    					<input type="checkbox" id="interest03" name="ipinterests" class="ipinterests">
	    					<label for="interest03">
	    						Home & Land Package
	    					</label>
	    				</li>
	    				<li class="checkboxStyle">
	    					<input type="checkbox" id="interest04" name="ipinterests" class="ipinterests">
	    					<label for="interest04">
	    						Dual Occupancy or Duplex
	    					</label>
	    				</li>
	    				<li class="checkboxStyle">
	    					<input type="checkbox" id="interest05" name="ipinterests" class="ipinterests">
	    					<label for="interest05">
	    						Building for Investment
	    					</label>
	    				</li>
	    				<li class="checkboxStyle">
	    					<input type="checkbox" id="interest06" name="ipinterests" class="ipinterests">
	    					<label for="interest06">
	    						Multi Residential
	    					</label>
	    				</li>
	    			</ul>
	    			<div class="selectGroup">
	    				<select class="select" name="displayvillage">
		    				<option value="0">Closest Display Village?</option>
		    				<option value="display-center-locations">Display Centre Locations</option>
		    				<option value="display-home-for-sale">Display Homes for Sale</option>
		    				<option value="warwick-farm-display-village">Warwick Farm Display Village</option>
		    			</select>
		    			<select class="select" name="contactyou">
		    				<option value="0">How should we contact you?</option>
		    				<option value="phone">Phone</option>
		    				<option value="email">Email</option>
		    			</select>
	    			</div>
	    		</div>
	    		<input type="submit" type="SUBMIT"/>
	    	</form>
	    </div>
    </div>
  </div>
  <!-- #content--> 
  
</div>
<!-- #wrapper -->
<?php get_footer(); ?>
<script type="text/javascript">
$(document).ready(function() {
	jQuery.validator.addMethod('selectcheck', function (value) {
        return (value != '0');
    }, "");
    
    $("#contactForm").validate({
		rules: {
			'firstname': {
				required: true
			},
			'surname': {
				required: true
			},
			'phone': {
				required: true
			},
            'email': { 
                required: true, 
                email: true
            },
            'ipinterests': { 
                required: true
            },
            'displayvillage': {
            	selectcheck: true
            },
            'contactyou': {
            	selectcheck: true
            }
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
</script>