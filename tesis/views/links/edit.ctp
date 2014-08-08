<div style="padding-left: 50px; padding-right: 50px;">

<div class="links form">
<?php echo $this->Form->create('Link');?>
	<fieldset>
		<legend><?php __('Modificar Enlace'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('title');
		echo $this->Form->input('url');
		echo $this->Form->input('description');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<!-- <h3><?php __('Actions'); ?></h3> -->
	<br />
	<ul>
		<!-- <li><?php echo $this->Html->link(__('Configuration', true), array('controller' => 'configurations')); ?></li> -->
		<!-- <li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('Link.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('Link.id'))); ?></li> -->
		<li><?php echo $this->Html->link(__('Enlaces', true), array('action' => 'index'));?></li>
	</ul>
</div>

<div style="clear: both;"><?php echo $this->Html->image('ts/pestana_revistas.jpg'); ?><br /><br /></div>
</div>