<div style="padding-left: 50px; padding-right: 50px;">

<div class="events form">
<?php echo $this->Form->create('Event');?>
	<fieldset>
		<legend><?php __('Agregar Evento'); ?></legend>
	<?php
		echo $this->Form->input('title');
		echo $this->Form->input('start', array('label' => __('Inicio', true), 'dateFormat' => 'DMY'));
		echo $this->Form->input('end', array('label' => __('Fin', true), 'dateFormat' => 'DMY'));
		echo "<br />";
		echo $this->Form->input('summary', array('label' => __('Sumario', true)));
		echo "<br />";
		echo $this->Form->input('allDay', array('label' => __('Todo el día', true)));
		echo "<br />";
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<!-- <h3><?php __('Actions'); ?></h3> -->
	<br />
	<ul>
		<li><?php echo $this->Html->link(__('Eventos', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Calendario', true), array('action' => 'calendar')); ?> </li>
		<!-- <li><?php echo $this->Html->link(__('New Subfield', true), array('controller' => 'subfields', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Items', true), array('controller' => 'items', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Item', true), array('controller' => 'items', 'action' => 'add')); ?> </li> -->
	</ul>
</div>

<div style="clear: both;"><?php echo $this->Html->image('ts/pestana_revistas.jpg'); ?><br /><br /></div>
</div>
<script type="text/javascript">
	$(document).ready(function() {
		$('select').attr('style', 'width: 80px');
	});
</script>