<?php

namespace App;

class Pengguna{
    public $username;
    public $password;
    protected $email;

    function __construct($user,$pw)
    {
        $this->username = $user;
        $this->password = $pw;

    }

    function login(){
        
    }

    public function getUsername()
    {
        return $this->username;
    }

    public function getPassword()
    {
        return $this->password;
    }

    public function setUsername($user)
    {
        $this->username = $user;
    }

    public function setPassword($pw)
    {
        $this->password = $pw;
    }
    function register(){
    }
    
}
?>