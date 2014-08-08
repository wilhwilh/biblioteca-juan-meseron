<div style="padding-left: 50px; padding-right: 50px;">

<div class="pagetexts view">
<h2><?php __('Pagetext');?></h2>
	<dl class="dl-horizontal"><?php $i = 0; $class = ' class="altrow"';?>
		<!--
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $pagetext['Pagetext']['id']; ?>
			&nbsp;
		</dd>
		-->
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Title'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $pagetext['Pagetext']['title']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Description'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $pagetext['Pagetext']['description']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Created'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php if ($pagetext['Pagetext']['created']) echo $this->Time->format('d-m-Y', $pagetext['Pagetext']['created']); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Modified'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php if ($pagetext['Pagetext']['modified']) echo $this->Time->format('d-m-Y', $pagetext['Pagetext']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<!-- <h3><?php __('Actions'); ?></h3> -->
	<br />
	<ul>
		<li><?php echo $this->Html->link(__('Páginas', true), array('action' => 'index')); ?> </li>
		<!-- <li><?php echo $this->Html->link(__('Edit Pagetext', true), array('action' => 'edit', $pagetext['Pagetext']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('New Pagetext', true), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Pagetext', true), array('action' => 'delete', $pagetext['Pagetext']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $pagetext['Pagetext']['id'])); ?> </li> -->
	</ul>
</div>

<div style="clear: both;"><?php echo $this->Html->image('ts/pestana_revistas.jpg'); ?><br /><br /></div>
</div>