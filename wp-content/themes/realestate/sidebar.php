<div class="sidebar">
	    	<h2>FIND A DESIGN</h2>
	    	<form action="<?php echo bloginfo('url')?>/result/" method="get" id="searchDesign">
	    		<div class="row">
	    			<label>HOME TYPE</label>
	    			<select class="select" name="s_types">
	    				<option value="">Select Home Type</option>
	    				<option value="medium">Medium</option>
	    				<option value="large">Large</option>
	    			</select>
	    		</div>
	    		<div class="row range">
	    			<label>HOUSE SIZE (SQM)</label>
	    			<div class="range-container">
	    				<input type="hidden" class="slider-input" value="200" />
	    			</div>
	    		</div>
	    		
	    		<div class="row range r02">
	    			<label>HOUSE WIDTH (METRES)</label>
	    			<div class="range-container">
	    				<input type="hidden" class="slider-input-house" value="23" />
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
	    	<form action="" method="" id="presstoJim" class="presstoJimForm">
	    		<h2>ENQUIRY</h2>
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
	    			<input value="" type="text" name="f_firstname" placeholder="First Name (Required)"/>
	    		</p>
	    		<p>
	    			<input value="" type="text" name="f_surname" placeholder="Surname"/>
	    		</p>
	    		<p>
	    			<input value="" type="text" name="f_email" placeholder="Email Address (Required)"/>
	    		</p>
	    		<p>
	    			<input value="" type="text" name="f_phone" placeholder="Phone (Required)"/>
	    		</p>
    			<div class="selectGroup fullwidth">
    				<select class="select" name="choosedesign">
	    				<option value="">Choose Design(s)</option>
	    				<option value="">Closest Display Village?</option>
	    			</select>
	    			<span class="note">Note: Multiple Selects  by pressing “Ctrl-Key” </span>
	    			<textarea name="textcomments" name="textcomments" placeholder="Comments"></textarea>
	    			<p>
	    				<input value="" type="text" name="buildin" placeholder="Council area will you be building in?"/>
	    			</p>
	    			<p>
	    			<select class="select" name="choosevillage">
	    				<option value="">Closest Display Village?</option>
	    				<option value="">Closest Display Village?</option>
	    			</select>
	    			</p>
	    			<p>
	    			<select class="select" name="contactyou">>
	    				<option value="">How should we contact you?</option>
	    				<option value="">How should we contact you?</option>
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