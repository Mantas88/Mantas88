<?php
/**
Yra masyvas su tekstais. Padaryti funkciją, kuri vietoje tekstų į masyvą įrašytų tekstų pirmąsias raides. Funkcijos parametras - masyvas. Funkcija turi gražinti pakeistą masyvą. Pademonstruoti veikimą.

 */
$a = ['Mazda', 'Honda', 'Bmw', ];
function pirmas($b){
    $c = [];
    foreach ( $b as $f){

        $c[] =  substr($f,0,1);
    }
    return  $c;
}
var_dump(pirmas($a));