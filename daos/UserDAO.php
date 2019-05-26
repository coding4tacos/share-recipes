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
         $stmt = $this->con->prepare("INSERT INTO users (email, username, password) VALUES (?, ?, ?)");
         $stmt->bind_param("sss", $email, $username, $password);
        
         $email = $user->getEmail();
         $username = $user->getUsername();
         $password = $password;
         $stmt->execute();
         
        $stmt->close();
        $this->con->close();
     
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
      
        /*
        // PREPARED STATEMENT
        $stmt = $this->con->prepare("SELECT FROM users WHERE username=? AND password=?");
        $stmt->bind_param("ss", $username, $password);

        $username = $user->getUsername();
        $password = hash("sha256",self::SALT.$password);
        
        $r = $stmt->execute();
                
        if($r== true){
            $user=new User($r["email"],$username);
        } else {
            echo 'false!';
        }
        

         
        return $user;
        
        */
        
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