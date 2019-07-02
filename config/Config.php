<?php
$DB_HOST="localhost";
define("DB_HOST","localhost");
define("DB_USER","recipes");
define("DB_PWD","1234");
define("DB_DB","recipes");
/*
$DB_HOST="clearDB";
define("DB_HOST","us-cdbr-iron-east-02.cleardb.net");
define("DB_USER","bc7ffdb6b51c08");
define("DB_PWD","e675bedb");
define("DB_DB","heroku_cc0edd7777cf42d");
*/
// mysql://bc7ffdb6b51c08:e675bedb@us-cdbr-iron-east-02.cleardb.net/heroku_cc0edd7777cf42d?reconnect=true



class AutoLoader{
    private static $classesAddr=[
        "DB" => "tools/DB.php",
        "RecipeDAO" => "daos/RecipeDAO.php",
        "Recipe" =>"models/Recipe.php",
        "View" => "views/View.php",
        "UserDAO" => "daos/UserDAO.php",
        "User" => "models/User.php",
    ];

    public static function load($className){
        $path=self::$classesAddr[$className];
        include_once($path);
    }

}

spl_autoload_register("Autoloader::load");