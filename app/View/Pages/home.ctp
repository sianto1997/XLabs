<?php
echo $this->Html->script('jquery');
echo $this->Html->script('modalScript');
echo $this->Html->charset();
echo $this->Html->css('homeStyle');

?>

<head>
	<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
</head>

<body>
<div class="wrapper">

  

  <div class="two-column">
    <div class="center">
      <div class="two-hightpos">

        <!-- XLABS LOGO -->
        <!-- there isnt an url yet -->
        <div class="noselect centered">
          <?php
          echo $this->Html->link(
              $this->Html->image('logo.png'),
              'http://www.google.com',
              array('target' => '_blank', 'escape' => false, 'id' => ''));
          ?>
        </div>
        <!-- END LOGO -->

        <!-- BUTTONS FOR LOGIN AND REGISTER -->
        <!-- Redirect moet gefixt worden !!!!!!!!! -->
        <a href="/xlabs/login">
          <button class="login-button">
      		    Login
          </button>
        </a>
        <!-- END BUTTONS -->

      </div>
    </div>
  </div>

  <!-- MODAL -->
  <div class="modale" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-header">
        <h2>Login</h2>
        <a href="#" class="modal-closebutton closemodale" aria-hidden="true">&times;</a>
      </div>
      <div class="modal-body">
        <input type="text" name="u" placeholder="User" size="20" /><br>
        <input type="password" name="p" placeholder="&bull;&bull;&bull;&bull;" size="20" /></div>
        <button href="#" class="modal-button" id="btn_ingresar">Login</button>
      </div>
    </div>
  </div>
  <!-- END MODAL-->


</div>
</body>