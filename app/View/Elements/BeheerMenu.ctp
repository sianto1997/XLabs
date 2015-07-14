
<?php if ($pages) {?>
<script>
function Account(fname) {
	
	var isOpen = function() {
		if (document.getElementById('account').getAttribute('class') === 'meflyout open') {
			return true;
		}

		return false;
	};
	var close  = function() {
		document.getElementById('account').setAttribute('class', 'meflyout');
	};

	var open  = function() {

		document.getElementById('account').setAttribute('class', 'meflyout open');
	};

	//Click default
	var click = function() { 
		if (isOpen() === false) {
			Notifications("close")();
			open();
		}
		else {
			
			close();
		} 

	};
	if (fname == "click") {
		return click;
	}
	else if (fname == "close") {
		return close;
	}
	
}
function Notifications(fname) {
		
	var isOpen = function() {
		if (document.getElementById('notifications').getAttribute('class') === 'meflyout open') {
			return true;
		}

		return false;
	};
	var close  = function() {
		document.getElementById('notifications').setAttribute('class', 'meflyout');
	};

	var open  = function() {

		document.getElementById('notifications').setAttribute('class', 'meflyout open');
	};

	//Click default
	var click = function() { 
		if (isOpen() === false) {
			Account("close")();
			open();
		}
		else {
			close();
		} 

	};
	var changeIcon = function() { 
		if (document.getElementById('notificationsIcon').getAttribute('src') === '/xlabs/img/notifications-off.png'){
			document.getElementById('notificationsIcon').setAttribute('src','/xlabs/img/notifications-on.png');
			document.getElementById('notificationsIcon').setAttribute('class','npic-on');
		}
		else {
			document.getElementById('notificationsIcon').setAttribute('src','/xlabs/img/notifications-off.png');
			document.getElementById('notificationsIcon').setAttribute('class','npic');
		}

	};
	if (fname == "click") {
		return click;
	}
	else if (fname == "close"){
		return close;
	}
	else if (fname == "newAlerts") {
		return changeIcon;
	}
	
}


</script>
<div class="accountbar" onClick="myFunction()">
	<li><a onClick="Notifications('click')()"><?php echo $this->Html->image('notifications-off.png', array('class' => 'npic', 'id' => 'notificationsIcon'))?></a></li>
	<li><a onClick="Account('click')()">admin</a></li>
	<li><a onClick="Account('click')()"><?php echo $this->Html->image('default_profile_pic.png', array('class' => 'accountbarprofilepic'))?></a></li>
</div>


<?php } ?>
<div class="bottomtopbar menubargeneral menubarbackground">
</div>
<div class="topmenubar menubargeneral menubarbackground">

<?php  
         echo 
          $this->Html->image('stripe-hq2.png',array('class' => 'stripe menubarbackground'));
			?>
<ul class="sellpanelmenu">

	<?php 

	if ($pages) {
		foreach ($pages as $controller) {
			?>
		<a href="
		<?= $this->Html->url(array('controller' => $controller, 'action' => 'index')); ?>" <?php if (strtolower($this->params['controller']) !== $controller) {?>
			class="inactivetab"

			<?php } ?>>
		<li <?php if (strtolower($this->params['controller']) == $controller){ ?>
			class="currenttab"
			<?php } else {?>
			class="inactivetab"
			<?php }?>

			 >
			 <?php echo $controller?></li></a>
			 <?php
		}
	}
	?>
	

	
	<div class="extraspace">
</div>
</ul>

</div>

 <?php if ($pages) {?>
<div class="meflyout" id="account" data-truncated="true">
	<div class="toparrow" id="accounts" >
		<div class="toparrowinside"  >
		</div>
	</div>
	<section data-aop="section">
			<h3>My Account</h3>
	</section>

	<?php echo $this->Html->image('default_profile_pic.png', array('class' => 'profilepiclarge'))?>

	<p>Admin</p>
		<a href="<? echo $this->Html->url(array('controller' => 'users', 'action' => 'logout')); ?>" class="settingsbutton button">
			Settings
	
		</a>
		<a href="<? echo $this->Html->url(array('controller' => 'users', 'action' => 'logout')); ?>" class="signoutbutton button">
			Sign out
	
		</a>
</div>

<div class="meflyout" id="notifications">
	<div class="toparrow" id="notifications" >
		<div class="toparrowinside"  >
		</div>
	</div>
	<section data-aop="section">
		<h3>Notifications</h3>
		<div>
</div>
</section>
<ul>
	<li>
		<a onClick="Notifications('newAlerts')()">Clear all</a>
	</li>
	<li>
		Settings
	</li>
</ul>
</div>
<?php } ?>
 