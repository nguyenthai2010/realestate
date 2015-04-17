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
						<option value="<?php echo $catslug;?>" <?php echo $catslug == $_GET['s_types'] ? 'selected' : ''?>><?php echo $catname;?></option>
						<?php }?>
	    			</select>
	    		</div>
	    		<div class="row range">
	    			<label>HOUSE SIZE (SQM)</label>
	    			<div class="range-container">
	    				<input type="hidden" class="slider-input" name="housesize" value="212,245" />
	    			</div>
	    		</div>
	    		
	    		<div class="row range r02">
	    			<label>HOUSE WIDTH (METRES)</label>
	    			<div class="range-container">
	    				<input type="hidden" class="slider-input-house" name="housewidth" value="12,23" />
	    			</div>
	    		</div>
	    		<div class="row brtop">
	    			<label>BEDROOMS</label>
	    			<div class="ckrooms">
	    				<div class="radioStyle">
	    					<input type="radio" value="1" name="bedroom" id="bed01" <?php echo $_GET['bedroom'] == 1 ? 'checked = "checked"' : ''?>/><label for="bed01">1</label>
	    				</div>
	    				<div class="radioStyle">
	    					<input type="radio" value="2" name="bedroom" id="bed02" <?php echo $_GET['bedroom'] == 2 ? 'checked = "checked"' : ''?>/><label for="bed02">2</label>
	    				</div>
	    				<div class="radioStyle">
	    					<input type="radio" value="3" name="bedroom" id="bed03" <?php echo $_GET['bedroom'] == 3 ? 'checked = "checked"' : ''?>/><label for="bed03">3</label>
	    				</div>
	    				<div class="radioStyle">
	    					<input type="radio" value="4" name="bedroom" id="bed04" <?php echo $_GET['bedroom'] == 4 ? 'checked = "checked"' : ''?>/><label for="bed04">4</label>
	    				</div>
	    				<div class="radioStyle">
	    					<input type="radio" value="5" name="bedroom" id="bed05" <?php echo $_GET['bedroom'] == 5 ? 'checked = "checked"' : ''?>/><label for="bed05">5</label>
	    				</div>
	    			</div>
	    		</div>
	    		<div class="row brtop">
	    			<label>BATHROOMS</label>
	    			<div class="ckrooms">
	    				<div class="radioStyle">
	    					<input type="radio" value="1" name="bathroom" id="bath01" <?php echo $_GET['bathroom'] == 1 ? 'checked = "checked"' : ''?>/><label for="bath01">1</label>
	    				</div>
	    				<div class="radioStyle">
	    					<input type="radio" value="2" name="bathroom" id="bath02" <?php echo $_GET['bathroom'] == 2 ? 'checked = "checked"' : ''?>/><label for="bath02">2</label>
	    				</div>
	    				<div class="radioStyle">
	    					<input type="radio" value="3" name="bathroom" id="bath03" <?php echo $_GET['bathroom'] == 3 ? 'checked = "checked"' : ''?>/><label for="bath03">3</label>
	    				</div>
	    				<div class="radioStyle">
	    					<input type="radio" value="4" name="bathroom" id="bath04" <?php echo $_GET['bathroom'] == 4 ? 'checked = "checked"' : ''?>/><label for="bath04">4</label>
	    				</div>
	    				<div class="radioStyle">
	    					<input type="radio" value="5" name="bathroom" id="bath05" <?php echo $_GET['bathroom'] == 5 ? 'checked = "checked"' : ''?>/><label for="bath05">5</label>
	    				</div>
	    			</div>
	    		</div>
	    		<div class="row brtop">
	    			<label>GARAGES</label>
	    			<div class="ckrooms">
	    				<div class="radioStyle">
	    					<input type="radio" value="1" name="garage" id="garage01" <?php echo $_GET['garage'] == 1 ? 'checked = "checked"' : ''?>/><label for="garage01">1</label>
	    				</div>
	    				<div class="radioStyle">
	    					<input type="radio" value="2" name="garage" id="garage02" <?php echo $_GET['garage'] == 2 ? 'checked = "checked"' : ''?>/><label for="garage02">2</label>
	    				</div>
	    				<div class="radioStyle">
	    					<input type="radio" value="3" name="garage" id="garage03" <?php echo $_GET['garage'] == 3 ? 'checked = "checked"' : ''?>/><label for="garage03">3</label>
	    				</div>
	    			</div>
	    		</div>
	    		<div class="row brtop">
	    			<input value="SEARCH" name="" type="submit" />
	    		</div>
	    	</form>
	    	
	    </div>