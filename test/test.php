<?php

class MathComplex{
    public $re, $im;

    function add($re, $im){
        $this->re += $re;
        $this->im += $im;
    }
}

class MathComplex1{
    public $re, $im;

    function add(MathComplex1 $y){
        $this->re += $y->re;
        $this->im += $y->im;
    }

    function __toString(){
        return "({$this->re},{$this->im})";
    }
}
class MathComplex2{
    public $re, $im;

    function __construct($a, $b){
        $this->re = $a;
        $this->im = $b;
    }

    function add(MathComplex2 $y){
        $this->re += $y->re;
        $this->im += $y->im;
    }
    function __toString(){
        return "({$this->re},{$this->im})";
    }
}
?>