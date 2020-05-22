<form method="get" id="searchform" action="<?php bloginfo('url'); ?>/">
<input type="text" value="<?php the_search_query(); ?>" name="s" id="s" class="txtField" />
<input type="submit" id="searchsubmit" class="btnSearch" value="Search &raquo;" />
</form>