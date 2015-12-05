<?php

	/**	top-bar.php
	
		this is the top bar section for the --unlogged guest
		this is called by guest_template.php which is called from 'setting.php'
	
		@params get_notifications [data] = $_notification
		@package lynxous
		
		created by LiGhT.. 12.4.2015
	
	*/

?>

			<!-- TOP BAR SECTION -->
			<section id="top_bar_section_logged"><!-- this needs to be change here and in [ABSPATH . lynx.css] to unlogged -->
				<div class="top_bar_container">
					<div class="top_bar_logo_container"></div>
					<div class="top_bar_container_right">notifications</div>
				</div>
			</section>