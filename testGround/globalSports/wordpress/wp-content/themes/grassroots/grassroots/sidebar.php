		<div id="sidebar-1">
		
			<div class="sidebarbox">
				<div id="searchetc">
					<p>Looking for Something?</p>
					<?php include (TEMPLATEPATH . '/searchformtop.php'); ?>
				</div><!--searchetc-->
			</div><!--searchetc-->
		
			<ul>
				<?php 	/* Widgetized sidebar, if you have the plugin installed. */
					if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar(1) ) : ?>		
						<li><h2 class="widgettitle">Change This Sidebar</h2>
						<p class="textwidget">This sidebar is easily and completely editable with widgets.</p>  <p class="textwidget">Log into your admin panel, click on "Design" followed by "Widgets".  From there you can arrange this sidebar by draging the options into their respective places on this sidebar.</p>  <p class="textwidget">More information on using widgets can be found <a href="http://automattic.com/code/widgets/use/">here</a>.</p><p class="textwidget">(This note will not be displayed once you have widget-ized this sidebar)</p>
						</li>
				<?php endif; ?>
			</ul>
		</div>
	
		<div id="sidebar-2">
			<div class="sidebarbox">
				<div id="feed">Subscribe:<br />
		
		<!-- *** RSS FEED INFO BELOW ***  -->
		
		<?php include (TEMPLATEPATH . "/rss-default.php"); ?>
		
		<!-- *** RSS FEED INFO ABOVE *** -->
		
		</div>
	</div>
		
		<ul>
			<?php 	/* Widgetized sidebar, if you have the plugin installed. */
					if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar(2) ) : ?>
						<li><h2 class="widgettitle">Change This Sidebar</h2>
							<p class="textwidget">This sidebar is easily and completely editable with widgets.</p>  <p class="textwidget">Log into your admin panel, click on "Design" followed by "Widgets".  From there you can arrange this sidebar by draging the options into their respective places on this sidebar.</p>  <p class="textwidget">More information on using widgets can be found <a href="http://automattic.com/code/widgets/use/">here</a>.</p><p class="textwidget">(This note will not be displayed once you have widget-ized this sidebar)</p>
						</li>
			<?php endif; ?>
		</ul>
	</div>

