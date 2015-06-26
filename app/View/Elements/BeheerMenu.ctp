<!-- <div class="one-column">
</div>
<div class="two-column">
	<a href="<?= $this->Html->url(array('controller' => 'beheerpaneel', 'action' => 'index')); ?>"><div class="menu-button-style">
		Dashboard
	</div> </a>
	<a href="<?= $this->Html->url(array('controller' => 'import', 'action' => 'importCustomsDuties')); ?>"> <div class="menu-button-style">
		Import Database 
	</div> </a>

	<a href="<?= $this->Html->url(array('controller' => 'import', 'action' => 'excel')); ?>"> <div class="menu-button-style">
		Import Excel 
	</div> </a>

	<a href="<?= $this->Html->url(array('controller' => 'beheerpaneel', 'action' => 'gebruikers')); ?>"><div class="menu-button-style">
		Gebruikers
	</div> </a>
	<a href="<?= $this->Html->url(array('controller' => '', 'action' => 'users/logout')); ?>"><div class="menu-button-style">
		Uitloggen
	</div> </a>
	
</div> -->

<ul class="sellpanelmenu">
	<a href="<?= $this->Html->url(array('controller' => 'beheerpaneel', 'action' => 'index')); ?>"><li>Dashboard</li></a>
	<a href="<?= $this->Html->url(array('controller' => 'beheerpaneel', 'action' => 'index')); ?>"><li>Programmes</li></a>
	<a href="<?= $this->Html->url(array('controller' => 'beheerpaneel', 'action' => 'index')); ?>"><li>Feedback Center</li></a>
	<a href="<?= $this->Html->url(array('controller' => 'users', 'action' => 'logout')); ?>"><li>Sign out</li></a>
</ul>