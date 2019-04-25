<?php
$DB_HOST="localhost";
define("DB_HOST","localhost");
define("DB_USER","recipes");
define("DB_PWD","1234");
define("DB_DB","recipes");



class AutoLoader{
    private static $classesAddr=[
        "DB" => "tools/DB.php",
        "RecipeDAO" => "daos/RecipeDAO.php",
        "Recipe" =>"models/Recipe.php",
        "View" => "views/View.php",
        "UserDAO" => "daos/UserDAO.php",
        "User" => "models/User.php"
    ];

    public static function load($className){
        $path=self::$classesAddr[$className];
        include_once($path);
    }

}

spl_autoload_register("Autoloader::load");