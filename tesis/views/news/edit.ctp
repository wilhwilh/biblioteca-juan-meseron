<div style="padding-left: 50px; padding-right: 50px;">
<div class="news form">
<?php echo $this->Form->create('News');?>
	<fieldset>
		<legend><?php __('Modificar Noticia'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('title');
		echo $this->Form->input('content', array('label' => 'Contenido'));
		echo $this->Form->input('published');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<!-- <h3><?php __('Actions'); ?></h3> -->
	<br />
	<ul>
		<!-- <li><?php echo $this->Html->link(__('Eliminar', true), array('action' => 'delete', $this->Form->value('News.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('News.title'))); ?></li> -->
		<li><?php echo $this->Html->link(__('Noticias', true), array('action' => 'index'));?></li>
	</ul>
</div>

<div style="clear: both;"><?php echo $this->Html->image('ts/pestana_revistas.jpg'); ?><br /><br /></div>
</div>