<?php
// aritmetiniai
$a = 1;
$b = 2;
$c = $a + $b;
echo $c . '<br>';
echo $c * 3 . '<br>';
echo $c / $b . '<br>';
echo $c **2 . '<br>';
echo ($c ** 2) % 5 .'<br>';

// priskirimo

$x = 1;
$x = $x + 5;
echo $x . '<br>';
//rezultatas tas pats bet kitaip
$x = 1;
$x += 5;
echo $x . '<br>';

//sulyginimas
$x = 5;
$y = 6;
$z = $x == $y;
var_dump($z);

$z = $x == $y - 1;
var_dump($z);

$y = 5;
$z = $x === $y;
var_dump($z);

$y = '5';
$z = $x === $y;
var_dump($z);

$y = 5;
$z = $x === $y;
var_dump($z);

var_dump (5 != 5);
var_dump (5 != 6);
var_dump (5 <> 6);
var_dump (5 > 6);
var_dump (6 > 5);
var_dump (6 >= 6);
var_dump (6 >= 5);

//incement/decrement
$a = 5;
echo ++$a . '<br>';
echo $a++ . '<br>';
echo $a . '<br>';

//loginiai oper

$a = 6 > 5; //duoda true
$b = 8 > 7; //duoda true
var_dump($a and $b);
$b = 8 > 9; //duoda false
var_dump($a && $b); //&&=and
var_dump($a || $b); //||=or
var_dump(4>5 xor 5>6);// xor turi buti vienas true kitas false tada = ture
var_dump(4>5 xor 7>6);

var_dump(6>5);
var_dump(!6>5);

$a = true;
$b = true;
$c = false;
var_dump($a && $b && $c);
var_dump($a && $b && !$c);// ! neigimo operatorius
$a = true;
$b = false;
$c = false;
var_dump(($a || $b) && $c);//false
//1. $a || $b => true
//2. (1)true && $c =>false (nes c  false)
var_dump($a || $b && $c);
//1. $b && $c => false
//2. (1)false || $a =>true 

//anaqlogija
$a = 1; $b = 0; $c = 0;
var_dump(($a + $b) && $c); //0
var_dump($a + $b && $c);

echo 1 + true . '<br>';
echo 1 + false . '<br>';
