<?php get_header(); ?>
<div id="outer">
  <div class="column01"><?php bloginfo('description'); ?></div>
  <div class="column02">
    <h1><a href="<?php echo get_option('home'); ?>/"><?php bloginfo('name'); ?></a></h1>
  </div>
  <div class="column03">
    <div class="search">
      <?php include (TEMPLATEPATH . "/searchform.php"); ?>
    </div>
  </div>
  <br clear="all" />
  <span class="upperSpacer"></span>
  <div class="postColumn">
    <!-- begin post -->
    <?php if (have_posts()) : ?>
	<?php while (have_posts()) : the_post(); ?>
    <h3><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a></h3>
    <div class="column01">
      <div class="postDetails"> written by <?php the_author() ?><br />
        at <?php the_time('g:i a') ?><br />
        on <?php the_time('F') ?> <?php the_time('j') ?>,  <?php the_time('Y') ?><br />
        in <?php the_category(', ') ?><br />
        <?php comments_popup_link('no comments', '1 comment', '% comments'); ?></div>
    </div>
    <div class="column02 post" id="post-<?php the_ID(); ?>">
      <?php the_content(__('(more...)')); ?>
    </div>
    <br clear="all" />
    <div class="postEnd"></div>
    <!-- end post -->
    <div class="column01">comments</div>
	<div class="column02 post"><?php comments_template(); ?></div>
    <br clear="all" />
    <div class="postEnd"></div>
    <?php endwhile; else: ?>
	<?php endif; ?>
    
    <div class="column01">about this</div>
    <div class="column02 post about"><?php query_posts('pagename=about'); ?>
	<?php if (have_posts()) : ?>
	<?php while (have_posts()) : the_post(); ?>
	<?php the_content(); ?>
	<?php endwhile; ?>
	<?php endif; ?></div>
    <br clear="all" />
    <div class="postEnd"></div>
    <div class="column01">fineprint</div>
    <div class="column02 post fineprint"><a href="<?php echo get_option('home'); ?>/"><?php bloginfo('name'); ?></a> uses <a href="http://www.wordpress.org">Wordpress</a>.<br />
      <a href="http://www.evaneckard.com">"GothamNights"</a> theme brought to you by <a href="http://www.evaneckard.com">EvanEckard</a></div>
    <br clear="all" />
  </div>
  <div class="column03">
    <?php get_sidebar(); ?>
  </div>
  <br clear="all" />
  <div></div>
</div>
</div>
</body>
</html>
