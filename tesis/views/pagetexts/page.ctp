<ul class="breadcrumb">
    <li>
    	<?php echo $this->Html->link(__('Inicio', true), array('controller' => 'pages')); ?>
    	<span class="divider">/</span>
    </li>
    <li class="active">
    	<?php echo $text['Pagetext']['title']; ?>
    </li>
</ul>

<?php //if ($text['Pagetext']['enabled']) { ?>
<div class="pagetexts" style="padding-left: 10%; padding-right: 10%; padding-top: 0%; padding-bottom: 5%">
	<div id="message" style="width: 50%; float: left; <?php if ($text['Pagetext']['id'] != '13') {echo "display: none";} ?>">
	<?php echo $this->Form->create('Message', array('controller' => 'messages', 'action' => 'add'));?>
		<fieldset>
			<h3><?php __('Contacto'); ?></h3>
			<?php
				if ($this->Session->read('Auth.User')) {
					echo $this->Form->input('name', array('label' => 'Nombre', 'value' => $this->Session->read('Auth.User.name') . " " . $this->Session->read('Auth.User.lastname'), 'disabled' => 'disabled'));
					echo $this->Form->input('email', array('label' => 'Correo Electrónico', 'value' => $this->Session->read('Auth.User.email'), 'disabled' => 'disabled'));
					echo $this->Form->input('subject', array('label' => 'Asunto'));
					echo $this->Form->input('message', array('label' => 'Mensaje', 'type' => 'textarea'));
				} else {
					echo $this->Form->input('name', array('label' => 'Nombre'));
					echo $this->Form->input('email', array('label' => 'Correo Electrónico'));
					echo $this->Form->input('subject', array('label' => 'Asunto'));
					echo $this->Form->input('message', array('label' => 'Mensaje', 'type' => 'textarea'));
				}
			?>
		</fieldset>
		<br />
	<?php echo $this->Form->button(__('Enviar', true));?>
	&nbsp;
	<?php echo $this->Form->button(__('Restaurar', true), array('type' => 'reset'));?>
	<?php echo $this->Form->end();?>

	</div>
	
	<div id="info" style="<?php if ($text['Pagetext']['id'] != '13') {echo "width: 100%;";} else {echo "width: 50%;";} ?> float: left;">
		<h2 style="text-align: center;"><?php echo $text['Pagetext']['title']; ?></h2>
		<?php
			echo $text['Pagetext']['description'];
		?>
	</div>
</div>

<div style="clear: both;"></div>

<?php //} else { ?>
	<!-- <p style="text-align: center;">
		<br />P&aacute;gina Inactiva.<br /><br />
	</p> -->
<?php //} ?>