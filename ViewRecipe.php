<?php

ini_set("display_errors",true);
include_once("config/Config.php");
class ViewRecipe {
    
    public function execute(){
        $dao=new RecipeDAO();
        $recipes=$dao->read(1);
        
        $view=new View();
        $view->add("recipes",$recipes);
        $view->render("RecipeView.php");
    }
    
}

$c=new ViewRecipe();
$c->execute();

