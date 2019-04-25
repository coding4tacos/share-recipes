<?php

class User {
    
    private $email;
    private $username;
    
    
    function __construct($email, $username, $password) {
        $this->email = $email;
        $this->username = $username;
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
}