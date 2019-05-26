<?php

class UserDAO {
    
    private const SALT="asdoiub484kjfdbpitrw43nrtier98dGVFP94,9";
    
    private $con;
    
    
    function __construct() {
        $this->con = DB::getDbCon();
    }

    public function create($user,$password) {
        $password=hash("sha256",self::SALT.$password);
        
        
        // WORKING on prepared statements
        // ----
        // prepare and bind
        //$stmt = $this->con->prepare("INSERT INTO users (email, username, password) VALUES ('{$user->getEmail()}','{$user->getUsername()}','$password')";
        // $stmt = bind_param("sss", $email, $username, $password);
        
        
        
        
        $sql="insert into users (email,username,password) values ('{$user->getEmail()}','{$user->getUsername()}','$password')";
        $this->con->query($sql);
        
    }
     public function read($email) {
        $user=null;
        $sql="select * from users where email='$email'";
        $rs=$this->con->query($sql);
        $r=$rs->fetch_assoc();
        if($r!==null){
            $user=new User($r["email"],$r["username"]);
        }
        $rs->free();
        return $user;
    }
    
    
     public function authenticate($username,$password) {
        $user=null;
        $password=hash("sha256",self::SALT.$password);
        $sql="select email from users where username='$username' and password='$password'";
        $rs=$this->con->query($sql);
        $r=$rs->fetch_assoc();
        if($r!==null){
            $user=new User($r["email"],$username);
        }
        $rs->free();
        return $user;
    }
    
}