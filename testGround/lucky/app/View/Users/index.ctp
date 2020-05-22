<style type="text/css">
	#register a{
		color: #fff;
	}
</style>

<h2>User Management System</h2>

<p id="register" style="background: #f45; padding: 5px; color: #fff; width: 80px; height: 20px; text-align: center">	
<?php 
	echo $this->Html->Link('Add User', array('controller'=>'users', 'action'=>'register'));
?>
</p>
<br/>
<table>
	<tr>
		<th>Name</th>
		<th>Email</th>
		<th>Created</th>
		<th>Actions</th>
	</tr>
	<?php foreach ($users as $user):?>
	<tr>
		<td>
			<?php echo $this->Html->link($user['User']['username'], array('controller' => 'users', 'action' => 'view', $user['User']['id'])); ?>
		</td>
		<td>
			<?php echo $user['User']['username'];?>
		</td>
		<td>
			<?php echo $user['User']['created']; ?>
		</td>
		<td>
			<?php 
				echo $this->Html->link('Change password', array('action'=>'account', $user['User']['id']));
				echo " | ";
				echo $this->Form->postLink(
					'Delete', 
					array('action' => 'delete', $user['User']['id']),
					array('confirm' => 'Are you sure?')
				);
			?>
		</td>
	</tr>
	<?php endforeach; ?>
	<?php unset($user); ?>
</table>