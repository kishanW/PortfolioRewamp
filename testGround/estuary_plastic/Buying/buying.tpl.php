
	<body>
		<header>
			<img src="images/top_banner.png">
		</header>
		<section id="section_sell_form">
			<form action="sellThings.php" id="sell_form">
				Your Name<br/>
				<input type="text" class ="text_input" id="sell_form_name" name="sell_form_name" placeholder="Your Name"/>
				<br/>
				Email Address<br/>
				<input type="text" class ="text_input" id="sell_form_email" name="sell_form_email" placeholder="Email Address"/>
				<br/>
				Message<br/>
				<textarea id="sell_form_message" placeholder="Your message"></textarea>
				<br/>	
				<button id="sell_form_send_button">Send</button>			
			</form>			
		</section>
		<section id="section_buttons">
			<ul>
				<?php
					include_once "../php/menu.php";
				?>
			</ul>	
		</section>
	</body>
</html>