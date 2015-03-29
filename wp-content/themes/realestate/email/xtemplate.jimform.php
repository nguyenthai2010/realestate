<?php
    //session_start();
    //echo session_id();
    function 	jim_form($firstname, $surname, $email, $phone, $choosedesign, $comments, $buildin, $displayvillage , $contactyou){
                include_once	'xtemplate.class.php';
                $header   	= 'Content-type: text/html; charset=utf-8\r\n';				
                $title 		= 'User Contact';
                $contact_email = get_option('admin_email');
                $contact_name = get_bloginfo('name');
				//echo $contact_email;
                $date = date('d-m-Y');
                $parseTemplate	=	new XTemplate('xtemplate.register.html');
                $parseTemplate->assign('firstname',$name);
                $parseTemplate->assign('date',$date);
                $parseTemplate->assign('surname',$surname);                
                $parseTemplate->assign('email',$email);	
                $parseTemplate->assign('phone',$phone);
				$parseTemplate->assign('choosedesign',$choosedesign);
				$parseTemplate->assign('comments',$comments);
				$parseTemplate->assign('buildin',$buildin);
				$parseTemplate->assign('displayvillage',$displayvillage);
				$parseTemplate->assign('contactyou',$contactyou);
				
                $parseTemplate->parse('main');	
                return wp_mail($contact_email, $title, $parseTemplate->text('main'), $title);
            }
