<?php

ini_set("display_errors",true);
include_once("config/Config.php");
class RegisterController{
    
    public function execute(){
        $view=new View();
        $view->render("RegisterView.php");
    }
    
}

$c=new RegisterController(); 
$c->execute();


