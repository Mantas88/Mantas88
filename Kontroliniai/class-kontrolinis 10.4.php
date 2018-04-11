<?php
    class textList{
        public $texts;
    function add($text){
            $this->texts [] = $text;
}
    function symbols(){
            $ilg = 0;
    foreach ($this->texts as $ilgis){
            $ilg += strlen($ilgis);
}
    return $ilg;
}
    }

$t = new textList();
$t -> add ('Apple');
$t -> add ('Microsoft');
$t -> add ('Lenovo');
$t -> add ('Samsung');
$t -> add ('Huawei');

echo json_encode($t->texts);
echo '<br>';
echo $t->symbols();



//Sukurkite PHP skriptą, kuriame aprašykime klasę textList, kurioje būtų viena savybė ‐ $texts, kuri bus masyvas,
//taip pat būtų metodas add($text), kuris prideda naują tekstą į masyvą sąvybę $texts.
//Taip pat sukurkite metodą symbols(), kuris grąžintų masyve sąvybėje esančių elementų simbolių skaičių.