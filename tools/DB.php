<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * DB Stores a connection to MySQL.
 * We will use a paradigm named "Singleton" which means we will use always a single connection object instead of creating one each time.
 *
 * @author taylo
 */


class DB {
    
    private static $con=null;
    
    public static function getDbCon(){
       
        if(self::$con==null){
            self::$con=new mysqli(DB_HOST,DB_USER,DB_PWD,DB_DB);
            
        }
        
        return self::$con;
    }
    
    
    
}
