<?php

ini_set("display_errors",true);
include_once("config/Config.php");
class indexController{
    
    public function execute(){
        
        $dao=new RecipeDAO();
        $recipes=$dao->readeFeatured();
        
        $view=new View();
        $view->add("recipes",$recipes);
        $view->render("IndexView.php");
    }
    
}

$c=new indexController();
$c->execute();


