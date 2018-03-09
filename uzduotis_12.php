<?php

	$a = [3,6,8,4,2,3,7,3,1];

	function skait ($a){

		$x = 0;
//istraukti kiekviena masive esanti skaiciu ir sudeti su praitu
		foreach ($a as $value) {
		
		$x += $value;
//gauta skaiciu padalinti su count comanda ir gauti vidurki
		return $x / count($a);
	}

}
echo skait($a) . '<br>';
echo skait ([3,9,8,3,7,6]);

?>