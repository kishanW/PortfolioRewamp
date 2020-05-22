==================================================================

	Theme Name: Grass Roots
	Theme URI: www.wellmedicated.com/themes/grassroots
	Version: 1.0
	Author: Andrew Lindstrom
	Author URI: www.andrewlindstrom.com

==================================================================


   *** INSTALLATION ***
   - Unzip all the contents of the zip file.
   - Upload the "grassroots" folder to \wp-content\themes\
   - Log into your admin panel and select "Design"
   - Click the "grassroots" theme screenshot and click "activate"


   That's it!  This theme was designed to work out of the box.
   GrassRoots is free to use, but please leave the links in the 
   footer.php file in tact if you are going to use this theme.


   If you want to customize it further, continue reading.


   *** REPLACING HEADER TEXT WITH AN IMAGE ***
   - Load the included logo.psd with photoshop.
   - Change the type and add your logo as need-be without resizing
   - Save file as: \wp-content\themes\grassroots\images\logo.png
   - Load header.php and look for: <!--HEADER IMAGE BELOW HERE-->
   - Replace: <?php include (TEMPLATEPATH . "/header-text.php"); ?>
   - With: <?php include (TEMPLATEPATH . "/header-image.php"); ?>
   - Save.


   *** REPLACING RSS INFO WITH FEEDBURNER/SUBSCRIBE VIA EMAIL ***
   - Load rss-feedburner.php
   - Modify FEEDBURNER-RSS-FEED-ADDRESS-HERE with your entries feed
   - Modify FEEDBURNER-ID-HERE with your feedburner id and SAVE
   - Load sidebar.php and look for: <!-- *** RSS FEED INFO BELOW ***  -->
   - Replace: <?php include (TEMPLATEPATH . "/rss-default.php"); ?>
   - With: <?php include (TEMPLATEPATH . "/rss-feedburner.php"); ?>
   - Save.
   

   Instructions for activating Feedburner's Subscribe via Email are
   available here: 
   - www.netprofitstoday.com/blog/how-to-find-your-feedburner-id/

