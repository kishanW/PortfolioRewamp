<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
	<title>Email System | Procedural | KishanW</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div id='container'>
		<h3>This is the email system</h3>
		<hr>
		<b style='color: lightgray'>* Required field.</b><br/><br/>
		<form method='post' action='email1Processor.php'>
			*Email From<br />
			<input name='emailFrom' type='text' /><br />
			*Email To<br />
			<input name='emailTo' type='text' /><br />
			*Subject<br />
			<input name='subject' type='text' /><br />
			*Message:<br />
			<textarea name='message' rows='15' cols='40'></textarea><br />
			<input type='reset'id='reset' />
			<input type='submit'id='send' value='Send'/>
		</form>
		<p>
			Download the php file:<br/>
			<a href='email1Processor.txt' style='color: white;font-weight: bold; background: gray; padding: 1px;'>email1Processor</a>
		</p>
	</div>
</body>
</html>