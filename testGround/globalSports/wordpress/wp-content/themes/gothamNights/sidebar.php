<div id="container-1">
  <ul>
    <li><a href="#fragment-1"><span>Latest Posts</span></a></li>
    <li><a href="#fragment-2"><span>Categories</span></a></li>
    <li><a href="#fragment-3"><span>Archives</span></a></li>
  </ul>
  <div id="fragment-1">
    <ul class="postList">
      <?php
        query_posts('showposts=5');
		?>
      <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
      <li><a href="<?php the_permalink() ?>"><?php the_title() ?><br />
        <span class="listMeta"><?php the_time('g:i a') ?>, <?php the_time('F') ?> <?php the_time('j') ?>, <?php the_time('Y') ?></span></a></li>
        <?php endwhile; endif; ?>
    </ul>
  </div>
  <div id="fragment-2">
    <ul class="postListSingle">
      <?php wp_list_categories('sort_column=name&hierarchical=0&title_li='); ?>
    </ul>
  </div>
  <div id="fragment-3">
  <ul class="postListSingle">
	<?php wp_get_archives('type=monthly&limit=12'); ?>
</ul>
</div>
</div>