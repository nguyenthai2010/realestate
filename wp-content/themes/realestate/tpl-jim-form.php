<div class="span4 sidebarright">
		<div class="sidebar">
    	<?php
	    if(!empty($_POST['email']))
    	{
	    	$data['firstname'] = $_POST['firstname'];
	        //$data['surname'] = $_POST['surname'];
	        $data['email'] = $_POST['email'];
	        $data['phone'] = sha1($_POST['phone']);
	        //$data['choosedesign'] = $_POST['choosedesign'];
	        $data['comments'] = $_POST['comments'];
			//$data['buildin'] = $_POST['buildin'];
	        //$data['displayvillage'] = $_POST['displayvillage'];
	       // $data['contactyou'] = $_POST['contactyou'];
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
    		
    		<p>
    			<input value="" type="text" name="firstname" placeholder="First Name (Required)"/>
    		</p>
    		
    		<p>
    			<input value="" type="text" name="email" placeholder="Email Address (Required)"/>
    		</p>
    		<p>
    			<input value="" type="text" name="phone" placeholder="Phone (Required)"/>
    		</p>
			<div class="selectGroup fullwidth">
				
    			<textarea name="comments" placeholder="Comments"></textarea>
    			
			</div>
    		<div class="pressToBtn">
    			<div class="btnWrap">
    				<span>PRESS TO</span>
    				<input type="submit" value="Ask Jim"/>
    			</div>
    		</div>
    	</form>
    </div>	    