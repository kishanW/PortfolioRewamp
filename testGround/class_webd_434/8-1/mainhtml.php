<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
		<title>KishanW | Atox-D</title>
		<link rel="stylesheet" type="text/css" href="styleMain.css">
		<script type="text/javascript" src="general.js"></script>		
        <script type="text/javascript" src="controller.js"></script> 
		
		<!---JQuery requiremnts--->
		<link href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/themes/base/jquery-ui.css" rel="stylesheet" type="text/css"/>
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.5/jquery.min.js"></script>
		<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/jquery-ui.min.js"></script>
		
		<!---AJAX requirements--->
		<script type="text/javascript">
			dojo.addOnLoad(function(event){			  
			  dojo.connect(dojo.byId('submit'), 'onclick', function(event){
				var rtrn=checkFields();
				if(rtrn==true){
					dojo.stopEvent(event);
					dojo.xhrPost({
					  form: 'guestBookForm',
					  handleAs: 'json',
					  load: function(data) {
						console.log(data);					
						var msg = data.message;
						dojo.byId('content').innerHTML = msg;
					  },
					  error: function(error) {
						console.log(error);
					  }
					}) // xhrPost()
				}//Validation by CheckFields finished.				
			  }); // connect()
			}); // addOnLoad()
		</script><!--Ajax scripts finished--->
		 <script>
			
		  </script>
	</head>
	<style type="text/css">
		
	</style>
	<body>
		<div id="container">
			<div id='header'><h3>Say hello</h3></div>
			<hr>
			<div id='adminLogin' onclick='bounceThis(this.id)'></div>
			<div id='errors' style='visibility: hidden'>Some errors were found!<br/> The fields with errors are marked with red background.</div>
			<form method='post' name='guestBookForm' id='guestBookForm' action='controller.php' onsubmit="return checkFields()">
				*Name<br />
				<input name='name' type='text' class='rounded-corners' id='name' value='Your Name' onfocus="clearThings(this.name)" onblur="resetNeed(this.name)"/><br />
				*Email<br />
				<input name='email' type='text' class='rounded-corners'  id='email'value='Your Email Address' onfocus="clearThings(this.name)" onblur="resetNeed(this.name)"/><br />
				*Subject<br />
				<input name='subject' type='text'  class='rounded-corners' id='subject' value='Message Title' onfocus="clearThings(this.name)" onblur="resetNeed(this.name)"/><br />
				*Message<br />
				<textarea name='message'  class='rounded-corners'  id='message' onfocus="clearThings(this.name)" onblur="resetNeed(this.name)" rows='15' cols='40' >Your Message</textarea><br/>
				<input type='reset'id='reset' />
				<input type='submit'id='submit' value='Submit'/>
			</form>
			<br/>
			<hr>
			<h3>Previous Comments</h3>
			<div id='content'>
				<?php
					include_once('getComments.php');
				?>				
			</div>
		</div>
		
	</body>
</html>
