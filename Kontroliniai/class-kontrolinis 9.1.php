<?php

class automobilis{
    public $gamintojas;
    public $modelis;
    public $metai;

    function __construct($g, $m, $s){
        $this->gamintojas = $g;
        $this->modelis = $m;
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
$c = new automobilis('Honda', 'Civic', '2018');
$f = new lengvasis ('Toyota', 'Auris', '2012');
$g = new krovininis ('Kablys', 'Ducato', 2013);

$c->duomenys();
$f->duomenys();
$g->duomenys();




//Panaudodami prieš tai sukurtą klasę automobilis (8.1),
//sukurkite klases lengvasis ir krovininis, kurios paveldi automobilis klasę. automobilis klasę papildykite metodu “duomenys”,
//kuris išvestų suformatuotą eilutę “gamintojas - modelis - metai”.
//lengvasis klasėje perrašykite metodą duomenys, pakeisdami išvedamą eilutę į “gamintojas, modelis, metai (lengvasis automobilis)”.
//lengvasis automobilis ? tiesiog paprastas žodis.
