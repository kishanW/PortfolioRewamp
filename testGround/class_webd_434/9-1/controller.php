<?php
	$nav=Trim(stripslashes($_POST['nav'])); 
	if(strcmp($nav, "one")==0){
		/*SLIDESHOW*/
		echo "<object type='text/html' data='http://www.flickr.com/slideShow/index.gne?group_id=&user_id=36587311@N08&set_id=&tags=vintage' width='400' height='400'></object><br/>";
	}
	if(strcmp($nav, "two")==0){
		/*NEWS*/
		include_once('pages/GFeed.php');
	}
	if(strcmp($nav, "three")==0){
		/*MAP*/
		echo "<iframe width='400' height='500' frameborder='0' scrolling='no' marginheight='0' marginwidth='0' src='http://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=franklin+university&amp;aq=&amp;sll=37.0625,-95.677068&amp;sspn=35.768112,86.572266&amp;ie=UTF8&amp;hq=franklin+university&amp;t=m&amp;cid=16925378908069699585&amp;hnear=&amp;ll=39.958504,-82.991152&amp;spn=0.026316,0.034246&amp;z=14&amp;iwloc=A&amp;output=embed'></iframe><br /><small><a href='http://maps.google.com/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q=franklin+university&amp;aq=&amp;sll=37.0625,-95.677068&amp;sspn=35.768112,86.572266&amp;ie=UTF8&amp;hq=franklin+university&amp;t=m&amp;cid=16925378908069699585&amp;hnear=&amp;ll=39.958504,-82.991152&amp;spn=0.026316,0.034246&amp;z=14&amp;iwloc=A' style='color:#6e6e6e;text-align:left'>View Larger Map</a></small>";
	}
	if(strcmp($nav, "four")==0){
		/*HOME--nothing here*/
		
	}
	//echo "test good";
?>