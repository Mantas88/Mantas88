<?php

$kiek = 7;
for ($skaitliukas=0; $skaitliukas < $kiek; $skaitliukas++){
	echo $skaitliukas. '<br>';
}
echo 'baigta<br>';
echo '<br>';
$m = [1,2,8,4,5];

foreach($m as $a){
	echo $a . ' **2 = ' . $a**2 . '<br>.';
}

foreach($m as $a){
	if ($a >6) break;
	echo $a . ' **2 = ' . $a**2 . '<br>.';
}

foreach($m as $a){
	if ($a >6) continue;
	echo $a . ' **2 = ' . $a**2 . '<br>.';
}
