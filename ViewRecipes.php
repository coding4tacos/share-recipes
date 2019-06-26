<?php
ini_set("display_errors",true);
include_once("config/Config.php");

class ViewRecipes {  
    public function execute(){
        
        $dao=new RecipeDAO();
        $recipes=$dao->readAll();
        
        $view=new View();
        $view->add("recipes",$recipes);
        $view->render("AllRecipesView.php");
    } 
}

$c=new ViewRecipes();
$c->execute();
?>