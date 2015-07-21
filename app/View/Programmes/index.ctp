<?php

echo $this->Html->charset();
echo $this->Html->css('beheerStyle');

echo $this->Html->css('account-test');
?>

<head>
<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
</head>

<body>


<?php //echo $this->element('BeheerMenu'); ?>

<!--Deze text is  filler -->
<h2>Welcome to our programmes page</h2>
<p>Pick one of the programmes below to join them.</p>



<div>
<?php 
var_dump($available_programmes); ?>
</div>
</body>

<footer></footer>