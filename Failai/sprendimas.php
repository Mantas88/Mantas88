<?php

//Yra masyvas su skaičiais. Paversti masyvą į tekstą apjungiant masyvo elementus kableliais ir įrašyti į failą. Nuskaityti iš failo ir išvesti į puslapį.


$c = [4, 5, 7, 3];

$m = implode(',', $c);

file_put_contents('uzduotis.txt', $m);

$s = file_get_contents('uzduotis.txt');
echo $s . '<br>';
