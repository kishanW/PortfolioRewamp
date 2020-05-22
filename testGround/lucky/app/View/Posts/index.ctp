<h1>Blog Posts</h1>
<?php 
	echo $this->Html->Link('Add Post', array('controller'=>'posts', 'action'=>'add'));
?>
<table>
	<tr>
		<th>ID</th>
		<th>Title</th>
		<th>Created</th>
		<th>Update/ Delete</th>
	</tr>
	<?php foreach ($posts as $post):?>
	<tr>
		<td>
			<?php echo $post['Post']['id'];?>
		</td>
		<td>
			<?php echo $this->Html->link($post['Post']['title'], array('controller' => 'posts', 'action' => 'view', $post['Post']['id'])); ?>
		</td>
		<td>
			<?php echo $post['Post']['created']; ?>
		</td>
		<td>
			<?php
				echo $this->Html->link('Edit', array('action'=>'edit', $post['Post']['id']));
				echo " | ";
				echo $this->Form->postLink(
						'Delete', 
						array('action' => 'delete', $post['Post']['id']),
						array('confirm' => 'Are you sure?')
					);
			?>
		</td>
	</tr>
	<?php endforeach; ?>
	<?php unset($post); ?>
</table>