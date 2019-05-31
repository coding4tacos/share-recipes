<?php

ini_set("display_errors",true);
include_once("config/Config.php");
class LoginController{
    
    public function execute(){
        $view=new View();
        $view->render("LoginView.php");
    }
}

$c=new LoginController(); 
$c->execute();