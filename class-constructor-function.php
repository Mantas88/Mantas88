<?php

class a {
    private $x;
    private $y;
function fnc(){
    return$this->x * $this->y;
}
function __construct($xx, $yy){
    $this ->x = $xx;
    $this ->y = $yy;
}
}

$c = new a(2, 3);
echo $c->fnc() . '<br>';