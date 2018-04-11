<?php
class universitetas {
    public $pavadinimas;
    public $miestas;
    public $studentai;
    function __construct ($p, $m, $s){
        $this->pavadinimas = $p;
        $this->miestas= $m;
        $this->studentai= $s;
    }
}
$darb = [];
$darb[] = new universitetas( 'KTU', 'Kaunas', 2000);
$darb[] = new universitetas( 'VDU', 'Kaunas', 1000);
$darb[] = new universitetas( 'ASU', 'Kaunas', 900);
var_dump($darb);

//Sukurkite PHP skriptą, kuriame būtų aprašyta klasė “universitetas”, kuri turi savybes ‐ pavadinimas,
//miestas, studentai. Sukurkite standartinį klasės __construct metodą, kuriam perdavus tris parametrus ‐
//pavadinimas, miestas, studentai ‐ perduotus parametrus padėtų į savo savybes.
