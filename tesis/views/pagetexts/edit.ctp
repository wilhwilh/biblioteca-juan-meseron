<!--
<link href="../../webroot/css/wijmo/themes/wijmo/jquery.wijmo-open.2.2.1.css" rel="stylesheet" type="text/css" />
<link href="../../webroot/css/wijmo/themes/wijmo/jquery.wijmo.wijtabs.css" rel="stylesheet" type="text/css" />
<link href="../../webroot/css/wijmo/themes/wijmo/jquery.wijmo.wijsplitter.css" rel="stylesheet" type="text/css" />
<link href="../../webroot/css/wijmo/themes/wijmo/jquery.wijmo.wijribbon.css" rel="stylesheet" type="text/css" />
<link href="../../webroot/css/wijmo/themes/wijmo/jquery.wijmo.wijeditor.css" rel="stylesheet" type="text/css" />
<script src="../../webroot/js/wijmo/jquery.wijmo.wijtabs.js" type="text/javascript"></script>
<script src="../../webroot/js/wijmo/jquery.wijmo.wijsplitter.js" type="text/javascript"></script>
<script src="../../webroot/js/wijmo/jquery.wijmo.wijribbon.js" type="text/javascript"></script>
<script src="../../webroot/js/wijmo/jquery.wijmo.wijeditor.js" type="text/javascript"></script>
-->
<?php echo $this->Html->script('tiny_mce/tiny_mce'); ?>
<script type="text/javascript">
tinyMCE.init({
        mode : "textareas",
        theme : "advanced",
        language : "es"
});
</script>

<div style="padding-left: 50px; padding-right: 50px;">

<div class="pagetexts form">
<?php echo $this->Form->create('Pagetext');?>
	<fieldset>
		<legend><?php __('Edit Pagetext'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('title');
		echo $this->Form->input('description', array('style' => 'width: 100%; height: 400px;'));
		echo "<br />";
		echo $this->Form->input('enabled', array('label' => 'Activa'));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<!-- <h3><?php __('Actions'); ?></h3> -->
	<br />
	<ul>
		<!-- <li><?php //echo $this->Html->link(__('Configuration', true), array('controller' => 'configurations')); ?></li> -->
		<li><?php echo $this->Html->link(__('Páginas', true), array('action' => 'index'));?></li>
		<!-- <li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('Pagetext.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('Pagetext.id'))); ?></li> -->
	</ul>
</div>
<div style="clear: both;"><?php echo $this->Html->image('ts/pestana_revistas.jpg'); ?><br /><br /></div>
</div>
<script type="text/javascript">
	//$(document).ready(function () {
    //    $("#PagetextDescription").wijeditor({
    //        editorMode: "wysiwyg",
    //        //fullScreenContainerSelector: "container",
    //        showPathSelector: false
    //    });
    //});
</script>