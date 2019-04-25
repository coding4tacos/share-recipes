<?php

class UserDAO {
    
    private const SALT="asdoiub484kjfdbpitrw43nrtier98dGVFP94,9";
    
    private $con;
    
    
    function __construct($con) {
        $this->con = $con;
    }

    public function create($user,$password) {
        $password=hash("sha256",SALT+$password);
        $sql="insert int users (email,username,password) values ('$email','$username','$password')";
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
    
    
     public function authenticate($email,$password) {
        $user=null;
        $password=hash("sha256",SALT+$password);
        $sql="select * from users where email='$email' and password='$password'";
        $rs=$this->con->query($sql);
        $r=$rs->fetch_assoc();
        if($r!==null){
            $user=new User($r["email"],$r["username"]);
        }
        $rs->free();
        return $user;
    }
    
}