<div style="padding-left: 50px; padding-right: 50px;">

<div class="messages form">
<?php echo $this->Form->create('Message');?>
	<fieldset>
		<legend><?php __('Add Message'); ?></legend>
	<?php
		echo $this->Form->input('name');
		echo $this->Form->input('email');
		echo $this->Form->input('subject');
		echo $this->Form->input('message');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Send', true));?>
<br />
</div>
<div class="actions">
	<!-- <h3><?php __('Actions'); ?></h3> -->
	<ul>
		<li><?php echo $this->Html->link(__('List Messages', true), array('action' => 'index'));?></li>
	</ul>
</div>

<div style="clear: both;"><?php echo $this->Html->image('ts/pestana_revistas.jpg'); ?><br /><br /></div>
</div>