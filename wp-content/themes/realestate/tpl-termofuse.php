<div class="post_content">
	<?php
		$page_term = get_post(get_page_id_by_slug('terms-of-use'));
		echo $page_term->post_content;
	?>
	
</div>
