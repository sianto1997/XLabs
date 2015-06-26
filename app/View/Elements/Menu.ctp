<ul class="sellpanelmenu">
	<a href="<?= $this->Html->url(array('controller' => 'account', 'action' => 'index')); ?>"><li>Mijn Account</li></a>
	<a href="<?= $this->Html->url(array('controller' => 'verkooppaneel', 'action' => 'summary')); ?>"><li>Overzicht</li></a>
	<a href="<?= $this->Html->url(array('controller' => 'users', 'action' => 'logout')); ?>"><li>Uitloggen</li></a>
</ul>