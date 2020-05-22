<?php
	$menuItems = array("Home", "Buying", "Selling", "About Us", "Contact");
	foreach ($menuItems as &$item) {
		$item = str_replace(' ', '', $item);
		$urlFix = "../estuary_plastic/";
		if(strcmp($item, "Home") != 0)
		{
			echo "<a class='mainMenuItems' href='../". $urlFix. $item.  "/'>". $item. "</a>";
		}
		else
		{
			echo "<a class='mainMenuItems' href='/estuary_plastic'>". $item. "</a>";	
		}
	}
?>