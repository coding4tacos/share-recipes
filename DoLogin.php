<?php


ini_set("display_errors",true);
include_once("config/Config.php");
class DoLoginController{
    
    public function execute(){
        $view=new View();
        $dao=new UserDAO();  
        $user=$dao->authenticate($_POST["username"],$_POST["password"]);
        if($user!=null){
            // Authentication successful
            session_start();
            $_SESSION["user"]=$user;
            $view->render("LoginOK.php");
        }
        else{
            $view->render("LoginERROR.php");
        }
        
    }
    
}

$c=new DoLoginController(); 
$c->execute();