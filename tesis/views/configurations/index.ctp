<div class="configurations" style="text-align: center;">

	<div style="width: 100%; float: left;"><br />
		<?php echo $this->Html->link($html->image('ts/admin_obras.png', array('alt' => 'Works', 'class' => 'img-polaroid')), '/items/', array('escape' => false)); ?>
		<h5>Obras</h5>
	</div>
	<!-- 
	<div style="width: 25%; float: left;"><br />
		<?php //echo $this->Html->link($html->image('ts/admin_autores.png', array('alt' => 'Authors', 'class' => 'img-polaroid')), '/authors/', array('escape' => false)); ?>
		<h5>Autores</h5><br />
	</div>
	<div style="width: 25%; float: left;"><br />
		<?php //echo $this->Html->link($html->image('ts/admin_materiales.png', array('alt' => 'Materials Types', 'class' => 'img-polaroid')), '/types/', array('escape' => false)); ?>
		<h5>Tipos</h5><br />
	</div>
	<div style="width: 25%; float: left;"><br />
		<?php //echo $this->Html->link($html->image('ts/admin_materias.png', array('alt' => 'Topics', 'class' => 'img-polaroid')), '/topics/', array('escape' => false)); ?>
		<h5>Tópicos</h5><br />
	</div>
	-->
	
	<?php if ($this->Session->read('Auth.User.group_id') == '1') { ?>
	<div style="width: 25%; float: left;">
		<br />
		<?php echo $this->Html->link($html->image('ts/edit_txt.png', array('alt' => 'Pages', 'class' => 'img-polaroid')), '/pagetexts/', array('escape' => false)); ?>
		<h5>Páginas</h5>
	</div>
	<div style="width: 25%; float: left;">
		<br />
		<?php echo $this->Html->link($html->image('ts/admin_usuario.png', array('alt' => 'Users', 'class' => 'img-polaroid')), '/users/', array('escape' => false)); ?>
		<h5>Usuarios</h5>
	</div>
	<div style="width: 25%; float: left;">
		<br />
		<?php echo $this->Html->link($html->image('ts/admin_perfiles.jpg', array('alt' => 'Profiles', 'class' => 'img-polaroid')), '/profiles/', array('escape' => false)); ?>
		<h5>Perfiles</h5>
	</div>
	<div style="width: 25%; float: left;">
		<br />
		<?php echo $this->Html->link($html->image('ts/admin_marc21.png', array('alt' => __('Messages', true), 'class' => 'img-polaroid', 'style' => 'width: 48px')), '/messages/', array('escape' => false)); ?>
		<h5>Mensajes</h5>
	</div>
	<?php } ?>
	
	<?php if ($this->Session->read('Auth.User.group_id') == '1') { ?>
	<div style="width: 25%; float: left;">
		<?php echo $this->Html->link($html->image('ts/admin_enlace.png', array('alt' => 'Links', 'class' => 'img-polaroid')), '/links/', array('escape' => false)); ?>
		<h5>Enlaces</h5>
	</div>
	<div style="width: 25%; float: left;">
		<?php echo $this->Html->link($html->image('ts/admin_preguntas.png', array('alt' => 'Faqs', 'class' => 'img-polaroid')), '/faqs/', array('escape' => false)); ?>
		<h5>Preguntas Frecuentes</h5>
	</div>
	<div style="width: 25%; float: left;">
		<?php echo $this->Html->link($html->image('ts/logins.jpg', array('alt' => 'Visitas', 'class' => 'img-polaroid', 'style' => 'width: 50px;')), '/logins/', array('escape' => false)); ?>
		<h5>Visitas</h5>
	</div>
	<div style="width: 25%; float: left;">
		<?php echo $this->Html->link($html->image('ts/searches.jpg', array('alt' => 'Búsquedas', 'class' => 'img-polaroid', 'style' => 'width: 50px;')), '/searches/', array('escape' => false)); ?>
		<h5>Búsquedas</h5>
	</div>
	
	<div style="width: 25%; float: left;"><br />
		<?php echo $this->Html->link($html->image('ts/calendar.jpg', array('alt' => 'Eventos', 'style' => 'width: 50px', 'class' => 'img-polaroid')), '/events/', array('escape' => false)); ?>
		<h5>Eventos</h5>
	</div>
	<div style="width: 25%; float: left;"><br />
		<?php echo $this->Html->link($html->image('ts/icono_noticias.gif', array('alt' => 'Noticias', 'style' => 'width: 50px', 'class' => 'img-polaroid')), '/news/', array('escape' => false)); ?>
		<h5>Noticias</h5>
	</div>
	<div style="width: 25%; float: left;"><br />
		<?php echo $this->Html->link($html->image('ts/respaldo_bd.png', array('id' => 'btn_db', 'alt' => 'BD Backup', 'class' => 'img-polaroid', 'onclick' => 'return false;')), '', array('escape' => false)); ?>
		<h5>Respaldo de Base de Datos</h5>
		<div id="dbbackup"></div>
	</div>
	<div style="width: 25%; float: left;"><br />
		<?php echo $this->Html->link($html->image('ts/respaldo_app.png', array('id' => 'btn_site', 'alt' => 'APP Backup', 'class' => 'img-polaroid', 'onclick' => 'return false;')), '', array('escape' => false)); ?>
		<h5>Respaldo de la Aplicación</h5>
		<div id="sitebackup"></div>
	</div>
	<?php } ?>
</div>
<script type="text/javascript">
	$(document).ready(function(){
		$('.container').css('background-color', 'white');
		
		$('#btn_db').click(function(){
			$("#dbbackup").load('configurations/dbbackup');
		});
		
		$('#btn_site').click(function(){
			$("#sitebackup").load('configurations/sitebackup');
		});

	});
</script>