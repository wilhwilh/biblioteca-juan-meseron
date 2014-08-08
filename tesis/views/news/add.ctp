<div style="padding-left: 50px; padding-right: 50px;">
<div class="news form">
<?php echo $this->Form->create('News');?>
	<fieldset>
		<legend><?php __('Agregar Noticia'); ?></legend>
	<?php
		echo $this->Form->input('title');
		echo $this->Form->input('content', array('label' => 'Contenido'));
		echo $this->Form->input('published', array('checked' => true));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<!-- <h3><?php __('Actions'); ?></h3> -->
	<br />
	<ul>
		<li><?php echo $this->Html->link(__('Noticias', true), array('action' => 'index'));?></li>
	</ul>
</div>

<div style="clear: both;"><?php echo $this->Html->image('ts/pestana_revistas.jpg'); ?><br /><br /></div>
</div>