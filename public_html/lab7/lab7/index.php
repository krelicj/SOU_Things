<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

require_once 'recipemodel.php';
require_once 'view.php';

include_once 'conn.php';
$conn = Database::get_connection();

//display form
if ($_SERVER['REQUEST_METHOD'] == "GET" && (isset($_GET['action']) && $_GET['action']=="insert")) {
	$pageName='form';
	$pageData=NULL;
	$viewObject = new View($pageName, $pageData);
	$viewObject->render();
}
//display thank you
elseif ($_SERVER['REQUEST_METHOD'] == "POST" && (isset($_GET['action']) && $_GET['action']=="insert")) {
	$pageName='thanks';
	$pageData=new RecipeModel();
	$viewObject = new View($pageName, $pageData);
	$viewObject->render();
	$pageData->insertRecipe();
}

//remove a recipe
elseif ($_SERVER['REQUEST_METHOD'] == "GET" && (isset($_GET['delete']))){
	$pageName='list';
	$pageData = new RecipeModel();
	$viewObject = new View($pageName, $pageData);
	$viewObject->render();
	$pageData->deleteRecipe($_GET['delete']);
	$pageData=$pageData->findAll();
	$viewObject = new View($pageName, $pageData);
	$viewObject->render();
}

//display list
else {
	$pageName='list';
	$object = new RecipeModel();
	$pageData=$object->findAll();
	$viewObject = new View($pageName, $pageData);
	$viewObject->render();
}
?>

