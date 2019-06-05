
<?php
include './models/User.php';
include './models/Recipe.php';

session_start();

ini_set("display_errors",true);
include_once("config/Config.php");
class SaveEdit {
    
    public function execute(){
        $view=new View();
        $dao=new RecipeDAO();  
        
        $extension=pathinfo($_FILES["image"]["name"],PATHINFO_EXTENSION);
      
        $recipe=new Recipe($_POST["id"],$_POST["name"],$_POST["description"],$_POST["ingredients"], $_SESSION["user"]->getEmail(), $_POST["instructions"]);
        $dao->update($recipe);
        /*
        
        $recipe->setImg($recipe->getId().".".$extension);
        $dao->update($recipe);
        move_uploaded_file($_FILES["image"]["tmp_name"],"img/".$recipe->getImg());
        */
        $view->render("ConfirmNewRecipe.php");
    }
    
}
$c=new SaveEdit(); 
$c->execute();

?>
