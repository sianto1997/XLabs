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

  <div class="one-column">
    <div class="homecontent one-hightpos">

      <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui.</p>
      <p>Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus. Nullam quis ante. Etiam sit amet orci eget eros faucibus tincidunt. Duis leo. Sed fringilla mauris sit amet nibh. Donec sodales sagittis magna. Sed consequat, leo eget bibendum sodales, augue velit cursus nunc, quis gravida magna mi a libero. Fusce vulputate eleifend sapien. Vestibulum purus quam, scelerisque ut, mollis sed, nonummy id, metus. Nullam accumsan lorem in dui. Cras ultricies mi eu turpis hendrerit fringilla. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; In ac dui quis mi consectetuer lacinia.</p>
      

    </div>
  </div>

  <div class="two-column">
    <div class="center">
      <div class="two-hightpos">

        <!-- XLABS LOGO -->
        <!-- there isnt an url yet -->
        <div class="noselect">
          <?php
          echo $this->Html->link(
              $this->Html->image('logo.png'),
              'http://www.google.com',
              array('target' => '_blank', 'escape' => false, 'id' => ''));
          ?>
        </div>
        <!-- END LOGO -->

        <div class="motto">
          <h2>Een database vol met inhoud</h2>
        </div>

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