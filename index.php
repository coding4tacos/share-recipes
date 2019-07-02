<?php

ini_set("display_errors",true);
include_once("config/Config.php");

class indexController {  
    public function execute(){
        $dao=new RecipeDAO();
        $recipes=$dao->readFeatured();
        $allRecipes=$dao->readAll();
        
        $view=new View();
        $view->add("recipes",$recipes);
        $view->add("allRecipes", $allRecipes);
        $view->render("IndexView.php");
    } 
}

$c=new indexController();
$c->execute();


