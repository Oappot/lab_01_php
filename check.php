<?php
include ('Connect.php');


$foo = new Foo();
$funcname = "Variable";
$foo->$funcname();  // Обращаемся к $foo->Variable()


$test = new Connect;
$test->Create();


?>