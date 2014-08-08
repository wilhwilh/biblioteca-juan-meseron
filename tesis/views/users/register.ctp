<script type="text/javascript">
	function validate (){
		if ($('#UserName').val().length < 1){
			$('#UserName').focus();
			alert('Por favor ingrese su nombre.');
			return false;
		}
		if ($('#UserLastname').val().length < 1){
			$('#UserLastname').focus();
			alert('Por favor ingrese su apellido.');
			return false;
		}
		if ($('#UserProfileId').val().length < 1){
			$('#UserProfileId').focus();
			alert('Por favor seleccione su perfil.');
			return false;
		}
		if ($('#UserEmail').val().length < 1){
			$('#UserEmail').focus();
			alert('Por favor ingrese su email.');
			return false;
		}
		if ($('#UserUsername').val().length < 1){
			$('#UserUsername').focus();
			alert('Por favor ingrese su nombre de usuario.');
			return false;
		}
		if ($('#UserPassword').val().length < 1){
			$('#UserPassword').focus();
			alert('Por favor ingrese su contraseña.');
			return false;
		}
		if ($('#UserCountryId').val().length < 1){
			$('#UserCountryId').focus();
			alert('Por favor seleccione su país.');
			return false;
		}
		if ($('#UserCity').val().length < 1){
			$('#UserCity').focus();
			alert('Por favor ingrese su ciudad.');
			return false;
		}
		if ($('#UserPostalCode').val().length < 1){
			$('#UserPostalCode').focus();
			alert('Por favor ingrese su código postal.');
			return false;
		}
		if ($('#UserGender').val().length < 1){
			$('#UserGender').focus();
			alert('Por favor seleccione su sexo.');
			return false;
		}
		return true;
	}
</script>
<ul class="breadcrumb" style="margin: 0">
  <li><a href="<?php echo $this->base; ?>">Inicio</a> <span class="divider">/</span></li>
  <li>Registro de Usuario<span class="divider">/</span></li>
</ul>

<div align="center" style="height: 26px; padding-top: 5px; color: white; font-size: 18px; background: -webkit-linear-gradient(#A89587, #55473C); background: -moz-linear-gradient(#A89587, #55473C); background: -o-linear-gradient(#A89587, #55473C);"><strong>Registro de Usuario</strong></div>

<br />
<div class="users">
<?php echo $this->Form->create('User', array('onsubmit' => 'return validate();'));?>
	<fieldset>
	<!-- <legend><?php __('Register'); ?></legend> -->
	<?php
		echo $this->Form->hidden('group_id', array('selected' => '2'));
		//echo $this->Form->input('last_login');
		echo $this->Form->hidden('active', array('value' => '1'));
		//echo $this->Form->input('ip');
	?>
	<div>
		<div style="width: 33%; float: left;">
			<?php
				echo $this->Form->input('name');
				echo $this->Form->input('email');
				echo $this->Form->input('country_id', array('selected' => '232', 'style' => 'width: 95%', 'empty' => 'Seleccione'));
				echo $this->Form->hidden('country');
				echo $this->Form->input('postal_code');
			?>
		</div>
		<div style="width: 33%; float: left;">
			<?php
				echo $this->Form->input('lastname');
				echo $this->Form->input('username');
				echo $this->Form->input('city');
				echo $this->Form->input('gender', array('options' => array('Male' => 'Hombre', 'Female' => 'Mujer'), 'style' => 'width: 95%', 'empty' => 'Seleccione'));
			?>
		</div>
		<div style="width: 33%; float: left;">
			<?php
				echo $this->Form->input('profile_id', array('selected' => '4', 'style' => 'width: 95%', 'empty' => 'Seleccione'));
				echo $this->Form->input('password');
				echo $this->Form->input('address');
				echo $this->Form->hidden('ip', array('value' => $_SERVER['REMOTE_ADDR']));
			?>
		</div>
	</div>
	</fieldset>
	<?php echo $this->Form->button(__('Register', true), array('class' => 'btn btn-primary'));?>
<?php echo $this->Form->end();?>
<br />
</div>
<!--
<div class="actions">
	<ul>
		<li><?php echo $this->Html->link(__('List Users', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Groups', true), array('controller' => 'groups', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Group', true), array('controller' => 'groups', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Profiles', true), array('controller' => 'profiles', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Profile', true), array('controller' => 'profiles', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Countries', true), array('controller' => 'countries', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Country', true), array('controller' => 'countries', 'action' => 'add')); ?> </li>
	</ul>
</div>
-->