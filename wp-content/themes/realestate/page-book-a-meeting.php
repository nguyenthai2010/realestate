<?php
	get_header();
?>
  
  <div id="content" class="contactPage bgGray">
    <div class="container pad40">
    	<?php
			$idContact = get_page_id_by_slug('contact');
			$contact = get_post($idContact);
			$contact_item = get_field('contact_item'); 
			//print_r($contact_item);
			$count = count($contact_item);
		?>
    	<div class="span8">
            <h2><span>Book a Meeting</span></h2>
            <div class="clr"></div>
            <p>&nbsp;</p>
            <p><img class="alignnone size-full wp-image-414" src="http://realestate.taichinh-24h.com/wp-content/uploads/2015/03/Home-Visit.jpg" alt="Home Visit" width="700" height="200"></p>
            <p><a href="http://realestate.taichinh-24h.com/wp-content/uploads/2015/03/homesdirectlogo.gif"><br><img class="alignnone size-full wp-image-415" src="http://realestate.taichinh-24h.com/wp-content/uploads/2015/03/homesdirectlogo.gif" alt="homesdirectlogo" width="310" height="30"></a></p>
            <p><br>Today's fast pace of life often means that many people don't have the time to spend hunting around for their new home or choosing a new home design. <span class="notranslate">If that sounds familiar you might be interested to know more about Masterton HOME DIRECT.</span></p>
            <p><span class="notranslate">Many people find it difficult to make the time to visit one of our display centres – so how would it be if one of our display centres came to you?</span></p>
            <p><span class="notranslate">Masterton Homes have experienced design and build sales consultants who will be happy to visit you at home (or at the block you're considering developing).</span></p>
            <p><span class="notranslate">They'll discuss your requirements and help guide you through the wide range of designs available to you.</span> <span class="notranslate">Using the very latest presentation tools, our Home Direct consultants will discuss and demonstrate every feature of our latest designs and go over floor plans and options with you.<br><br></span></p>
            <p><span class="notranslate"><strong>Contact our Home Direct Consultants</strong></span></p>
            <p><a href="http://realestate.taichinh-24h.com/wp-content/uploads/2015/03/Michael_HV.jpg"><img class="alignnone size-full wp-image-413" src="http://realestate.taichinh-24h.com/wp-content/uploads/2015/03/Michael_HV.jpg" alt="Michael_HV" width="350" height="200"></a></p>



            <div class="clr"></div>
	    </div>
        <?php get_template_part('tpl','contact')?>
    </div>
  </div>
  <!-- #content--> 
  
</div>
<!-- #wrapper -->
<?php get_footer(); ?>
