<?php

ini_set("display_errors",true);
include_once("config/Config.php");

if(isset($_GET['id'])) {  
   $id = $_GET['id'];
} else {
    echo 'no get id';
}

class EditRecipe {
    public function execute(){
        $dao=new RecipeDAO();
        // i imagine the following line isn't the best way 
        $recipes=$dao->read($_GET['id']);
        
        $view=new View();
        $view->add("recipes",$recipes);
        $view->render("EditRecipeView.php");
    }
}

$c=new EditRecipe();
$c->execute();

