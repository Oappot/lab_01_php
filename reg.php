<?php
include ('Connect.php');

print_r($_POST);
print_r($_SESSION);
echo "<hr>";

$login = $_POST['login'];
$password = $_POST['password'];

$test = new Connect;
//$test->createUser($login, $password);
$test->checkUser($login, $password);

?>