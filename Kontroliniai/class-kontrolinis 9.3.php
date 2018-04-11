<?php

class universitetas{
    public $pavadinimas;
    public $miestas;
    public $studentai;

    function __construct($g, $m, $s){
        $this->pavadinimas = $g;
        $this->miestas = $m;
        $this->studentai = $s;
    }

    function info (){
        $s = "%s - %s - %s <br> ";
        echo sprintf($s, $this->pavadinimas, $this->miestas, $this->studentai);
    }
}
class ktu extends universitetas {

    function info (){
        $s = "%s , %s , %s aukstasis <br> ";
        echo sprintf($s, $this->pavadinimas, $this->miestas, $this->studentai);
    }
}
class vu extends universitetas {
}
$c = new universitetas('ASU', 'Kaunas', 999);
$f = new ktu ('KTU', 'Kaunas', 999);
$g = new vu ('VU', 'Vilnius', 666);

$c->info();
$f->info();
$g->info();






//Panaudodami prieš tai sukurtą klasę universitetas, sukurkite klases ktu ir vu, kurios paveldi universitetas klasę.
//universitetas klasę papildykite metodu “info”,
//kuris išvestų suformatuotą eilutę “pavadinimas, miestais, studentai”.
//ktu klasėje perrašykite metodą info, pakeisdami išvedamą eilutę į “pavadinimas, miestais, studentai (KTU)”.
//KTU ‐ tiesiog paprastas žodis. vu klasėje perrašykite metodą info, pakeisdami išvedamą eilutę į “pavadinimas, miestais,
//studentai (VU)”. VU ‐ tiesiog paprastas žodis. Patkrinkite visų trijų klasių metodo “info” veikimą





