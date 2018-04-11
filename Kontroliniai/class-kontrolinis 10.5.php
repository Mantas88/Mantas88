<?php
class rndList{
    public $numbers= [];
    function generate(){
        $this->numbers [] = rand(5,600);
    }
    function listas(){
        sort($this->numbers);
        return implode(' ', $this->numbers);
    }



}
$g = new rndlist();
$g->generate();
$g->generate();
$g->generate();
$g->generate();
$g->generate();
$g->generate();
$g->generate();
echo json_encode($g->numbers);
echo '<br>';
echo $g->listas();

//
//Sukurkite PHP skriptą, kuriame aprašykime klasę rndList, kurioje būtų viena savybė ‐ $numbers,
//kuri bus masyvas, taip pat būtų metodas generate(),
//kuris sugeneruoja atsitiktini skaičių ir padeda į masyvą sąvybę $numbers.
//Taip pat sukurkite metodą list(),
//kuris surikiuoja masyve esančius skaičius ir išveda juos su echo atskiriant vieną nuo kito tarpais.
