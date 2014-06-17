<?php

require_once 'model.php';

class Recipe{
	public $id;
	public $title;
	public $instructions;
	
	function __construct($id, $title, $instructions) {
		$this->id = $id;
		$this->title = $title;
		$this->instructions = $instructions;
	}
}

class RecipeModel extends Model{
	function findAll() {
		$conn = Database::get_connection();
		$query = "SELECT * from recipe";
		//$query = "SELECT recipe.id, recipe.title, recipe.instructions FROM recipe INNER JOIN ingredient ON recipe.id=ingredient.id ORDER by recipe.id";
		$res = $conn->query($query);
		
		while ($row = $res->fetch_assoc()) {
			$results[] = new Recipe(
			$row['id'],
            $row['title'],
			$row['instructions']
            );
		}
		//go through recipe objects for each loop -> get ingredients for each one
		//add ingredient model
			//function find_ingredients_by_recipe_id
					//give it id runs by recipe id
		return $results;
	}
	
	function insertRecipe() {
		$conn = Database::get_connection();
		$query = $conn->prepare("INSERT INTO recipe (title, instructions) VALUES (?, ?)");
		$query->bind_param('ss', $_POST['title'], $_POST['instructions']);
		$query->execute();
		
		foreach ($ingredient as $item) {
			$query2 = $conn->prepare("INSERT INTO ingredient (name) VALUES (?)");
			$query2->bind_param('s', $_POST['ingredient']);
			$query2->execute();
		}
	}
	
	function deleteRecipe($id) {
		$conn = Database::get_connection();
		$query = $conn->prepare("DELETE FROM recipe
								WHERE id=?");
		$query->bind_param('i', $id);
		$query->execute();
		$query2 = $conn->prepare("DELETE FROM recipe_ingredient
								  WHERE recipe=?");
		$query2->bind_param('i', $id);
		$query2->execute();
	}
}

?>