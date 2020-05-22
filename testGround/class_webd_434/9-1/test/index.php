<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html lang="en">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
		<title>KishanW | Atox-D</title>
		<link rel="stylesheet" type="text/css" href="../styles/styleMain.css">
		<link rel="stylesheet" type="text/css" href="../styles/styleMain.css">
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
	</head>
<body>
	<div id="container">
			<div id='header'><h3>Hello there,</h3></div>
			<hr>
			<div id='menu' style='margin: auto auto; width: 600px; display: block'>
			<ul id='a'>
				<li> <a type='submit'id='four' onclick="loadXMLDoc(this.id)"> Home?</a></li>
				<li> <a type='submit'id='one' onclick="loadXMLDoc(this.id)">SlideShow</a></li>
				<li> <a type='submit'id='two' onclick="loadXMLDoc(this.id)">News</a></li>
				<li> <a type='submit'id='three' onclick="loadXMLDoc(this.id)">Maps</a></li>
			</ul>
			</div>
			<div id='pageContent' style="width: 600px; height: auto; padding: 10px; display: block; background: #080808;color: white; margin: auto auto">
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
			</div>
			<hr><br/><br/>
		</div>

</body>
</html>