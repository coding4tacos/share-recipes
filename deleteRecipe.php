
<?php
include './models/User.php';
include './models/Recipe.php';

session_start();
if(isset($_GET['id'])) {
   $id = $_GET['id'];
}

ini_set("display_errors",true);
include_once("config/Config.php");
class DeleteRecipe {
    
    public function execute(){
        global $id; 
        $view=new View();
        $dao=new RecipeDAO();  
        $recipes=$dao->delete($id);
        
        $view->render("ConfirmNewRecipe.php");
    }
    
}
$c=new DeleteRecipe(); 
$c->execute();

?>
