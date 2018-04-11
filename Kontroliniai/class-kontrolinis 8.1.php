<?php
class Lengvasis {
    public $Gamintojas;
    public $Modelis;
    private $Metai = 1000;
    function __construct ($G, $m, $M){
        $this->Gamintojas = $G;
        $this->Modelis = $m;
        $this->Metai = $M;
    }
}
$darb = [];
$darb[] = new Lengvasis( 'Honda', 'Civic', 2018);
$darb[] = new Lengvasis( 'Toyota', 'Auris', 2015);
$darb[] = new Lengvasis( 'Subaru', 'Legacy', 2014);
var_dump($darb);

//Sukurkite PHP skriptą, kuriame būtų aprašyta klasė “automobiliai”, kuri turi savybes ? gamintojas, modelis, metai.
// Sukurkite standartinį klasės __construct metodą, kuriam perdavus tris parametrus ? gamintojas, modelis, metai ?
// perduotus parametrus padėtų į savo savybes. Pademonstruoti veikimą.