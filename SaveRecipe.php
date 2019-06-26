<?php
include './models/User.php';
include './models/Recipe.php';

session_start();

ini_set("display_errors",true);
include_once("config/Config.php");
class SaveRecipeController{
    
    public function execute(){
        $view=new View();
        $dao=new RecipeDAO();  
        $user=$_SESSION["user"];
        
        $extension=pathinfo($_FILES["image"]["name"],PATHINFO_EXTENSION);
         
        $recipe=new Recipe(-1,$_POST["name"],$_POST["description"],$_POST["ingredients"], $_SESSION["user"]->getEmail(), $_POST["instructions"]);
        $dao->create($recipe,$user);
        
        $recipe->setImg($recipe->getId().".".$extension);
        $dao->update($recipe);
        move_uploaded_file($_FILES["image"]["tmp_name"],"img/".$recipe->getImg());
        
        $view->render("ConfirmNewRecipe.php");
    }
}
$c=new SaveRecipeController(); 
$c->execute();

?>