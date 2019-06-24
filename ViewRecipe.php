<?php
ini_set("display_errors",true);
include_once("config/Config.php");

if(isset($_GET['id'])) {
   $id = $_GET['id'];
}

class ViewRecipe {
    public function execute(){
        global $id;
        $dao=new RecipeDAO();
        $recipes=$dao->read($id);
        
        $view=new View();
        $view->add("recipes",$recipes);
        $view->render("RecipeView.php");
    }
}

$c=new ViewRecipe();
$c->execute();

?>