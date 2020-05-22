<script type="text/javascript">
jQuery(document).ready(function() {
    jQuery('#mycarousel').jcarousel({
	    animation: 1000,
    	wrap: 'circular'
    });
});
</script>

<div class="slider">
<?php $slide_count = get_option('xand_slide_count'); ?>
<?php $slide_cat = get_option('xand_slide_cat');?>
<ul id="mycarousel" class="jcarousel-skin-tango">
	<?php $custom_query = new WP_Query('category_name='.$slide_cat.'&showposts='.$slide_count.'');
	while($custom_query->have_posts()) : $custom_query->the_post(); ?>
	
	<li>
		<?php
		if ( has_post_thumbnail() ) { ?>
		<a href="<?php the_permalink() ?>"><img class="panel" src="<?php bloginfo('stylesheet_directory'); ?>/timthumb.php?src=<?php get_image_url(); ?>&amp;h=100&amp;w=150&amp;zc=1" alt=""/></a>
		<?php } else { ?>
		<a href="<?php the_permalink() ?>"><img class="panel" src="<?php bloginfo('stylesheet_directory'); ?>/timthumb.php?src=<?php bloginfo('template_directory'); ?>/images/dummy.jpg&amp;h=100&amp;w=150&amp;zc=1 " alt="" /></a>
		<?php } ?>
	</li>

	<?php endwhile; ?>
</ul>
</div>