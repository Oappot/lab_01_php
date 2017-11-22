<?php

class Connect {
    public $connection;

    public function __construct(){
        $this->connect();
    }

    public function connect(){
        $connection = new PDO('mysql:host=orfarile;dbname=orfarile', 'root', '');
    }

    function selectTests(){
        
    }

    public function Create(){
        $connection->query("INSERT INTO users(user_login, user_password) VALUES ('test1', 'test1')");
    }
}

class Foo
{
    function Variable()
    {
        $name = 'Bar';
        $this->$name(); // Вызываем метод Bar()
    }
    
    function Bar()
    {
        echo "This is Bar";
    }
}
?>