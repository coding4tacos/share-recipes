
<?php
include './models/User.php';
session_start();
if(isset($_SESSION["user"])) {
    echo 'yup';
} else {
    echo 'nope';
}

ini_set("display_errors",true);
include_once("config/Config.php");
class AddRecipeController{
    
    public function execute(){
        $view=new View();
        $dao=new RecipeDAO();  
        $recipe=new Recipe($_POST["name"],$_POST["description"],$_POST["ingredients"], $_SESSION["user"]->getEmail(), $_POST["instructions"], $_POST["images"]);
        $dao->create($recipe);
        $view->render("IndexView.php");
    }
    
}
$c=new AddRecipeController(); 
$c->execute();

?>
