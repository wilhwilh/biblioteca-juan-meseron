<ul class="breadcrumb" style="margin: 0">
  <li><a href="<?php echo $this->base; ?>">Inicio</a> <span class="divider">/</span></li>
  <li>Datos del Usuario<span class="divider">/</span></li>
</ul>

<div align="center" style="height: 26px; padding-top: 5px; color: white; font-size: 18px; background: -webkit-linear-gradient(#A89587, #55473C); background: -moz-linear-gradient(#A89587, #55473C); background: -o-linear-gradient(#A89587, #55473C);"><strong>Datos del Usuario</strong></div>

<div style="padding-left: 50px; padding-right: 50px;">
<div class="users form">
<?php echo $this->Form->create('User');?>
	<fieldset>
	<!-- <legend><?php if ($this->Session->read('Auth.User.group_id') == '1') { __('Modificar Usuario');} else { __('Datos del Usuario');} ?></legend> -->
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('name');
		echo $this->Form->input('lastname');
		if ($this->Session->read('Auth.User.group_id') == '1') {
			echo $this->Form->input('group_id');
		}
		echo $this->Form->input('profile_id');
		echo $this->Form->input('email');
		echo $this->Form->input('username');
		//echo $this->Form->input('password');
		//echo $this->Form->input('country');
		echo $this->Form->input('country_id');
		echo $this->Form->input('city');
		echo $this->Form->input('address');
		echo $this->Form->input('postal_code');
		echo $this->Form->input('gender', array('options' => array('Male' => 'Masculino', 'Female' => 'Femenino'), 'empty' => 'Seleccione'));
		//echo $this->Form->input('last_login');
		if ($this->Session->read('Auth.User.group_id') == '1') {
			echo $this->Form->input('active');
		}
		//echo $this->Form->input('ip');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
<br />
</div>

<?php if (($this->Session->check('Auth.User')) && ($this->Session->read('Auth.User.group_id') != 3)) { ?>
<div class="actions" style="height: 400px;">
	<br />
	<!-- h3><?php __('Actions'); ?></h3> -->
	<ul>
		<?php if (($this->Session->check('Auth.User')) && ($this->Session->read('Auth.User.group_id') == 1)) { ?>
			<li><?php echo $this->Html->link(__('List Users', true), array('action' => 'index'), array('style' => 'width: 170px;'));?></li>
		<?php } ?>
		<!-- <li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('User.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('User.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Groups', true), array('controller' => 'groups', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Group', true), array('controller' => 'groups', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Profiles', true), array('controller' => 'profiles', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Profile', true), array('controller' => 'profiles', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Countries', true), array('controller' => 'countries', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Country', true), array('controller' => 'countries', 'action' => 'add')); ?> </li> -->
	</ul>
</div>
<?php } ?>
<div style="clear: both;"><?php echo $this->Html->image('ts/pestana_revistas.jpg'); ?><br /><br /></div>
</div>