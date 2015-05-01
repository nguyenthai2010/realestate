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
	    			<label>HOUSE SIZE <span class="bold pad-left-5"><span id="house_val_1"></span> - <span id="house_val_2"></span> (SQM)</span></label>
	    			<div class="range-container">
	    				<?php
	    					$size_vl = split(',',$_GET['housesize']);
							if($_GET['housesize'] == ''){
								$size_vl[0] = 0;
								$size_vl[1] = 313;
							}
	    				?>
	    				<input type="hidden" class="slider-input" name="housesize" value="<?php echo $size_vl[0];?>,<?php echo $size_vl[1];?>" />
	    			</div>
	    		</div>
	    		
	    		<div class="row range r02">
	    			<label>HOUSE WIDTH <span class="bold pad-left-5"><span id="width_val_1"></span> - <span id="width_val_2"></span> (METRES)</span></label>
	    			<div class="range-container">
	    				<?php
	    					$width_vl = split(',',$_GET['housewidth']);
							if($_GET['housewidth'] == ''){
								$width_vl[0] = 0;
								$width_vl[1] = 36;
							}
	    				?>
	    				<input type="hidden" class="slider-input-house" name="housewidth" value="<?php echo $width_vl[0];?>,<?php echo $width_vl[1];?>" />
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
	    <script>
	    	$(function () {
		    	var house_vl = $('.slider-input').val().split(',');
				$('#house_val_1').html(house_vl[0]);
				$('#house_val_2').html(house_vl[1]);
				var width_vl = $('.slider-input-house').val().split(',');
				$('#width_val_1').html(width_vl[0]);
				$('#width_val_2').html(width_vl[1]);
				$('.slider-input').jRange({
				    from: 0,
				    to: 313,
				    step: 1,
				    scale: [0,'','',313],
				    format: '%s',
				    width: 255,
				    showLabels: false,
				    onstatechange: function(val){
				    	//console.log(val);
				    	var hvl = val.split(',');
				    	$('#house_val_1').html(hvl[0]);
				    	$('#house_val_2').html(hvl[1]);
				    }
				});
				$('.slider-input-house').jRange({
				    from: 0,
				    to: 36,
				    step: 1,
				    scale: [0,'','',36],
				    format: '%s',
				    width: 255,
				    showLabels: false,
				    onstatechange: function(val){
				    	//console.log(val);
				    	var wvl = val.split(',');
				    	$('#width_val_1').html(wvl[0]);
				    	$('#width_val_2').html(wvl[1]);
				    }
				});
			});
	    </script>