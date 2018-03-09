<?php 
$m = [
[
	'vardas'=> 'Jonas',
	'pareigos' => 'Direktorius',
	'atlyginimas' => 5000
],
[
	'vardas' => 'Petras',
	'pareigos' => 'Pavaduotojas',
	'atlyginimas' => 3000
],
[
	'vardas' => 'Juozas',
	'pareigos' => 'Valytojas',
	'atlyginimas' => 5000
]
];

echo '<table>';
	echo '<tr>';
		echo '<th>Nr</th>';
		echo '<th>Vardas</th>';
		echo '<th>Pareigos</th>';
		echo '<th>Atlyginimas</th>';
	echo '</tr>';
	$n = 0;
		foreach ($m as $darb){
	echo '<tr>';
		echo '<td>' . ++$n . '</td>';
		echo '<td>' . $darb['vardas'] . '</td';
		echo '<td>' . $darb['pareigos'] . '</td>';
		echo '<td>' . $darb['atlyginimas'] .'</td>';
	echo '</tr>';
	echo '</tr>';
}
echo '</table>';
