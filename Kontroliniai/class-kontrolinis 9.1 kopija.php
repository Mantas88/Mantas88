<?php

class automobilis{
    public $gamintojas;
    public $modelis;
    public $metai;

    function __construct($n, $a,$s){
        $this->gamintojas = $n;
        $this->modelis = $a;
        $this->metai = $s;
    }

    function duomenys (){
        $s = "%s - %s - %s <br> ";
        echo sprintf($s, $this->gamintojas, $this->modelis, $this->metai);
    }
}
class lengvasis extends automobilis {

    function duomenys (){
        $s = "%s , %s , %s lengvasis automobilis <br> ";
        echo sprintf($s, $this->gamintojas, $this->modelis, $this->metai);
    }
}
class krovininis extends automobilis {
}
$c = new automobilis('Audi', 'A6', 2012);
$f = new lengvasis('BMW', 530, 2017);
$g = new krovininis('Volvo', 'S200', 2013);
$c->duomenys();
$f->duomenys();
$g->duomenys();