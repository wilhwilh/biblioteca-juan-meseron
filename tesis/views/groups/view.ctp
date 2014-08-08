<div style="padding-left: 50px; padding-right: 50px;">

<div class="groups view">
<h2><?php  __('Group');?></h2>
	<dl class="dl-horizontal"><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $group['Group']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Name'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $group['Group']['name']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Description'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $group['Group']['description']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Created'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $group['Group']['created']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Modified'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $group['Group']['modified']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<!-- <h3><?php __('Actions'); ?></h3> -->
	<br />
	<ul>
		<li><?php echo $this->Html->link(__('New Group', true), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Edit Group', true), array('action' => 'edit', $group['Group']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Group', true), array('action' => 'delete', $group['Group']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $group['Group']['name'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Groups', true), array('action' => 'index')); ?> </li>
		<!--
		<li><?php echo $this->Html->link(__('List Users', true), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User', true), array('controller' => 'users', 'action' => 'add')); ?> </li>
		-->
	</ul>
</div>
<div class="related">
	<h3><?php __('Users');?></h3>
	<?php if (!empty($group['User'])):?>
	<table>
	<tr>
		<!-- <th><?php __('Id'); ?></th>
		<th><?php __('Group Id'); ?></th> -->
		<th><?php __('Name'); ?></th>
		<th><?php __('Lastname'); ?></th>
		<th><?php __('Profile Id'); ?></th>
		<!-- <th><?php __('Country Id'); ?></th>
		<th><?php __('Email'); ?></th>
		<th><?php __('Username'); ?></th>
		<th><?php __('Password'); ?></th>
		<th><?php __('Country'); ?></th>
		<th><?php __('City'); ?></th>
		<th><?php __('Address'); ?></th>
		<th><?php __('Postal Code'); ?></th>
		<th><?php __('Gender'); ?></th>
		<th><?php __('Last Login'); ?></th>
		<th><?php __('Active'); ?></th>
		<th><?php __('Ip'); ?></th>
		<th><?php __('Created'); ?></th>
		<th><?php __('Modified'); ?></th> -->
		<th class="actions"><?php //__('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($group['User'] as $user):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<!-- <td><?php echo $user['id'];?></td>
			<td><?php echo $user['group_id'];?></td> -->
			<td><?php echo $user['name'];?></td>
			<td><?php echo $user['lastname'];?></td>
			<td><?php echo $user['Profile']['name'];?></td>
			<!-- <td><?php echo $user['country_id'];?></td>
			<td><?php echo $user['email'];?></td>
			<td><?php echo $user['username'];?></td>
			<td><?php echo $user['password'];?></td>
			<td><?php echo $user['country'];?></td>
			<td><?php echo $user['city'];?></td>
			<td><?php echo $user['address'];?></td>
			<td><?php echo $user['postal_code'];?></td>
			<td><?php echo $user['gender'];?></td>
			<td><?php echo $user['last_login'];?></td>
			<td><?php echo $user['active'];?></td>
			<td><?php echo $user['ip'];?></td>
			<td><?php echo $user['created'];?></td>
			<td><?php echo $user['modified'];?></td> -->
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('controller' => 'users', 'action' => 'view', $user['id'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('controller' => 'users', 'action' => 'edit', $user['id'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('controller' => 'users', 'action' => 'delete', $user['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $user['fullname'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>
<!--
	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New User', true), array('controller' => 'users', 'action' => 'add'));?> </li>
		</ul>
	</div>
-->
</div>
<div style="clear: both;"><?php echo $this->Html->image('ts/pestana_revistas.jpg'); ?><br /><br /></div>
</div>