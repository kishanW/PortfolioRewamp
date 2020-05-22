<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Atox-D | KishanW</title>
        <link rel="stylesheet" type="text/css" href="style.css" />
		<link rel="stylesheet" type="text/css" href="menu.css" />
		<style>
			#contentRight{
				width: 400px;
				height: auto;
				margin-top: 20px;
				opacity:1;
				background: #fff;
				overflow: auto;
			}
			#right_pannel{
				overflow: auto;
			}
			#hideForm{
				width: 100px;
				height: auto;
				padding: 2px;
				background: green;
				color: white;
				cursor: pointer;
			}
			.formElement
			{
				opacity: 1;
				float: right;
				clear: both;
				background: #e5eaee;
				border: 1px solid #d1dae0;
			}
			.formElement:focus
			{
				background: #b2c1cc;
				border: 1px solid #9eb1be;
			}
		</style>
		
		<!--JS reqs--->
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
    <body>
    	<div id="container">
    		<div class="left_pannel">
    			<div id="logo" onclick="location.href='index.php';"></div>	
				<!---Menu--->
				<?php include_once("Content/menu.php");	?>
				<!---Menu-Finished--->
    		</div>
			<div id="right_pannel" style="background-image: url(images/material/rp_3.png)">
				<div id='contentRight'>
					<div id='errors' style='visibility: hidden'>Some errors were found!<br/> The fields with errors are marked with red background.</div>
					<form method='post' name='guestBookForm' id='guestBookForm' action='controller.php' onsubmit="return checkFields()" style='display: block'>
						*Name
						<input name='name' type='text' class='formElement' id='name' value='Your Name' onfocus="clearThings(this.name)" onblur="resetNeed(this.name)"/><br /><br />
						*Email
						<input name='email' type='text' class='formElement'  id='email'value='Your Email Address' onfocus="clearThings(this.name)" onblur="resetNeed(this.name)"/><br /><br />
						*Subject
						<input name='subject' type='text'  class='formElement' id='subject' value='Message Title' onfocus="clearThings(this.name)" onblur="resetNeed(this.name)"/><br /><br />
						*Message
						<textarea name='message'  class='formElement'  id='message' onfocus="clearThings(this.name)" onblur="resetNeed(this.name)" rows='10' cols='40' >Your Message</textarea><br/><br/>
						<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
						<hr>
						<input type='reset'id='reset' />
						<input type='submit'id='submit' value='Submit'/>
					</form>
					<br/>
					<hr>
					<div onclick='hideForm()' id='hideForm'>Show Comments</div>
					<div id='content' style='display: none'>
						<?php
							include_once('getComments.php');
						?>				
					</div>
				</div>
			</div>			
        </div>
		<div id="footer">
			<hr>
			2010 | www.Atox-D.com | All Rights Reserved.
		</div>
	</body>
</html>
