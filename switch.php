<?php

$a = 5;
switch($a){
	case 1: echo 'vienas'; break;
	case 2: echo 'du'; break;
	case 3: echo 'trys'; break;
	default: echo ' kitasatvejis';
}
echo '<br>';
$a = 2;
switch($a){
	case 1:
	echo 'vienas';
	break;
	case 1: echo 'vienas'; break;
	case 2: echo 'du'; break;
	case 3: echo 'trys'; break;
	default: echo 'kitasatvejis';
}
echo '<br>';
$a = 'Jonas';
switch($a){
	case 'Jonas':	echo 'buvo';
	case 'Petras': ;
		echo 'Draugas'; break;
	case 'Antanas': echo 'priesas'; break;
	default: echo 'Nezinoma';
}
echo '<br>';
$a = 'Petras';
switch($a){
	case 'Jonas':	echo 'buvo';
	case 'Petras': ;
		echo 'Draugas'; break;
	case 'Antanas': echo 'priesas'; break;
	default: echo 'Nezinoma';
}
