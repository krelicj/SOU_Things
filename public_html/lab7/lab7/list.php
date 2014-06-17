               
<a href="index.php?action=insert">Insert a recipe</a>

<table class="table table-striped">
    <thead>
        <tr>
            <th>#</th>
            <th>Title</th>                  
            <th>Instructions</th>
			<th>Ingredients</th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($this->data as $recipe) { ?>     
        <tr>
            <td><?php echo htmlentities($recipe->id); ?></td>
            <td><?php echo htmlentities($recipe->title); ?></td>                                
            <td><?php echo htmlentities($recipe->instructions); ?></td>
			<td></td>
			<input type="hidden" name="delete" value="yes" />
			<input type="hidden" name="recipeid" value="$recipe->id" /> 
			<td><a href="index.php?delete=<?php echo $recipe->id; ?>"><button type="submit" class="btn btn-primary">Delete</button></a></td>
        </tr>                                
    <?php } ?>          
    </tbody>                
</table> 
        
<script src="http://code.jquery.com/jquery-latest.js"></script>
<script src="../lib/bootstrap/js/bootstrap.min.js"></script>
   