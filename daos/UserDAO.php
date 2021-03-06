<?php
class UserDAO {
    private const SALT="asdoiub484kjfdbpitrw43nrtier98dGVFP94,9";
    private $con;
    
    function __construct() {
        $this->con = DB::getDbCon();
    }
    
    public function create($user,$password) {
        $con = $this->con;
        $password=hash("sha256",self::SALT.$password);
        // prepare and bind
        $stmt = $con->prepare("INSERT INTO users (id, email, username, password) VALUES (?, ?, ?, ?)");
        $stmt->bind_param("isss", $id, $email, $username, $password);

        $id = $user->getUserId();
        $email = $user->getEmail();
        $username = $user->getUsername();
        $password = $password;
        $stmt->execute();
         
        $stmt->close();
        $con->close();
    }
    
     public function read($email) {
        $con = $this->con;
        $user=null;
        // prepare stmt
        $stmt = $con->prepare("SELECT * FROM users WHERE email=?");
        $stmt->bind_param("s", $email);
        
        $email = $email;
        $r = $stmt->execute();
         if($r!==null){
            $user=new User($r["email"],$r["username"],$r["id"]);
        }
        return $user;
         
         /*
        $user=null;
        $sql="select * from users where email='$email'";
        $rs=$this->con->query($sql);
        $r=$rs->fetch_assoc();
        if($r!==null){
            $user=new User($r["email"],$r["username"]);
        }
        $rs->free();
        return $user;
          * 
          */
    }
    
    public function authenticate($username,$password) {
        /*
        $user=null;
        $con = $this->con;
  
        // prepare stmt
        $stmt = $con->prepare("SELECT email FROM users WHERE username=? AND password=?");
        $stmt->bind_param('ss', $user, $password);
        
        $user = $username;
        $password = hash("sha256",self::SALT.$password);
        
        echo 'user ' . $user;
        echo 'pass ' . $password;
        $rs = $stmt->execute();
        echo 'rs : ' . $rs; 
        if($r!==null){
            $user=new User($r["email"],$username);
        }
        return $user;
        
       
     }
        */
        
       
        $user=null;
        $password=hash("sha256",self::SALT.$password);
        $sql="select email,id from users where username='$username' and password='$password'";
        $rs=$this->con->query($sql);
        $r=$rs->fetch_assoc();
        if($r!==null){
            $user=new User($r["email"],$username,$r["id"]);
        }
        $rs->free();
        return $user;
    }    
}