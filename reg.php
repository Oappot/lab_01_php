<?php
include ('Connect.php');

$login = $_POST['login'];
$pass = $_POST['pass'];

$test = new Connect;
$test->createUser($login, $pass);

?>