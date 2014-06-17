<form action="index.php?action=insert" method="post">
	<fieldset>
		   <legend>Insert a recipe</legend>
					
			<label>Title</label>
		    <input class="input-xxlarge" type="text" placeholder="Spaghetti" name="title">
		    				    		
		    		
			<label>Ingredients</label>
		    <div><input class="input-xlarge" type="text" placeholder="Ingredient" name="ingredient[]"></div>
		    <div><input class="input-xlarge" type="text" placeholder="Ingredient" name="ingredient[]"></div>
		    <div><input class="input-xlarge" type="text" placeholder="Ingredient" name="ingredient[]"></div>
			<div><input class="input-xlarge" type="text" placeholder="Ingredient" name="ingredient[]"></div>
			<div><input class="input-xlarge" type="text" placeholder="Ingredient" name="ingredient[]"></div>
		    				    		
		    <label>Instructions</label>
		    <div><textarea name="instructions" class="input-block-level" rows="5"></textarea></div>		    		
		    		
		    <button type="submit" class="btn btn-primary">Submit</button>
	</fieldset>
</form>

<a href="index.php">Return to recipe list</a>