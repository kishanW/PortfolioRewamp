<?php
/*
Template Name: Archives
*/
?>

<?php get_header(); ?>

<div id="content" class="widecolumn">
<div class="posttop">
<div class="postheader">
<h2>Archives by Month:</h2>
</div><!--postheader-->
	<ul>
		<?php wp_get_archives('type=monthly'); ?>
	</ul>
<div class="postheader">
<h2>Archives by Subject:</h2>
</div><!--postheader-->
	<ul>
		 <?php wp_list_categories(); ?>
	</ul>
</div>
</div>

<?php get_footer(); ?>
