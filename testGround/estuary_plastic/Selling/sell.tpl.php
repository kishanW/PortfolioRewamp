	<body>
		<header>
			<img src="images/top_banner.png">
		</header>
		<section id="section_sell_form">
			<form action="sellContact.php" id="sell_form" method="Post">
				Your Name<br/>
				<input type="text" class ="text_input" id="fromName" name="name" placeholder="Your Name"/>
				
				Email Address<br/>
				<input type="text" class ="text_input" id="fromEmail" name="email" placeholder="Email Address"/>

				Message<br/>
				<textarea id="sell_form_message" name="message" placeholder="Your message"></textarea>
	
				<button id="sell_form_send_button">Send</button>			
			</form>	
			<script type="text/javascript">
					$("#sell_form_send_button").click(function(e){
						var form = $("sell_form");
						var nameResult = $("#fromName").val() != '';
						var emailResult = $("#fromEmail").val() != '';
						var messageResult = $("#sell_form_message").val() != '';
						alert("name: " + nameResult + " email: " + emailResult + " message: " + messageResult);
						if(nameResult && emailResult && messageResult){
							form.submit();
						}
						else{
							/*$("#sell_form_send_button").prop('disabled', true);*/
							e.preventDefault();
						}
					});
			</script>

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