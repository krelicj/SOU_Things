<h2>Thank you for submitting <i><?php echo htmlentities($_POST['title']); ?></i></h2> 		
<h3>Ingredients</h3>
	<?php foreach ($this->data as $ingredient) { ?> 
	<ul>
		<li><?php echo htmlentities($_POST['ingredient']); ?></li>
	<?php } ?> 
	</ul>
<h3>Instructions</h3>
	<?php echo htmlentities($_POST['instructions']); ?>
	
<br /><br />
	
<a href="index.php">Return to recipe list</a> 