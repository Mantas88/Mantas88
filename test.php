<?php
function suma ($x, $y){
	global $a;
	$s = $x + $y + $a;
	return $s;
}
function kartai(){
		static $a = 0;
		echo ++$a . '<br>';
	}
global $a;
$a = 1;
$b = $a + 2; echo $b . '<br>';
$c = $a + "333"; echo $c . '<br>';

echo suma (1,5) . '<br>';

kartai();
kartai();
kartai();

