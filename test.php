<?php
// PDO + MySQL
$pdo = new PDO('mysql:host=orfarile;dbname=orfarile', 'orfarile', 'orfarile');
/*$statement = */$pdo->query("INSERT INTO users(login, password) VALUES ('test1', 'test1')");
?>