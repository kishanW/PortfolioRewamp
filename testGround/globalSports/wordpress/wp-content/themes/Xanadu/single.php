<?php get_header(); ?>
<div id="casing">
<div id="content" >

<?php if (have_posts()) : ?>
<?php while (have_posts()) : the_post(); ?>

<div class="post clearfix" id="post-<?php the_ID(); ?>">

<div class="leftcover">
<span class="arrow"></span>
	<div class="datebox">
		<div class='date'><?php the_time('d'); ?></div>
		<div class='month'><?php the_time('F'); ?></div>
	</div>
	<div class="lavatar clearfix">
		<?php echo get_avatar( get_the_author_email(), '56' ); ?>
		<span class="author"><?php the_author_posts_link(); ?></span>
	</div>
	<div class="combox">
		<div class="coms"><?php comments_popup_link('0', '1', '%'); ?></div>
		<span>Comments</span>
	</div>
</div>

<div class="rightcover">
	<div class="title">
		<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a></h2>
	</div>
	<div class="entry">
	<?php the_content('Read the rest of this entry &raquo;'); ?>
	<div class="clear"></div>
	<?php wp_link_pages(array('before' => '<p><strong>Pages: </strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>
	</div>
	<div class="singleinfo">
		<span class="category">Categories: <?php the_category(', '); ?> </span>
	</div>
</div>

</div>

<?php comments_template(); ?>
<?php endwhile; else: ?>

		<h1 class="title">Not Found</h1>
		<p>I'm Sorry,  you are looking for something that is not here. Try a different search.</p>

<?php endif; ?>

</div>

<?php get_sidebar(); ?>
<?php get_footer(); ?>