<?php
$m = [
[
	'vardas'=> 'Jonas',
	'Lytis' => 'vyras',
	'amzius' => '21',
	'patiekalas' => 'krabai',
],
[
	'vardas' => 'Albinose',
	'Lytis' => 'moteris',
	'amzius' => '24',
	'patiekalas' => 'sriuba',
],
[
	'vardas' => 'Albinose',
	'Lytis' => 'moteris',
	'amzius' => '25',
	'patiekalas' => 'sriuba',
]
];
echo '<table>';
	echo '<tr>';
		echo '<th>Nr</th>';
		echo '<th>vardas</th>';
		echo '<th>moteris</th>';
		echo '<th>patiekalas</th>';
	echo '</tr>';
	$n = 0;
		foreach ($m as $darb){
	echo '<tr>';
		echo '<td>' . ++$n . '</td>';
		echo '<td>' . $darb['vardas'] . '</td';
		echo '<td>' . $darb['moteris'] . '</td>';
		echo '<td>' . $darb['patiekalas'] .'</td>';
	echo '</tr>';
	echo '</tr>';
}
echo '</table>';