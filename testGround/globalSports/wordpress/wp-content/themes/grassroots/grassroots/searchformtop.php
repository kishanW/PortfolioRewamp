<form method="get" id="searchform" action="<?php bloginfo('url'); ?>/">
	<div id="searchbox">
		<input type="text" value="Search..." onfocus="if (this.value == 'Search...') {this.value = '';}" onblur="if (this.value == '') {this.value = 'Search...';}" name="s" id="s" />
		<input type="image" src="<?php bloginfo('stylesheet_directory'); ?>/images/searchgo.gif" id="searchsubmit" alt="Search" title="Search" />
	</div>
</form>
