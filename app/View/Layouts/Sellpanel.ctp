<?php

$title = __d('cake_dev', 'Customs Knowledge ');
?>
<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo $title ?>:
		<?php echo $this->fetch('title'); ?>
	</title>
	<?php
		echo $this->Html->meta('icon');
		echo $this->Html->script('jquery');
		echo $this->Html->script('searchScript');
		echo $this->Html->css('cake.generic');

		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
</head>
<body>
	<div id="container">
		<div id="header">
			<?php 
				 echo $this->Html->link(
					$this->Html->image('logo.png', array('width' => '200')),
					'http://www.google.nl/',
					array('target' => '_blank', 'escape' => false, 'id' => '')
				);
			?>
			
			<?php if ($this->Session->read("Auth.User.role") == 'admin') {
				echo $this->element('beheermenu');
			}else{
				echo $this->element('credits');
				echo $this->element('menu');
				} ?>
		</div>
		<div id="content">		
			<?php echo $this->Session->flash(); ?>
			
			<?php echo $this->fetch('content'); ?>
		</div>
		<div id="footer">
			
		</div>
	</div>
	<?php echo $this->element('sql_dump'); ?>
</body>
</html>
