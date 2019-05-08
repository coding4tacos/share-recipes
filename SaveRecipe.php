<?php

ini_set("display_errors",true);
include_once("config/Config.php");
class AddRecipeController{
    
    public function execute(){
        $view=new View();
        $dao=new RecipeDAO();  
        $recipe=new Recipe($_POST["name"],$_POST["description"],$_POST["$ingredients"], $_POST["userID"], $_POST["instructions"], $_POST["img"]);
        $dao->create($recipe);
        // $view->render("RECIPE CREATED PAGE");
    }
    
}

$c=new DoRegisterController(); 
$c->execute();

