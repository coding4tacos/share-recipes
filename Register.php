<?php

ini_set("display_errors",true);
include_once("config/Config.php");
class Register{
    
    public function execute(){
        $view=new View();
        $view->render("RegisterView.php");
    }
    
}

$c=new Register(); 
$c->execute();


