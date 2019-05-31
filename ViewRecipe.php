<?php

ini_set("display_errors",true);
include_once("config/Config.php");


if(isset($_GET['id'])) {
    echo 'yeeeess!';
    
   $id = $_GET['id'];
}



class ViewRecipe {
    
    public function execute(){
        $dao=new RecipeDAO();
        // i imagine the following line isn't the best way 
        $recipes=$dao->read($_GET['id']);
        
        $view=new View();
        $view->add("recipes",$recipes);
        $view->render("RecipeView.php");
    }
    
}

$c=new ViewRecipe();
$c->execute();

