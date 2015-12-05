<?php

	/**	content-section.php
	
		this is the main content template for topics, which is populated by get_topic($_topic_name) and returns a json or XML to populate it
		A Durty Mess that needs clean-up; it also needs the functions built to parse the $_topic object and a mechanism to place the content
		
		@params $_topic
		@package lynxous
		
		created by LiGhT.. 12.4 2015
	
	*/

?>	
	
			<!-- CONTENT SECTION -->
			<section id="content_section">
				<div id="left_aside_container">
						<div class="topic_box">
							<div class="topic_icon_container">
								<div class="topic_icon"></div>
							</div><!-- should create a default "invitation" to add an icon, just in case MOVE TO TODO - --> 
							<div class="topic_title_container">
								<div class="topic_title"><h3 class="title">Topic Title</h2></div>
							</div>
						</div>
					<aside class="left_aside">
					
						<!-- LEFT ASIDE BOXES-->
						<div id="location_container"><div class="location_box">location:</div></div>
						<div id="map_box"></div>
						<div id="short_discription_box"></div>
						<div id="hot_links_box"></div>
					</aside>
				</div>
				<div id="center_content_container">
					<div class="center_content">
					<div id="main"><div class="oi"><h2 class="screenreader-only">Main</h2>

     <ul class="tabs">
      <li class="selected"><h3 class="tab-label">general info</h3>
       <div id="section1" class="tab-content"><div class="oi2">
        
        <p>This is the message of tab 1. More message...                               I added more to this message to show how the tab automatically displays scrollbars when it exceeds the height and/or width of the tab container. Most of this text is not shown in the book to save room in the example. Note that Internet Explorer 6 has a bug that requires you to fix the width of this content. Also note that you add margins, border, and padding to the outside-in box rather than the tab so that the tab's scrollbar is located in the proper place.
        </p></div></div></li>

      <li><h3 class="tab-label">discussion</h3>
       <div id="section2" class="tab-content"><div class="oi2">
        <p>This is the message of tab 2.</p></div></div></li>

      <li><h3 class="tab-label">activities</h3>
       <div id="section2" class="tab-content"><div class="oi2">
        <p>This is the message of tab 3.</p></div></div></li>
		
		      <li><h3 class="tab-label">resources</h3>
       <div id="section2" class="tab-content"><div class="oi2">
        <p>This is the message of tab 3.</p></div></div></li>

     </ul></div></div>
					</div>
				</div>
				<div class="right_aside_container">
					<aside class="right_aside">
						<div id="ads_box"></div>
						<div id="whose_online"></div>
					</aside>
				</div>
			</section>