<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Atox-D | Contact Me</title>
        <link rel="stylesheet" type="text/css" href="style.css" />
		<link rel="stylesheet" type="text/css" href="menu.css" />
		<script type="text/javascript" src="general.js"></script>
		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>

		<script> 
			// wait for the DOM to be loaded 
			$(document).ready(function(){
				$("#contactForm").submit(function(){ 
					$.ajax({  
						type: "POST",  
						url: "sendMail.php",  
						data: $("#contactForm").serialize(),  
						dataType: "json",  
						
						success: function(msg){  
							document.getElementById('status').style.display="block";
							//$('div#status').html('Message Sent Succesfully');
							document.getElementById('status').innerHTML=msg.message;
							document.contactForm.reset();
						},  
						error: function(){  
							document.getElementById('status').style.display="block";
							$('div#status').html('Message Sending Failed. Please Try Again.');
							//document.getElementById('status').innerHTML="Message Sending Failed. Please Try Again.";
						}
					});  		  
					//make sure the form doesn't post  
					return false;  		  
				});  		  
			});
		</script> 
		<style>
			#contactForm
			{
				margin: 10px auto auto auto;
				width: 300px;
				height: auto;
				padding: 10px;
				border: 0px solid white;
				background: #fff;
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
			#formBoxComment
			{
				height: 100px;
			}
			#mapEmb
			{
				margin: 10px auto auto auto;
				clear: both;
				width: 350px;
				height: auto;
				display:block;
				background: #fff;
				border: 0px solid #d1dae0;
				padding: 5px;
			}
			.errors{
				margin: 20px auto auto auto;
				width: 400px;
				background: blue;
				display: none;
				padding: 2px;
			}
		</style>
    </head>
    <body>
    	<div id="container">
    		<div class="left_pannel">
    			<div id="logo" onclick="location.href='index.php';"></div>	
				<!---Menu--->
				<?php include_once("Content/menu.php");	?>
				<!---Menu-Finished||--->
    		</div>
			<div id="right_pannel">
				<form name='contactForm' id='contactForm' method='post' onsubmit="return checkFields()">
					<h3>Use the contact form to email me,</h3>
					Name: <input type="text" name="name" class='formElement' id='formBoxName' value='Your name' onfocus="clearThings(this.name)" onblur="resetNeed(this.name)"/> 
					<br/><br/>
					Email: <input type="text" name="email" class='formElement' id='formBoxEmail' value='Your email address' onfocus="clearThings(this.name)" onblur="resetNeed(this.name)"/> 
					<br/><br/>
					Message: <textarea name="message" class='formElement' id='formBoxComment' onfocus="clearThings(this.name)" onblur="resetNeed(this.name)">Your message goes here...</textarea> 
					<input type='hidden' name="submitOk" id='submitOk' />
					<br/><br/><br/><br/><br/><br/><br/><br/><hr>
					<input type="submit" value="Submit" id='submit'/> 
				</form>
				<div id="status" onclick="hideBlock(this.id)" style="border: 1px solid white; cursor: pointer; display: none; height: auto; width: 300px; padding: 2px; background: black; color: white; margin: auto auto; text-align: center"></div>
				<div id='mapEmb' class='xxx'>
					
					<h3>Directions?</h3>
					<iframe width='350' height='200' frameborder='0' scrolling='no' marginheight='0' marginwidth='0' src='http://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=franklin+university&amp;aq=&amp;sll=37.0625,-95.677068&amp;sspn=35.768112,86.572266&amp;ie=UTF8&amp;hq=franklin+university&amp;t=m&amp;cid=16925378908069699585&amp;hnear=&amp;ll=39.958504,-82.991152&amp;spn=0.026316,0.034246&amp;z=14&amp;iwloc=A&amp;output=embed'></iframe><br /><small><a href='http://maps.google.com/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q=franklin+university&amp;aq=&amp;sll=37.0625,-95.677068&amp;sspn=35.768112,86.572266&amp;ie=UTF8&amp;hq=franklin+university&amp;t=m&amp;cid=16925378908069699585&amp;hnear=&amp;ll=39.958504,-82.991152&amp;spn=0.026316,0.034246&amp;z=14&amp;iwloc=A' style='color:#6e6e6e;text-align:left'>View Larger Map</a></small>
				</div>
			</div>			
        </div>
		<div id="footer">
			<hr>
			2010 | www.Atox-D.com | All Rights Reserved.
		</div>
	</body>
</html>
