<?php

$title = __d('cake_dev', 'XLabs ');
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
		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
</head>

<body>
	<div id="container">
		<div>	
			<?php echo $this->Session->flash(); ?>
			
			<?php echo $this->fetch('content'); ?>
		</div>
	</div>
</body>

</html>