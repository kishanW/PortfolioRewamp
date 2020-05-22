<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html lang="en">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
		<title>KishanW | Atox-D</title>
		<link rel="stylesheet" type="text/css" href="styles/styleMain.css">
		<link rel="stylesheet" type="text/css" href="stylex.css">

		<script type="text/javascript" src="jquery-1.2.6.min.js"></script>
		<script type="text/javascript" src="jquery.bgpos.js"></script>	
		<script type="text/javascript" src="animate.js"></script>	
				
		<!---JQuery requiremnts--->
		<link href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/themes/base/jquery-ui.css" rel="stylesheet" type="text/css"/>
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.5/jquery.min.js"></script>
		<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/jquery-ui.min.js"></script>
				
		<!---Menu Styles--->
		<style type="text/css">	
			ul {list-style:none;margin:0;padding:0;}
			li {float:left;width:100px;margin:0;padding:0;text-align:center;}
			li a {display:block;padding:5px 10px;height:100%;color:#FFF;text-decoration:none;border-right:1px solid #FFF;}
			li a {background:url(bg2.jpg) repeat 0 0;}
			li a:hover, li a:focus, li a:active {background-position:-150px 0;}
			#a a {background:url(bg.jpg) repeat -20px 35px;}
			#container #xx{background: #191919;padding: 10px;border: 1px dotted #2a2a2a; font-size: 11px}
			#footerLink{text-decoration: none; color: inherit; color: #191919;}	
			#footerLink:hover{text-decoration: underline;}			
		</style>

		<script type="text/javascript" src="jquery-1.2.6.min.js"></script>
		<script type="text/javascript" src="jquery.bgpos.js"></script>

		<script type="text/javascript">
			$(function(){
				$('#a a')
					.css( {backgroundPosition: "-20px 35px"} )
					.mouseover(function(){
						$(this).stop().animate({backgroundPosition:"(-20px 94px)"}, {duration:500})
					})
					.mouseout(function(){
						$(this).stop().animate({backgroundPosition:"(40px 35px)"}, {duration:200, complete:function(){
							$(this).css({backgroundPosition: "-20px 35px"})
						}})
					})
			});
		</script>
		<!---AJAX requirements--->
		<script type="text/javascript">
		function loadXMLDoc(navSelect)
		{
		
		var xmlhttp;
		var navSelect=navSelect;
		if (window.XMLHttpRequest)
		  {// code for IE7+, Firefox, Chrome, Opera, Safari
		  xmlhttp=new XMLHttpRequest();
		  }
		else
		  {// code for IE6, IE5
		  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
		  }
		xmlhttp.onreadystatechange=function()
		  {
		  if (xmlhttp.readyState==4 && xmlhttp.status==200)
			{
			document.getElementById("pageContent").innerHTML=xmlhttp.responseText;
			}
		  }
		xmlhttp.open("POST","controller.php",true);
		xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
		xmlhttp.send("nav="+navSelect);
		//alert("nav="+navSelect);
		}
		</script><!--Ajax scripts finished--->
	</head>
<body>
	<div id="container">
			<div id='header'><h2>Hello there,</h2></div>
			<hr>
			<div id='menu'>
				<ul id='a' style="width: 500px; display: inline; margin: auto auto">
					<li> <a type='submit'id='four' href='index.php'"> Home</a></li>
					<li> <a type='submit'id='one' onclick="loadXMLDoc(this.id)">SlideShow</a></li>
					<li> <a type='submit'id='two' onclick="loadXMLDoc(this.id)">News</a></li>
					<li> <a type='submit'id='three' onclick="loadXMLDoc(this.id)">Maps</a></li>
				</ul>			
			</div>
			<br/>			
			<div id='pageContent' style="width: 600px; height: auto; padding: 10px; display: block; background: #080808;color: white; margin: auto auto">
				<div id='xx' class='rounded-corners' style='text-align: left'>
					This is my page. Please use the menu bar to reach all the other pages or use the search option to perform a Google search.
					<br/><br/>
					Site Admin, <br/>
					Thank you.<br/>
					[
					<?php 
						$today=date('d-M-Y');
						echo $today;
					?>
					]
				</div>
				<br/>
				<div id="cse" style="width: 550px; height: 400px; overflow: auto; display: block;margin: auto auto">Loading</div>
				<script src="http://www.google.com/jsapi" type="text/javascript"></script>
				<script type="text/javascript"> 
				  google.load('search', '1', {language : 'en', style : google.loader.themes.SHINY});
				  google.setOnLoadCallback(function() {
					var customSearchOptions = {};  var customSearchControl = new google.search.CustomSearchControl(
					  '003844540170699584049:rhchxa_6d6y', customSearchOptions);
					customSearchControl.setResultSetSize(google.search.Search.FILTERED_CSE_RESULTSET);
					customSearchControl.draw('cse');
				  }, true);
				
				</script>				
					<div id='xxx' class='rounded-corners'>
						References <hr>
						www.snook.ca<br/>						
						www.0to255.com<br/> 
						wwww.jquery.com<br/> 
						code.google.com
					</div>
			</div>
			<br/><br/>
			
			<p id='xx' style='font-size: 10px; text-align: center; border: none'>
			<?php 
				$today=date('Y');
				echo "Kishan Wanigasghe | ". $today. "&#169;";
			?>
			 | <a href='index.php' id='footerLink'>Home</a>
			</p>
		</div>

</body>
</html>