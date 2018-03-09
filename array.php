<?php

$m = ['Jonas', 'Petras', 'Antanas'];
var_dump($m);
$m[1] = 'Juozas';
var_dump($m);
$m[3] = 'Juozapas';
var_dump($m);
$m[] = 'Andrius';
var_dump($m);
$mm = $m;
unset($m[1]);
var_dump($m);
array_splice($mm, 1, 1);
var_dump($mm);
// asoc masyvai
$a = ['BMW' => 10000, 'audi' => 8000, 'honda' => 3000];
var_dump($a);
$a['BMW'] = 12000;
unset($a['honda']);
$a['ford'] = 7000;
var_dump($a);

$s = 0;
foreach($a as $key => $value){
	$s += $value;
}

echo $s / count($a);