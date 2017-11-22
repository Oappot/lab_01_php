<?php

class Connect {
    private $connection;

    function __construct(){
        $this->connect();
    }

    function connect(){
        $connection = new PDO('mysql:host=orfarile;dbname=orfarile', 'root', '');
        
    }

    function selectTests(){
    }

    function createUser(){    
        $this->connection->query("INSERT INTO users(user_login, user_password) VALUES ('test2', 'test2')");
    }
}

?>