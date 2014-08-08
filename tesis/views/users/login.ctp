<ul class="breadcrumb" style="margin: 0">
  <li><a href="<?php echo $this->base; ?>">Inicio</a> <span class="divider">/</span></li>
  <li>Ingreso de Usuario<span class="divider">/</span></li>
</ul>

<div align="center" style="height: 26px; padding-top: 5px; color: white; font-size: 18px; background: -webkit-linear-gradient(#A89587, #55473C); background: -moz-linear-gradient(#A89587, #55473C); background: -o-linear-gradient(#A89587, #55473C);"><strong>Ingreso de Usuario</strong></div>
<br />

<?php //debug($this->Session->read()); ?>
<div class="users">
	<div class="well">
	<?php echo $this->Form->create('User', array('action' => 'login'));?>
		<?php
			echo $this->Form->input('username', array('label' => false, 'placeholder' => __('Username', true)));
		?>
		<br />
		<?php
			echo $this->Form->input('password', array('label' => false, 'placeholder' => __('Password', true)));
		?>
		<br /><br />
		<?php echo $this->Form->button(__('Login', true), array('action' => 'login', 'class' => 'btn btn-primary')); ?>
		<?php echo $this->Html->link(__('Register', true), '/users/register', array('class' => 'btn'));?>
		<?php echo $this->Html->link(__('Reset Password', true), '/users/reset', array('class' => 'btn'));?>
	<?php echo $this->Form->end();?>
	</div>
</div>
<!--
<div class="actions">
	<h3><?php __('Menu'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Register', true), array('controller' => 'pages', 'action' => 'home'));?></li>
		<li><?php echo $this->Html->link(__('Reset Password', true), array('action' => 'reset'));?></li>
		<li><?php echo $this->Html->link(__('List Users', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Groups', true), array('controller' => 'groups', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Group', true), array('controller' => 'groups', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List User Companies', true), array('controller' => 'user_companies', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User Company', true), array('controller' => 'user_companies', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List User Invitations', true), array('controller' => 'user_invitations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User Invitation', true), array('controller' => 'user_invitations', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List User Phones', true), array('controller' => 'user_phones', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User Phone', true), array('controller' => 'user_phones', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List User Social Networks', true), array('controller' => 'user_social_networks', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User Social Network', true), array('controller' => 'user_social_networks', 'action' => 'add')); ?> </li>
	</ul>
</div>
-->
<script type="text/javascript">
$(document).ready(function(){
	$('.sidebar-nav').hide();
	$('.span2').hide();
});
</script>