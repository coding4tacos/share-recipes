<?php

ini_set("display_errors",true);
include_once("config/Config.php");
class RegisterController{
    
    public function execute(){
        $view=new View();
        $view->render("AccountDataView.php");
    }
    
}

$c=new RegisterController(); 
$c->execute();