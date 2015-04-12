<div class="sidebar">
	    	<h2>FIND A DESIGN</h2>
	    	<form action="<?php echo bloginfo('url')?>/result/" method="get" id="searchDesign">
	    		<div class="row">
	    			<label>HOME TYPE</label>
	    			<select class="select" name="s_types">
	    				<option value="">Select Home Type</option>
	    				<?php
							$categories = get_categories(); 
							//print_r($categories);
							$i = 0;
							  foreach ($categories as $category) {
							  	$i++;
							  	$catname = $category->cat_name;
								$catslug = $category->slug;
						?>
						<option value="<?php echo $catslug;?>"><?php echo $catname;?></option>
						<?php }?>
	    			</select>
	    		</div>
	    		<div class="row range">
	    			<label>HOUSE SIZE (SQM)</label>
	    			<div class="range-container">
	    				<input type="hidden" class="slider-input" name="housesize" value="200" />
	    			</div>
	    		</div>
	    		
	    		<div class="row range r02">
	    			<label>HOUSE WIDTH (METRES)</label>
	    			<div class="range-container">
	    				<input type="hidden" class="slider-input-house" name="housewidth" value="23" />
	    			</div>
	    		</div>
	    		<div class="row brtop">
	    			<label>BEDROOMS</label>
	    			<div class="ckrooms">
	    				<div class="radioStyle">
	    					<input type="radio" value="1" name="bedroom" id="bed01"/><label for="bed01">1</label>
	    				</div>
	    				<div class="radioStyle">
	    					<input type="radio" value="2" name="bedroom" id="bed02"/><label for="bed02">2</label>
	    				</div>
	    				<div class="radioStyle">
	    					<input type="radio" value="3" name="bedroom" id="bed03"/><label for="bed03">3</label>
	    				</div>
	    				<div class="radioStyle">
	    					<input type="radio" value="4" name="bedroom" id="bed04"/><label for="bed04">4</label>
	    				</div>
	    				<div class="radioStyle">
	    					<input type="radio" value="5" name="bedroom" id="bed05"/><label for="bed05">5</label>
	    				</div>
	    			</div>
	    		</div>
	    		<div class="row brtop">
	    			<label>BATHROOMS</label>
	    			<div class="ckrooms">
	    				<div class="radioStyle">
	    					<input type="radio" value="1" name="bathroom" id="bath01"/><label for="bath01">1</label>
	    				</div>
	    				<div class="radioStyle">
	    					<input type="radio" value="2" name="bathroom" id="bath02"/><label for="bath02">2</label>
	    				</div>
	    				<div class="radioStyle">
	    					<input type="radio" value="3" name="bathroom" id="bath03"/><label for="bath03">3</label>
	    				</div>
	    				<div class="radioStyle">
	    					<input type="radio" value="4" name="bathroom" id="bath04"/><label for="bath04">4</label>
	    				</div>
	    				<div class="radioStyle">
	    					<input type="radio" value="5" name="bathroom" id="bath05"/><label for="bath05">5</label>
	    				</div>
	    			</div>
	    		</div>
	    		<div class="row brtop">
	    			<label>GARAGES</label>
	    			<div class="ckrooms">
	    				<div class="radioStyle">
	    					<input type="radio" value="1" name="garage" id="garage01"/><label for="garage01">1</label>
	    				</div>
	    				<div class="radioStyle">
	    					<input type="radio" value="2" name="garage" id="garage02"/><label for="garage02">2</label>
	    				</div>
	    				<div class="radioStyle">
	    					<input type="radio" value="3" name="garage" id="garage03"/><label for="garage03">3</label>
	    				</div>
	    			</div>
	    		</div>
	    		<div class="row brtop">
	    			<input value="SEARCH" name="" type="submit" />
	    		</div>
	    	</form>
	    	
	    	<?php
		    if(!empty($_POST['email']))
	    	{
		    	$data['firstname'] = $_POST['firstname'];
		        $data['surname'] = $_POST['surname'];
		        $data['email'] = $_POST['email'];
		        $data['phone'] = sha1($_POST['phone']);
		        $data['choosedesign'] = $_POST['choosedesign'];
		        $data['comments'] = $_POST['comments'];
				$data['buildin'] = $_POST['buildin'];
		        $data['displayvillage'] = $_POST['displayvillage'];
		        $data['contactyou'] = $_POST['contactyou'];
				$sendmail = contact_form($data['firstname'],$data['surname'], $data['email'],$data['phone'],$data['choosedesign'],$data['comments'],$data['buildin'], $data['displayvillage'], $data['contactyou']);
				if($sendmail){ 
				    $message = "Send message successful";
				}		
				else 
				    $message = 'Current can not send message. Please try again.';
			}
		    ?>
	    	<form action="" method="post" id="presstoJim" class="presstoJimForm">
	    		<h2>ENQUIRY</h2>
	    		<?php
	                if($message != "")
	                {
	                    $alert = $logged == true ? "alert-success" : "alert-danger";
	                    echo '<div class="alert '.$alert.'">'.$message.'</div>';
	                }
	                    
	            ?> 
	    		<div class="enquiryBox">
	    			<div class="line"></div>
	    			<div class="num num01">
	    				<span class="order">1</span>
	    				<span class="desc">Browse Designs</span>
	    			</div>
	    			<div class="num num02">
	    				<span class="order">2</span>
	    				<span class="desc">Select Designs below</span>
	    			</div>
	    			<div class="num num03">
	    				<span class="order">3</span>
	    				<span class="desc">Add your Details and Send Form</span>
	    			</div>
	    		</div>
	    		<p>
	    			<select class="select">
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
	    			<input value="" type="text" name="email" placeholder="Email Address (Required)"/>
	    		</p>
	    		<p>
	    			<input value="" type="text" name="phone" placeholder="Phone (Required)"/>
	    		</p>
    			<div class="selectGroup fullwidth">
    				<select class="select" name="choosedesign">
	    				<option value="0">Choose Design(s)</option>
	    				<?php
							$categories = get_categories(); 
							//print_r($categories);
							$i = 0;
							  foreach ($categories as $category) {
							  	$i++;
							  	$catname = $category->cat_name;
								$catslug = $category->slug;
						?>
						<option value="<?php echo $catname;?>"><?php echo $catname;?></option>
						<?php }?>
	    			</select>
	    			<span class="note">Note: Multiple Selects  by pressing “Ctrl-Key” </span>
	    			<textarea name="comments" placeholder="Comments"></textarea>
	    			<p>
	    				<input value="" type="text" name="buildin" placeholder="Council area will you be building in?"/>
	    			</p>
	    			<p>
	    			<select class="select" name="displayvillage">
	    				<option value="0">Closest Display Village?</option>
	    				<option value="centre locations">Centre Locations</option>
	    				<option value="centre locations">Centre Locations</option>
	    			</select>
	    			</p>
	    			<p>
	    			<select class="select" name="contactyou">>
	    				<option value="0">How should we contact you?</option>
	    				<option value="design">Design</option>
	    				<option value="home">Home</option>
	    			</select>
	    			</p>
    			</div>
	    		<div class="pressToBtn">
	    			<div class="btnWrap">
	    				<span>PRESS TO</span>
	    				<input type="submit" value="Ask Jim"/>
	    			</div>
	    		</div>
	    	</form>
	    </div>