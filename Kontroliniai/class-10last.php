<?php
class countryList{
    public $countries;
    function insert($country){
        $this->countries [] = $country;
    }
    function avarage(){
        $ilg = 0;
        for ($i = 0; $i < count($this->countries); $i++){
            $ilg += strlen($this->countries[$i]);
            $vid = $ilg / count($this->countries);

        }
        return $vid;
    }
}
$c = new countryList();
$c -> insert ('Lietuva');
$c -> insert ('Latvija');
$c -> insert ('Estija');
$c -> insert ('Lenkija');
var_dump($c);
echo '<br>';
echo $c->avarage();

//Sukurkite PHP skriptą, kuriame aprašykime klasę countryList, kurioje būtų viena savybė ‐ $countries, kuri bus masyvas,
//taip pat būtų metodas insert($country), kuris papildo savybę $countries nauja šalimi. Taip pat sukurkite metodą average(),
//kuris grąžintų masyve sąvybėje esančių šalių pavadinimų ilgio matematinį vidurkį
