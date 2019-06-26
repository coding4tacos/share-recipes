<?php

class User {
    
    private $email;
    private $username;
    private $id;
   
    function __construct($email, $username,$id) {
        $this->email = $email;
        $this->username = $username;
        $this->id=$id;
    }
    
    function getEmail() {
        return $this->email;
    }

    function setEmail($email) {
        $this->email = $email;
    }
    
    function getUsername() {
        return $this->username;
    }

    function setUsername($username) {
        $this->username = $username;
    }    
    
    function getUserId() {
        return $this->id;
    }
}