<div class="left">
<?php include (TEMPLATEPATH . '/searchform.php'); ?>
<div class="clear"></div>

<!-- 125px banners -->	
<?php include (TEMPLATEPATH . '/sponsors.php'); ?>	

<!-- Sidebar widgets -->
<div class="sidebar">
<ul>
	<?php if ( function_exists('dynamic_sidebar') && dynamic_sidebar('Sidebar') ) : else : ?>
	<?php endif; ?>
</ul>
</div>

</div>