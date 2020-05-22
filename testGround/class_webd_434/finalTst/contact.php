<html>
	<head>
		<title>WEBD434-Final Test | Contact Form </title>
	</head>
	<body>
		<p>Required fields <b>*</b></p>
		<form action="validateNew.php" method="post" name="contactForm">
			<p> 
				Your Name: <input type="text" name="name" value=""/><br >
				* Subject: <input type="text" name="subject" value=""/><br/>
				* E-mail:  <input type="text" name="email" value=""/><br/>
			</p>
			<p>
				<b>Your comments:</b>
				<br/>
				<textarea name="comments" rows="8" cols="35"> </textarea>
			</p>
			<p>
				<input type="submit" value="Submit"/>
			</p>
		</form>
		<!---contactForm finished--->
	</body>
</html>

