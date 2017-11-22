<?php

class Connect {
    private $connection;

    function __construct(){
        $this->connect();
    }

    function connect(){
        $this->connection = new PDO('mysql:host=orfarile;dbname=orfarile', 'root', '');
    }

    function selectTests(){
    }

    function createUser($login, $pass){    
        $this->connection->query("INSERT INTO users(user_login, user_password) VALUES ('
        ".$login."', '".md5($password)."')");
    }

    function login(){
        $this->connection->query();
    }
    
}

?>