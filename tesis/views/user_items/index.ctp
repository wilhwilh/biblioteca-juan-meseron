<?php
function marc21_decode($camp = null) {
	if (!empty($camp)) {
		$c = explode('^', $camp);
		$indicators = $c[0];
		unset($c[0]);

		$i = 0;
		foreach ($c as $v){
			$c[substr($v, 0, 1)] = substr($v, 1, strlen($v)-1);
			$i++;
			unset($c[$i]);
		}
		$c['indicators'] = $indicators;
		return $c;
	} else {
		return false;
	}
}
?>
<ul class="breadcrumb" style="margin: 0">
  <li><a href="<?php echo $this->base; ?>">Inicio</a> <span class="divider">/</span></li>
  <li>Mi Biblioteca<span class="divider">/</span></li>
</ul>

<div align="center" style="height: 26px; padding-top: 5px; color: white; font-size: 18px; background: -webkit-linear-gradient(#A89587, #55473C); background: -moz-linear-gradient(#A89587, #55473C); background: -o-linear-gradient(#A89587, #55473C);"><strong>Mi Biblioteca</strong></div>

<div style="padding-left: 50px; padding-right: 50px;">
<div class="userItems">
	<!-- <h2><?php __('Items');?></h2> -->
	<table>
	<tr>
		<!-- <th><?php echo $this->Paginator->sort('id');?></th>
		<th><?php echo $this->Paginator->sort('user_id');?></th> -->
		<th><?php echo $this->Paginator->sort('Obra', 'item_id');?></th>
		<!-- <th><?php echo $this->Paginator->sort('type_id');?></th>
		<th><?php echo $this->Paginator->sort('created');?></th>
		<th><?php echo $this->Paginator->sort('modified');?></th> -->
		<th class="actions"><?php //__('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($userItems as $userItem):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<!-- <td><?php //echo $userItem['UserItem']['id']; ?>&nbsp;</td>
		<td>
			<?php //echo $this->Html->link($userItem['User']['name'], array('controller' => 'users', 'action' => 'view', $userItem['User']['id'])); ?>
		</td> -->
		<td>
			<?php $controller = array('1' => 'books', '2' => 'magazines', '3' => 'manuscripts', '4' => 'printed', '5' => 'iconographies', '6' => 'works') ?>
			<?php //echo $this->Html->link($userItem['Item']['title'], array('controller' => $type[$userItem['Item']['type_id']], 'action' => 'view', $userItem['Item']['id'])); ?>
			<?php
				if (!empty($userItem['Item']['245'])) {
					$title = marc21_decode($userItem['Item']['245']);
					if ($title) {
						echo $this->Html->link($title['a']. '.', array('controller' => $controller[2], 'action' => 'view', $userItem['Item']['id']));
						if ((isset($title['b'])) || (isset($title['c'])) || (isset($title['h']))) {echo "<br />";}
						if (isset($title['b'])) {echo ' <i>' . $title['b']. '.</i>';}
						if (isset($title['c'])) {echo ' ' . $title['c']. '.';}
						if (isset($title['h'])) {echo ' ' . $title['h']. '.';}
					}
				}
			?>
		</td>
		<td><?php //echo $userItem['Item']['Type']['name']; ?>&nbsp;</td>
		<!-- <td><?php echo $userItem['UserItem']['created']; ?>&nbsp;</td>
		<td><?php echo $userItem['UserItem']['modified']; ?>&nbsp;</td> -->
		<td class="actions">
			<?php //echo $this->Html->link(__('View', true), array('action' => 'view', $userItem['UserItem']['id'])); ?>
			<?php //echo $this->Html->link(__('Edit', true), array('action' => 'edit', $userItem['UserItem']['id'])); ?>
			<?php //echo $this->Html->link(__('Delete', true), array('action' => 'delete', $userItem['UserItem']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $title['a'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<!-- 
	<p align="center">
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page %page% of %pages%, showing %current% records out of %count% total, starting on record %start%, ending on %end%', true)
	));
	?>	</p> -->

	<?php if ($this->Paginator->params['paging']['UserItem']['pageCount'] > 1) { ?>
	<div class="pagination" align="center">
		<ul>
			<?php echo $this->Paginator->prev('<< ' . __('previous', true), array('tag'=>'li', 'separator' => ''), null, array('class'=>'disabled', 'tag'=>'li', 'separator' => ''));?>
			<?php echo $this->Paginator->numbers(array('separator' => '', 'tag' => 'li'));?>
			<?php echo $this->Paginator->next(__('next', true) . ' >>', array('tag'=>'li', 'separator' => ''), null, array('class' => 'disabled', 'tag'=>'li', 'separator' => ''));?>
		</ul>
	</div><br />
	<?php } ?>
</div>
<!--<div class="actions" style="height: 400px">
	<br />
	<h3><?php //__('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New User Item', true), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Users', true), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User', true), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Items', true), array('controller' => 'items', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Item', true), array('controller' => 'items', 'action' => 'add')); ?> </li>
	</ul>
</div>-->
<div style="clear: both;"><?php echo $this->Html->image('ts/pestana_revistas.jpg'); ?><br /><br /></div>
</div>