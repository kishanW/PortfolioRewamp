<?php get_header(); ?>

	<div id="content" class="narrowcolumn">

	<?php if (have_posts()) : ?>

		<h2 class="pagetitle">Search Results</h2>


		<?php while (have_posts()) : the_post(); ?>

			<div class="post">
			<div class="posttop">
					<div class="postheader">
						<div class="cal">
							<span class="month"><?php the_time('M') ?></span>
							<span class="day"><?php the_time('d') ?></span>
						</div><!--cal-->
				<h2 id="post-<?php the_ID(); ?>"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
								<small class="subheader">Posted by <?php the_author() ?> in <?php the_category(', ') ?></small>
					</div><!--postheader-->

				<div class="entry">
					<?php the_excerpt() ?>
				</div>
				</div><!--posttop-->

<p class="postmetadata">Posted in <?php the_category(', ') ?> &middot; <?php edit_post_link('Edit', '', ' &middot; '); ?><?php the_tags('Tags: ', ', ', ' &middot; '); ?><?php comments_popup_link('No Comments &#187;', '1 Comment &#187;', '% Comments &#187;'); ?></p>
			</div>

		<?php endwhile; ?>

		<div class="navigation">
			<div class="alignleft"><?php next_posts_link('&laquo; Older Entries') ?></div>
			<div class="alignright"><?php previous_posts_link('Newer Entries &raquo;') ?></div>
		</div>

	<?php else : ?>

		<h2 class="center">No posts found. Try a different search?</h2>
		<?php include (TEMPLATEPATH . '/searchform.php'); ?>

	<?php endif; ?>

	</div>

<?php get_sidebar(); ?>

<?php get_footer(); ?>