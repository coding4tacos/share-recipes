
<?php
include './models/User.php';
include './models/Recipe.php';

session_start();
if(isset($_SESSION["user"])) {
    echo 'yup';
} else {
    echo 'nope';
}

if(isset($_FILES['image'])) {
    echo 'its set!';
} else {
    echo 'noooo';
}

ini_set("display_errors",true);
include_once("config/Config.php");
class AddRecipeController{
    
    public function execute(){
        $view=new View();
        $dao=new RecipeDAO();  
        $recipe=new Recipe($_POST["name"],$_POST["description"],$_POST["ingredients"], $_SESSION["user"]->getEmail(), $_SESSION["user"]->getEmail(), $_POST["instructions"], $_FILES['image']);
        $dao->create($recipe);
        $view->render("RegisterOK.php");
    }
    
}
$c=new AddRecipeController(); 
$c->execute();

?>
