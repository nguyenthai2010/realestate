<div class="navmenu">
  	<div class="container-fluid">
	  	<div class="nav nav-collapse">
	        <div class="menu"> 
	        	<?php
					$nav = array(
						'theme_location'  => 'menu_top',
						'menu'            => '',
						'container'       => '',
						'container_class' => '',
						'container_id'    => '',
						'menu_class'      => 'sf-menu menusm l_tinynav1',
						'menu_id'         => 'nav',
						'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
					);
					
					wp_nav_menu( $nav );
				?>
	          
	        </div>
	     </div>
      </div>
  </div>