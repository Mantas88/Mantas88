<?php

$s = ' Labas rytas ';
echo '"' . trim($s) . '"<br>';
echo '"' . $s . '"<br>';
echo '"' . ltrim($s). '"<br>';
echo '"' . rtrim($s) . '"<br>';
echo '"' . rtrim(ltrim($s)) . '"<br>';

echo strlen($s) . '<br>';
echo strtolower($s) . '<br>';
echo strtoupper($s) . '<br>';

$s = "labas rytas stai ir as";
echo ucfirst($s) . '<br>';
echo ucwords($s) . '<br>';
echo str_shuffle($s) . '<br>';
echo strtoupper( 'ąčęęęę') . '<br>';
echo mb_strtoupper ('ąčęęęė', 'UTF-8') . '<br>';
echo sprintf('Labas %s, %s', 'rytas', 'aa') . '<br>';

$s = 'labas rytas stai as ir cia';
$m = explode(' ',$s);
var_dump($m) . '<br>';

$mm = ['aaa', 'bbb', 'ccc'];
echo implode( ' , ', $mm) . '<br>';

echo substr($s, 6) . '<br>';
echo substr($s, 6, 5) . '<br>';
echo strpos($s, 'rytas') . '<br>';
echo str_replace('rytas',  'vakaras', $s) . '<br>';

$a = 'abd';
$b = 'abcc';
echo strcmp($a, $b);