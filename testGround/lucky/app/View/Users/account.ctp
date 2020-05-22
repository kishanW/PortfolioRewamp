<h3>Change your password</h3>
 
<?php
	echo $this->Form->create('User');
	echo $this->Form->input('phone');
	echo $this->Form->input('address');
	echo $this->Form->input('newPassword', array('type'=>'password'));
	echo $this->Form->input('repeatPassword', array('type'=>'password'));
	echo $this->Form->input('oldPassword', array('type'=>'password'));
	echo $this->Form->end('Update');
?>