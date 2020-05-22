<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"  
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">  
  
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"> 
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
		<title>Welcome | Jir Consultancy</title>	
		<link rel="stylesheet" href="styles/styleMain.css"/>
		<link rel="stylesheet" href="styles/styleFonts.css"/>
		
		<!--The files needed for the menu-->
		<link rel="stylesheet" href="animated-menu/animated-menu.css"/>
		<script src="http://jqueryjs.googlecode.com/files/jquery-1.3.js" type="text/javascript"></script>  
		<script src="js/jquery.easing.1.3.js" type="text/javascript"></script>  
		<script src="animated-menu/animated-menu.js" type="text/javascript"></script>
		
		<style>
			.prjBox{
				margin: 10px auto auto auto;
				width: 600px;
				height: auto;
				
				
			}
			#boxTitle{
				background: #39392f;
				padding: 5px;
				font-weight: bold;
				border-bottom: 1px solid #4c4c3e;
			}
			#boxContent{
				margin-top: 0px;
				background: #303027;
				padding: 5px;
				font-size: 11px;
			}
		</style>
	</head>
	<body>
		<div id='container'>
			<div id='headerTitle'>
				<?php
					include_once("textContent/header.php");
				?>
			</div>
			<div id='menuContainer'>
				<?php
					include_once("textContent/menuContent.php");
				?>
			</div>
			<div id='mainImage'>
				<img src='images/mainImage4.png'/>
			</div>
			<div id='textContent'>
				<h3>Practice Areas</h3><hr>
				<div class='prjBox'>
					<div id='boxTitle'>Democracy and Governance</div>
					<div id='boxContent'>JIRC assists local, state and national governments in becoming more transparent, open and just while engaging citizens, businesses and civil society as active partners. Our programs nurture a prevailing public attitude that is intolerant of corruption, creating a demand for better government services. At the same time, JIRC promotes the rule of law, peaceful conflict resolution, open elections, an independent media, democratic decentralization, and sound government financial accountability and audit systems.</div>
				</div>
				<div class='prjBox'>
					<div id='boxTitle'>Rule of Law and Justice</div>
					<div id='boxContent'>JIRC works to strengthen legal, policy and regulatory frameworks to bring legitimacy, equity and fairness into government. We advise civil society groups on how to oversee legal and judicial professionals and advocate for transparency and change. Our work includes drafting new laws, codifying human rights, strengthening judicial and legal ethics, training prosecutors, judges, lawyers and developing new mechanisms for publishing legal opinions—all with the goal of combating corruption and giving citizens more equitable access to justice.</div>
				</div>
				<div class='prjBox'>
					<div id='boxTitle'>Local Governance</div>
					<div id='boxContent'>JIRC works to strengthen democratic governance at the local level. Our programs help local governments plan, implement, manage and evaluate public policies effectively and transparently; design and implement financial management, procurement and auditing systems; hold fair and transparent elections; and deliver services that meet the needs of citizens and businesses. At the same time, our programs empower citizens, businesses and civil society to monitor local government spending, advocate reforms and hold local officials accountable.</div>
				</div>
				<div class='prjBox'>
					<div id='boxTitle'>Conflict Management and Recovery</div>
					<div id='boxContent'>JIRC provides quick action in fragile, conflict or post-conflict settings to help shore up forces for peace and democracy until political transitions are solidly entrenched. Often a key component is helping local communities confront exclusion—from jobs, access to resources, a role in decision-making, social acceptance, etc.—so that exclusion does not spark violence. We also foster peace negotiations, reconciliation, citizen security, open elections, anticorruption programs and good governance.</div>
				</div>
				<div class='prjBox'>
					<div id='boxTitle'>Civil Society Strengthening</div>
					<div id='boxContent'>JIRC helps civil society shape public policy, keep governments accountable, defend human rights, and mobilize citizens to participate in democratic politics in a constructive and effective manner. Our programs include assistance with organizational development, public outreach and coalition building. A key component of our work is building trust and relationships among citizens; government institutions; businesses; and civil society at national, regional and local levels.</div>
				</div>
			</div>
			<div id='footer'>
				<?php include_once("textContent/footerContent.php");?>
			</div>
		</div>
	</body> 
</html>