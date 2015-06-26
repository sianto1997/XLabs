<div class="single-result">
	<h1>Geopend resultaat: <?php echo $record['code']; ?></h1>
    <div class="row">
		<p class="description">


			<?php 
			foreach ($record as $key => $innerValue) {
				
				echo $key .": " . $innerValue . "<br />";
			}

			//echo $value[0]['Result']['description']; 
			?>
			</p>
			<p class="description">
		<?php foreach ($chapters[0]['Result'] as $key => $innerValue) {
				
				echo $key .": " . $innerValue . "<br />";
			}

?>
		</p>
	</div>
    
</div>