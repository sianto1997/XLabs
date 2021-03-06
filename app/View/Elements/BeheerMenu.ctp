
<?php if ($pages) {?>

<script>
//Firstclick is neccesary for opening the overlay
$firstClick = false;
//Close all overlays unless it is just open
function CloseAll() {
	if (Account("isOpen")() == true && $firstClick == false || Notifications("isOpen")() == true && $firstClick == false || Apps("isOpen")() == true && $firstClick == false){
		Account("close")();
		Notifications("close")();
		Apps("close")();
	} else if (Account("isOpen")() == true && $firstClick == true || Notifications("isOpen")() == true && $firstClick == true || Apps("isOpen")() == true && $firstClick == true) {
		$firstClick = false;
	}
}
//When you click on one of the overlays it stays open
function ObjectClick() {
	$firstClick = true;
}

function Apps(fname) {
	
	var isOpen = function() {
		if (document.getElementById('apps').getAttribute('class') === 'meflyout open') {
			return true;
		}

		return false;
	};
	var close  = function() {
		document.getElementById('apps').setAttribute('class', 'meflyout');
		document.getElementById('apps-pic').setAttribute('class', 'accountbaritem');
	};

	var open  = function() {

		document.getElementById('apps').setAttribute('class', 'meflyout open');
		document.getElementById('apps-pic').setAttribute('class', 'accountbaritem opened');
		$firstClick = true;
	};

	//Click default
	var click = function() { 
		if (isOpen() === false) {
			CloseAll();
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
	else if (fname == "isOpen") {
		return isOpen;
	}
	
}

function Account(fname) {
	
	var isOpen = function() {
		if (document.getElementById('account').getAttribute('class') === 'meflyout open') {
			return true;
		}

		return false;
	};
	var close  = function() {
		document.getElementById('account').setAttribute('class', 'meflyout');
		document.getElementById('account-pic').setAttribute('class', 'accountbaritem');
	};

	var open  = function() {

		document.getElementById('account').setAttribute('class', 'meflyout open');
		document.getElementById('account-pic').setAttribute('class', 'accountbaritem opened');
		$firstClick = true;
	};

	//Click default
	var click = function() { 
		if (isOpen() === false) {
			CloseAll();
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
	else if (fname == "isOpen") {
		return isOpen;
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
		document.getElementById('notifications-pic').setAttribute('class', 'accountbaritem');
	};

	var open  = function() {

		document.getElementById('notifications').setAttribute('class', 'meflyout open');
		document.getElementById('notifications-pic').setAttribute('class', 'accountbaritem opened');
		$firstClick = true;
	};

	//Click default
	var click = function() { 
		if (isOpen() === false) {
			CloseAll();
			open();
		}
		else {
			close();
		} 

	};
	var changeIcon = function() { 
		if (document.getElementById('notificationsIcon').getAttribute('src') === '/xlabs/img/notifications-off.png'){
			document.getElementById('notificationsIcon').setAttribute('src','/xlabs/img/notifications-on.png');
		}
		else {
			document.getElementById('notificationsIcon').setAttribute('src','/xlabs/img/notifications-off.png');
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

	else if (fname == "isOpen") {
		return isOpen;
	}
	
}


</script>
<div class="accountbar" onClick="">
	<a class="accountbaritem" id="account-pic" onClick="Account('click')()">
	
		<accountname>admin</accountname>
		<?php echo $this->Html->image('default_profile_pic.png', array('class' => 'accountbarprofilepic'))?>
	</a>
	<a class="accountbaritem" id="notifications-pic" onClick="Notifications('click')()">
		<?php echo $this->Html->image('notifications-off.png', array('class' => 'npic', 'id' => 'notificationsIcon'))?>
	</a>
	<a class="accountbaritem" id="apps-pic" onClick="Apps('click')()">
		<?php echo $this->Html->image('apps.png', array('class' => 'npic', 'id' => 'appsIcon'))?>
	</a>
	
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
	

	

</ul>

</div>

 <?php if ($pages) {?>
<div class="meflyout" id="account" onClick="ObjectClick()" data-truncated="true">
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

<div class="meflyout" id="notifications" onClick="ObjectClick()" >
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

<div class="meflyout" id="apps" onClick="ObjectClick()" >
	<div class="toparrow" id="apps" >
		<div class="toparrowinside"  >
		</div>
	</div>
	<section data-aop="section">
		<h3>Apps</h3>
		<div>
</div>
</section>
<ul class="appsdisplay">
	<a href="<? echo $this->Html->url(array('controller' => 'Avenue', 'action' => 'index')); ?>">
		<li class="appsarea" >
			<?php echo $this->Html->image('proj-avenue.png', array('class' => 'appsimg', 'id' => ''))?>
			Project AVENUE
				
		</li>
	</a>
	<a>
		<li class="appsarea" >
			<?php echo $this->Html->image('proj-m.png', array('class' => 'appsimg', 'id' => ''))?>
			Project M
		</li>
	</a>
	<a href="<? echo $this->Html->url(array('controller' => 'Dashboard', 'action' => 'index')); ?>">
		<li class="appsarea" >
			<?php echo $this->Html->image('proj-xlabs.png', array('class' => 'appsimg', 'id' => ''))?>
			XLabs
		</li>
	</a>
</ul>
</div>
<?php } ?>
 