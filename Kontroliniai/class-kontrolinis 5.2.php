<?php
class c {
    private $mas = [];
    function add($Gamintojas, $Modelis, $Metai, $Galingumas) {
        $this-> mas [] = [
            'Gamintojas' => $Gamintojas,
            'Modelis' => $Modelis,
            'Metai' => $Metai,
           'Galingumas' =>$Galingumas
        ];
    }
    function info () {
        return $this->mas;
    }
}

$p = new c();
$p-> add( 'Honda', 'Civic', 2012, '124kw');
$p-> add( 'Toyota', 'Auris', 2016, '78kw');
$p-> add( 'Subaru', 'impreza', 2012, '300kw');
var_dump($p->info());

/**
Sukurkite PHP skriptą, kuriame būtų aprašytas masyvas, aprašantis tris automobilius,
kurių kiekvienas yra aprašytas asociatyviniu masyvu naudojant raktus.
Asociatyviniuose  masyvuose turi būti laukeliai: gamintojas, modelis, pagaminimo metai, galingumas.

 */