<?php

    require_once "test.php";
/*
    $obj = new MathComplex;

    $obj->re = 10;
    $obj->im = 20;
    $obj->add(1, 2);
    echo "({$obj->re},{$obj->im})";

    $a = new MathComplex1;
    $a->re = 100;

    $b = new MathComplex1;
    $b->re = 11;

    $a->add($b);

    echo $a->__toString();*/

    $a = new MathComplex2;
    $a->add(new MathComplex2(33, 44));
    echo "<pre>";
    printf ($a);
    echo "</pre>";
?>
