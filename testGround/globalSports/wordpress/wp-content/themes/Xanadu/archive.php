<?php get_header(); ?>
<div id="casing">
<div id="content" >
		<?php if (have_posts()) : ?>

		 <?php $post = $posts[0]; // Hack. Set $post so that the_date() works. ?>
<?php /* If this is a category archive */ if (is_category()) { ?>
		<h2 class="feat-title">Archive for the &#8216;<?php echo single_cat_title(); ?>&#8217; Category</h2>

 	  <?php /* If this is a daily archive */ } elseif (is_day()) { ?>
		<h2 class="feat-title">Archive for <?php the_time('F jS, Y'); ?></h2>

	 <?php /* If this is a monthly archive */ } elseif (is_month()) { ?>
		<h2 class="feat-title">Archive for <?php the_time('F, Y'); ?></h2>

		<?php /* If this is a yearly archive */ } elseif (is_year()) { ?>
		<h2 class="feat-title">Archive for <?php the_time('Y'); ?></h2>

	  <?php /* If this is an author archive */ } elseif (is_author()) { ?>
		<h2 class="feat-title">Author Archive</h2>

		<?php /* If this is a paged archive */ } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
		<h2 class="feat-title">Blog Archives</h2>
		<?php } ?>




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
	<?php
		if ( has_post_thumbnail() ) { ?>
		
		<a href="<?php the_permalink() ?>"><img class="postimg" src="<?php bloginfo('stylesheet_directory'); ?>/timthumb.php?src=<?php get_image_url(); ?>&amp;h=250&amp;w=510&amp;zc=1" alt=""/></a>
		<?php } else { ?>
		<a href="<?php the_permalink() ?>"><img class="postimg" src="<?php bloginfo('stylesheet_directory'); ?>/timthumb.php?src=<?php bloginfo('template_directory'); ?>/images/dummy.jpg&amp;h=250&amp;w=510&amp;zc=1" alt="" /></a>
		<?php } ?>
	<?php wpe_excerpt('wpe_excerptlength_index', ''); ?>
	<div class="clear"></div>
	</div>
	<div class="singleinfo">
		<span class="category">Categories: <?php the_category(', '); ?> </span>
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