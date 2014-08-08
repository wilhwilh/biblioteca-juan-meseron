<?php
// El zoom daña la revista.
/*echo $this->Html->script('zoomooz/jquery.zoomooz-helpers');
echo $this->Html->script('zoomooz/jquery.zoomooz-anim');
echo $this->Html->script('zoomooz/jquery.zoomooz-core');
echo $this->Html->script('zoomooz/jquery.zoomooz-zoomTarget');
echo $this->Html->script('zoomooz/jquery.zoomooz-zoomContainer');
echo $this->Html->script('zoomooz/purecssmatrix');
echo $this->Html->script('zoomooz/sylvester.src.stripped');
echo $this->Html->css('website-assets/website');*/
echo $this->Html->script('jquery.easing.1.3.js');
echo $this->Html->script('turn');
//echo $this->Html->script('wijmo/jquery.wijmo-open.all.2.2.1.min');
//echo $this->Html->script('wijmo/jquery.wijmo-complete.all.2.2.1.min');
//echo $this->Html->script('wijmo/jquery.wijmo.wijcarousel');
echo $this->Html->script('bootstrap/bootstrap-tab');
//echo $this->Html->script('pdfobject_source');

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
<style type="text/css">
body{
	background:#ccc;
}
#magazine{
	width:800px;
	height:600px;
	margin-left: 70px;
}
#magazine .turn-page{
	background-color:#ccc;
	background-size:100% 100%;
}
</style>

<div>

<ul class="breadcrumb" style="margin: 0">
  <li><a href="<?php echo $this->base; ?>">Inicio</a> <span class="divider">/</span><a href="<?php echo $this->base; ?>/configurations">Configuración</a> <span class="divider">/</span><a href="<?php echo $this->base; ?>/items">Obras</a> <span class="divider">/</span></li>
  <li>
  	<?php
		if (!empty($item['Item']['245'])) {
			$title = marc21_decode($item['Item']['245']);
			if ($title) {
				echo $title['a'];
				if (isset($title['b'])) {echo ' ' . $title['b'];}
				if (isset($title['c'])) {echo ' ' . $title['c'];}
				if (isset($title['h'])) {echo ' ' . $title['h'];}
			}
		}
	?>
  	</li>
</ul>

<br />

<ul class="nav nav-tabs" id="myTab">
	<li class="active"><a href="#informacion">Información</a></li>
	<li><a href="#pdf">PDF</a></li>
	<li><a href="#revista">Revista</a></li>
	<?php if (($this->Session->check('Auth.User')) && ($this->Session->read('Auth.User.group_id') != 3)) { ?><li><a href="#fotos">Fotos</a></li><?php } ?>
</ul>

<div class="tab-content">
	<div class="tab-pane active" id="informacion">
	<br />
		<div>
			<div style="width: 20%; float: left; text-align: right;">
				<?php
					if (($item['Item']['cover_name']) && (file_exists($_SERVER['DOCUMENT_ROOT'] . "/tesis/webroot/covers/" . $item['Item']['cover_path']))){
						echo $this->Html->image("/webroot/covers/" . $item['Item']['cover_path'], array('width' => '90%'));
					} else {
						echo $this->Html->image("/webroot/img/sin_portada.jpg", array('width' => '90%'));
					}
				?>
				
				<br /><br />
				
				<?php if (!empty($item['Item']['item_file_path'])) { ?>
					<a href="http://<?php echo $_SERVER['HTTP_HOST'] . $this->base . '/webroot/files/' . $item['Item']['item_file_path']; ?>" target="_blank" title="Descargue el documento en su computadora."><i class='icon-download-alt'></i> Descargar Documento</a>
				<?php } ?>
				
				<br />
			</div>
			<div style="width: 40%; float: left;">
				<dl class="dl-horizontal">
					<dt><?php __('Título'); ?>:</dt>
					<dd>
					<?php
						if (!empty($item['Item']['245'])) {
							$title = marc21_decode($item['Item']['245']);
							if ($title) {
								echo $title['a'] . '.';
								if (isset($title['b'])) {echo ' ' . $title['b']. '.';}
								if (isset($title['c'])) {echo ' ' . $title['c']. '.';}
								if (isset($title['h'])) {echo ' ' . $title['h']. '.';}
							}
						}
					?>
					</dd>
					<dt><?php __('Publicación'); ?>:</dt>
					<dd>
						<?php
							if (!empty($item['Item']['260'])) {
								$year_century = marc21_decode($item['Item']['260']);
								echo $year_century['a'] . '.';
								if (isset($year_century['b'])) {echo ' ' . $year_century['b']. '.';}
								if (isset($year_century['c'])) {echo ' ' . $year_century['c']. '.';}
							}
						?>
					</dd>
					<?php if (!empty($item['Item']['690'])) { ?>
					<dt><?php __('Siglo'); ?>:</dt>
					<dd>
						<?php
							$century = marc21_decode($item['Item']['690']);
							echo $century['a'];
						?>
					</dd>
					<?php } ?>
					<dt><?php __('Created'); ?>:</dt>
					<dd>
						<?php echo $time->format('d-m-Y', $item['Item']['created']); ?>
					</dd>
				</dl>
				
				<?php if ($this->Session->check('Auth.User')) { ?>
				<?php echo $this->Form->create('UserItem', array('id' => 'UserItemForm', 'action' => 'add'));?>
				<?php
					echo $this->Form->hidden('user_id', array('type' => 'text', 'value' => $this->Session->read('Auth.User.id')));
					echo $this->Form->hidden('item_id', array('type' => 'text', 'value' => $item['Item']['id']));
				?>
				<?php echo $this->Form->end();?>
				
				<div style="padding-left: 35px;">
					<?php echo $this->Html->link('Agregar a Mi Biblioteca', '/', array('class' => 'btn', 'onclick' => "$('#UserItemForm').submit();")); ?>
				</div>
				<br>
				<div style="padding-left: 35px;">
					<?php echo $this->Html->link('Formato MARC21', '/items/marc21/'.$item['Item']['id'], array('class' => 'btn')); ?>
				</div>
				<?php } ?>
			</div>
			<div style="width: 40%; float: left;">
				<dl class="dl-horizontal">
					<?php if (!empty($item['Item']['100'])) { ?>
					<dt><?php __('Author'); ?>:</dt>
					<dd>
						<?php
							if (!empty($item['Item']['100'])) {
								$author = marc21_decode($item['Item']['100']);
								echo $author['a']. '.';
								if (isset($author['d'])) {echo ' ' . $author['d']. '.';}
							}
						?>
					</dd>
					<?php } ?>
					<dt><?php __('Type'); ?>:</dt>
					<dd>
						<?php
							$t1 = $item['Item']['h-006'];
							$t2 = $item['Item']['h-007'];
							
							// Tipo libro.
							if (($t1 == 'a') && ($t2 == 'm')) {
								echo "Libro";
							}
							
							// Tipo revista.
							if (($t1 == 'a') && ($t2 == 's')) {
								echo "Revista";
							}
		
							// Música impresa.
							if (($t1 == 'c') && ($t2 == 'm')) {
								echo "Música Impresa";
							}
							
							// Música manuscrita.
							if (($t1 == 'd') && ($t2 == 'm')) {
								echo "Música Manuscrita";
							}
						?>
					</dd>
					<dt><?php __('Modified'); ?>:</dt>
					<dd>
						<?php echo $time->format('d-m-Y', $item['Item']['modified']); ?>
					</dd>
					<?php if (!empty($item['Item']['dedicatory'])) { ?>
					<dt><?php __('Dedicatory'); ?>:</dt>
					<dd>
						<?php echo "&nbsp;"; //echo $item['Item']['dedicatory']; ?>
					</dd>
					<?php } ?>
				</dl>
				
				<?php if ($this->Session->check('Auth.User')) { ?>
				<div style="text-align: center;"><?php //echo $this->Form->button(__('Compartir', true), array('action' => 'add')); ?></div>
				<?php } ?>
								
				<br /><br />
			</div>
		</div>
	
	</div>
	<div class="tab-pane" id="pdf">
		<?php if ($item['Item']['item_content_type'] == "application/pdf") { ?>
			<?php if ($item['Item']['item_file_path']) { ?>
				<!-- <iframe src="<?php echo 'http://' . $_SERVER['HTTP_HOST'] . $this->base . '/webroot/files/' . $item['Item']['item_file_path']; ?>" width="99%" height="600px"></iframe> -->
				<!-- <iframe src="http://docs.google.com/viewer?url=<?php echo 'http://' . $_SERVER['HTTP_HOST'] . $this->base . '/webroot/files/' . $item['Item']['item_file_path']; ?>" width="99%" height="600px"></iframe> -->
				<!-- <object width="99%" height="600" type="application/pdf" data="<?php echo 'http://' . $_SERVER['HTTP_HOST'] . $this->base . '/webroot/files/' . $item['Item']['item_file_path']; ?>">
				<param name="src" value="<?php echo 'http://' . $_SERVER['HTTP_HOST'] . $this->base . '/webroot/files/' . $item['Item']['item_file_path']; ?>" />
				<p>N o PDF available</p>
				</object> -->
				
				<object data="<?php echo 'http://' . $_SERVER['HTTP_HOST'] . $this->base . '/webroot/files/' . $item['Item']['item_file_path']; ?>" type="application/pdf" width="100%" height="600px">
				<br /><br />
				<div style="text-align: center;">
					Lamentablemente este navegador no posee un plugin para visualizar PDF's.
				<br />
					Instale un plugin para visualizar el PDF o descargue el archivo <a href="http://<?php echo $_SERVER['HTTP_HOST'] . $this->base . '/webroot/files/' . $item['Item']['item_file_path']; ?>" target="_blank" title="Descargue el documento en su computadora.">aquí</a>. 
				<br /><br /><br /><br />
				</div>
				</object>
				
			<?php } ?>
		<?php } else {echo "<div style='text-align: center'>El archivo no tiene formato pdf.</div><br />";} ?>
	</div>
	<div class="tab-pane" id="revista">
		<div id="magazine" style="padding-bottom: 20px; overflow: hidden;">
			<?php foreach ($item['ItemsPicture'] as $picture): ?>
					<div style="background-image:url(<?php echo 'http://' . $_SERVER['HTTP_HOST'] . $this->base; ?>/webroot/attachments/files/big/<?php echo $picture['picture_file_path']; ?>);"></div>
			<?php endforeach; ?>
			<?php
					$w = 800;
					$h = 600;
				if (($this->Session->check('Auth.User')) && ($this->Session->read('Auth.User.group_id') != 3)){
					$w = 400;
					$h = 300;
				} 
			?>
		</div>
		
		<script type="text/javascript">
			$(window).ready(function() {
				$('#magazine').turn({
									display: 'double',
									width: <?php echo $w; ?>,
									height: <?php echo $h; ?>
									/*
									acceleration: true,
									gradients: !$.isTouch,
									elevation:50,
									when: {
										turned: function(e, page) {
											//console.log('Current view: ', $(this).turn('view'));
										}
									}*/
				});

				$(window).bind('keydown', function(e){
					if (e.keyCode==37)
						$('#magazine').turn('previous');
					else if (e.keyCode==39)
						$('#magazine').turn('next');
				});
				
				/*$(".zt2").zoomTarget({
					targetsize: 2,
					duration: 600
				});*/
		
				/*$(".zt2").click(function(evt) {
					$(this).zoomTo({
						targetsize: 2,
						duration: 600
					});
					evt.stopPropagation();
					//$('.zoomTarget').attr('style', 'top: 140px');
				});*/
			});
		</script>
	</div>
	<?php if (($this->Session->check('Auth.User')) && ($this->Session->read('Auth.User.group_id') != "3")) { ?>
	<div class="tab-pane" id="fotos" style="padding-left: 50px; padding-right: 50px;">
		<div class="related">
			<?php if (!empty($item['ItemsPicture'])):?>
			<table>
			<tr>
				<!-- <th><?php __('Id'); ?></th> -->
				<th><?php __('Name'); ?></th>
				<th><?php __('Tamaño'); ?></th>
				<th><?php __('Created'); ?></th>
				<!-- <th><?php __('Modified'); ?></th> -->
				<th class="actions"><?php //__('Actions');?></th>
			</tr>
			<?php
				$i = 0;
				foreach ($item['ItemsPicture'] as $picture):
					$class = null;
					if ($i++ % 2 == 0) {
						$class = ' class="altrow"';
					}
				?>
				<tr<?php echo $class;?>>
					<!-- <td><?php echo $picture['id'];?></td> -->
					<td><?php echo $picture['picture_file_name'];?></td>
					<td><?php echo $picture['picture_file_size'];?></td>
					<td><?php echo $time->format('d-m-Y', $picture['created']);?></td>
					<!-- <td><?php echo $time->format('d-m-Y', $picture['modified']);?></td> -->
					<td class="actions">
						<?php //echo $this->Html->link(__('View', true), array('controller' => 'items_pictures', 'action' => 'view', $picture['id'])); ?>
						<?php //echo $this->Html->link(__('Edit', true), array('controller' => 'items_pictures', 'action' => 'edit', $picture['id'])); ?>
						<?php echo $this->Html->link(__('Eliminar', true), array('controller' => 'items_pictures', 'action' => 'delete', $picture['id'], $item['Item']['id']), null, sprintf(__('Desea eliminar el archivo %s?', true), $picture['picture_file_name'])); ?>
					</td>
				</tr>
			<?php endforeach; ?>
			</table>
		<?php endif; ?>
		
			<div class="actions" style="background-image: url(''); height: 100px;">
				<br />
				<ul>
					<li><?php echo $this->Html->link(__('Agregar Fotos', true), array('controller' => 'items_pictures', 'action' => 'images', $item['Item']['id']));?> </li>
				</ul>
			</div>
		<!--
			<br /><br /><br />
			<div id="wijcarousel">
				<ul>
					<?php foreach ($item['ItemsPicture'] as $picture): ?>
					<li>
						<?php echo $this->Html->image("/attachments/files/med/" . $picture['picture_file_path'], array('alt' => $picture['picture_file_name'], 'title' => $picture['picture_file_name'])); ?>
						<span>Caption</span>
					</li>
					<?php endforeach; ?>
				</ul>
			</div>
		-->
			<script id="scriptInit" type="text/javascript">
			/*$(document).ready(function () {
		            $("#wijcarousel").wijcarousel({
		                display: 3,
		                step: 2,
		                orientation: "horizontal"
		            });
		        });*/
		    </script>
		    	
			<!-- Button to trigger modal -->
		<!-- <a href="#myModal" role="button" class="btn" data-toggle="modal">Subir páginas de la obra</a> -->
		
		<!-- Modal -->
		<div id="myModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		  <div class="modal-header">
		    <!-- <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button> -->
		    <h3 id="myModalLabel">Modal header</h3>
		  </div>
		  <div class="modal-body">
		
		  </div>
		  <div class="modal-footer">
		    <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
		    <button class="btn btn-primary">Save changes</button>
		  </div>
		</div>
		
		</div>
	</div>
	<?php } ?>
</div>
 
<script type="text/javascript">
$('#myTab a').click(function (e) {
	e.preventDefault();
	$(this).tab('show');
});
</script>	
	
</div>

<?php //if (($this->Session->check('Auth.User')) && ($this->Session->read('Auth.User.group_id') != 3)) { ?>
<!-- 
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Configuration', true), array('controller' => 'configurations')); ?></li>
		<li><?php echo $this->Html->link(__('List Items', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Edit Item', true), array('action' => 'edit', $item['Item']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('New Item', true), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Item', true), array('action' => 'delete', $item['Item']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $item['Item']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Users', true), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User', true), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Topics', true), array('controller' => 'topics', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Topic', true), array('controller' => 'topics', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Types', true), array('controller' => 'types', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Type', true), array('controller' => 'types', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Authors', true), array('controller' => 'authors', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Author', true), array('controller' => 'authors', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Values', true), array('controller' => 'values', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Value', true), array('controller' => 'values', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Indicators', true), array('controller' => 'indicators', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Indicator', true), array('controller' => 'indicators', 'action' => 'add')); ?> </li>
	</ul>
</div>
-->
<?php //} ?>