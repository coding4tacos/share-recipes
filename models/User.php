<?php

class User {
    
    private $email;
    private $username;
    private $userId;
    
    
    function __construct($email, $username) {
        $this->email = $email;
        $this->username = $username;
        $this->userId = $userId;
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
        return $this->userId;
    }
}