<?php

//Yra masyvas su tekstais. Padaryti funkciją, kuri masyvo tekstuose pakeistų nurodytą raidę į tarpą. Funkcijos parametrai: masyvas ir nurodyta raidė. Funkcija turi gražinti pakeistą masyvą. Pademonstruoti veikimą.


$a = ['Mazda', 'Honda', 'Bmw', 'bla'];

function pirmas ($a){
    $b = [];
    foreach ($a as $c) {
        $b [] = substr_replace($c, " ", 3, 1);
}
    return $b;
}
var_dump(pirmas($a));