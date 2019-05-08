<?php

ini_set("display_errors",true);
include_once("config/Config.php");
class AddRecipeController{
    
    public function execute(){
       $view=new View();
       session_start();
       if(isset($_SESSION['user'])) {
            $view->render("AddRecipe.php");
       }
       else{
           // pagina que diga que no esta logeado el usuario
       }
    }
    
}

$c=new DoRegisterController(); 
$c->execute();

