<?php
	echo $this->Form->create();
	echo $this->Form->input('username', array('label' => 'Email'));
	$this->Form->input('email');
	echo $this->Form->input('password');
	echo $this->Form->input('password_confirmation', array('type' => 'password'));
	echo $this->Form->end('Register');
?>