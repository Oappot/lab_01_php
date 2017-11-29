<?php

class Connect {
    private $connection;
    private $cryptPass;
    //MAIN
    function __construct(){
        $this->connect();
    }

    function connect(){
        $this->connection = new PDO('mysql:host=orfarile;dbname=orfarile', 'root', '');
    }

    function createUser($login, $password){    
        $this->cryptPass = ($login.$password);
        $this->connection->query("INSERT INTO users(user_login, user_password) VALUES ('".$login."', '". md5($this->cryptPass.salt) ."')");
    }

    //PRE-RELEASE

    //TEST A
    function checkUser($login, $password){
        $this->cryptPass = ($login.$password);
        $temp = $this->connection->query("SELECT * FROM users WHERE user_login like '".$login."' AND user_password like '".md5($this->cryptPass.salt)."' ;");

        while ($row = $temp->fetch()){
            print_r ("login = ".$row['user_login']."<br> password = ".$row['user_password']);
        }
    }
}
?>