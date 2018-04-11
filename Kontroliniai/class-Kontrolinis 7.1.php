<?php

$masyvas = [
    'name'=>'Vardas',
    'lastname'=>'Pavarde',
    'address'=>'Adresas',
    'email'=> 'El pastas',
    'phone number'=> 'Telefono numeris'
];

foreach($masyvas as $key => $value){
    $mas [$key] =  strtoupper(substr($value, 0, -1));
}
echo json_encode($masyvas) . '<br>';
echo json_encode($mas);
var_dump($masyvas);
echo '<br>';
var_dump($mas);

//Sukurkite PHP skriptą, kuriame būtų aprašytas asociatyvinis masyvas iš 5 elementų ‐ teksto eilučių.
//Panaudodami foreach ciklą pakeiskite visus masyvo elementus ‐
 //paversdami tekstą didžiosiomis raidėmis, o paskutinę raidę - pašalinkite.




//$m = [
//    'a' => 'AAAAA',
//    'b' => 'BBBBB',
//    'c' => 'CCCCC',
//    'd' => 'DDDDD',
//    'e' => 'EEEEE'
//];
//foreach($m as $key => $value) $m[$key] = ucfirst(strtolower($value));
//var_dump($m);
