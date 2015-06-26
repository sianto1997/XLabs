<div class="results">
	<h1>Resultaten voor: <?php echo $query; ?></h1>
	<?php
	//echo $this->viewVars;
    foreach ($result as $key => $value) {
    	//echo $this->result;
   // echo $this->element('Results');
   // echo $this->element('result');
   // echo $this->Code->query($sql);
   ?>
    <div class="row">
		<a href="results/page/<?php echo $value['Result']['id']; ?>"><p class="title"><?php echo $value['Result']['code']; ?></a>
		<p class="description"><?php echo $value['Result']['description']; ?></p>
	</div>
	<?php
		};
	?>
    
</div>