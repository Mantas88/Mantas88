<?php
/**
Sukurkite PHP skriptą, kuriame būtų aprašyta klasė “salis”, kuri turi savybes ‐ pavadinimas, sostine, gyventojai.
 Sukurkite standartinį klasės __construct metodą,
kuriam perdavus tris parametrus ‐ pavadinimas, sostine, gyventojai ‐ perduotus parametrus padėtų į savo savybes.

 */

class salis {
    public $pavadinimas;
    public $sostine;
    private $gyventojai = 1000;
    function __construct ($p, $s, $g){
        $this->pavadinimas = $p;
        $this->sostine = $s;
        $this->gyventojai = $g;
    }
}
$darb = [];
$darb[] = new salis( 'Siaures Koreja', 'Pchenjanas',26000000);
$darb[] = new salis( 'Somalis', 'Mogadišas', 15000000);
$darb[] = new salis( 'Afganistanas', 'Kabulas', 35000000);
var_dump($darb);