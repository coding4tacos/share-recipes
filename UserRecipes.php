<?php
ini_set("display_errors",true);
include_once("config/Config.php");

 session_start();
if(isset($_SESSION["user"])){ 
    $user=$_SESSION["user"];
}

class ViewUserRecipesController {  
    public function execute(){
        
        $dao=new RecipeDAO();
        $recipes=$dao->readUserRecipes();
        
        $view=new View();
        $view->add("recipes",$recipes);
        $view->render("UserRecipesView.php");
    } 
}

$c=new ViewUserRecipesController();
$c->execute();
?>