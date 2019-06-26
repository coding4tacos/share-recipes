<?php

ini_set("display_errors",true);
include_once("config/Config.php");
class DoRegisterController { 
    
    public function execute(){
        $view=new View();
        $dao=new UserDAO();  
        $user=new User($_POST["email"],$_POST["username"], null);
        $dao->create($user, $_POST["password"]);
        $view->render("RegisterOK.php");
    }
    
}

$c=new DoRegisterController(); 
$c->execute();

