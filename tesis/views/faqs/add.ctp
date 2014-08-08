<div style="padding-left: 50px; padding-right: 50px;">

<div class="faqs form">
<?php echo $this->Form->create('Faq');?>
	<fieldset>
		<legend><?php __('Nueva Pregunta'); ?></legend>
	<?php
		echo $this->Form->input('question', array('label' => __('Pegunta', true)));
		echo $this->Form->input('answer', array('label' => __('Respuesta', true)));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<!-- <h3><?php __('Actions'); ?></h3> -->
	<br />
	<ul>
		<!-- <li><?php echo $this->Html->link(__('Configuration', true), array('controller' => 'configurations')); ?></li> -->
		<li><?php echo $this->Html->link(__("FAQ's", true), array('action' => 'index'));?></li>
	</ul>
</div>

<div style="clear: both;"><?php echo $this->Html->image('ts/pestana_revistas.jpg'); ?><br /><br /></div>
</div>