<b>
	<?php echo h($user['User']['username']); ?>
</b>
<hr>
<p>
	<small>
		Registered: <?php echo $user['User']['created']; ?>
	</small>
</p>
<p>
	<small>
		<b>Other info:</b><br>
		<?php 
			echo "\nRole: ". $user['User']['user_role']; 
			echo "\n<br>Address: ". $user['User']['address']; 
			echo "\n<br>Phone: ". $user['User']['phone']; 
		?>
	</small>
</p>