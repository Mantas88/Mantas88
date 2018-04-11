<?php
/**
Sukurkite PHP skriptą, kuriame būtų aprašytas vienmatis masyvas iš 3 elementų ‐ teksto eilučių.
Panaudodami foreach ciklą ‐ pakeiskite visus masyvo elementus ‐ paversdami tekstą mažosiomis raidėmis.

 */

$masyvas = ['RYTAS', 'DIENA', 'VAKARAS'];

foreach ($masyvas as $key => $value){
    $masyvas [$key] = strtolower($value);

}

var_dump($masyvas);