<?php get_header(); ?>
<div id="casing">
<div id="content" >
		<?php if (have_posts()) : ?>
			<h2 class="feat-title">
			<?php
				$mySearch =& new WP_Query("s=$s & showposts=-1");
				$num = $mySearch->post_count;
				echo $num.' search results for '; the_search_query();
			?> in <?php  get_num_queries(); ?> <?php timer_stop(1); ?> seconds.
			</h1>


<?php while (have_posts()) : the_post(); ?>
		
<div class="post clearfix" id="post-<?php the_ID(); ?>">

<div class="leftcover">
<span class="arrow"></span>
	<div class="datebox">
		<div class='date'><?php the_time('d'); ?></div>
		<div class='month'><?php the_time('F'); ?></div>
	</div>

</div>

<div class="rightcover">
	<div class="title">
		<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a></h2>
	</div>
	<div class="entry">
	<?php wpe_excerpt('wpe_excerptlength_index', ''); ?>
	<div class="clear"></div>
	</div>
</div>

</div>
<?php endwhile; ?>

<?php getpagenavi(); ?>

<?php else : ?>

	<h1 class="title">Not Found</h1>
	<p>Sorry, but you are looking for something that isn't here.</p>

<?php endif; ?>

</div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>