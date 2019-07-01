<?php
$DB_HOST="heroku";
define("DB_HOST","us-cdbr-iron-east-02.cleardb.net");
define("DB_USER","b5302fa7caa11d");
define("DB_PWD","70270cde");
define("DB_DB","heroku_348a6ba98279c74");



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